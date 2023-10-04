<?php

namespace App\Controllers\PublicControllers;

use App\Models\Users;
use App\Controllers\BaseController;

class LoginController extends BaseController {
  public function login(): string {
    $navbar = view('public/components/navbar/navbar');
    $loginCard = view('public/login/components/login-card');

    $data['navbar'] = $navbar;
    $data['loginCard'] = $loginCard;

    $login = view('public/login/login', $data);
    return $this->loadView($login);
  }

  public function loginPost() {
    $user = $this->request->getPost('user');
    $password = $this->request->getPost('password');

    $User = new Users();
    $dataUser = $User->getUser(['user_strName' => $user]);

    if (count($dataUser) > 0) {
        if ( password_verify($password, $dataUser[0]['user_strPassword']) ) {

            $data = [
                "user" => $dataUser[0]['user_strName'], 
                "type" => 'admin',
            ];

            $session = session();
            $session->set($data);  
            return redirect()->to(base_url('/admin'))->with('mensaje', '1');
        } else {
            return redirect()->to(base_url('/login'))->with('mensaje', '1');
        }
    } else {
        return redirect()->to(base_url('/login'))->with('mensaje', '1');
    }
  }
}
