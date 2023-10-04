<?php

namespace App\Controllers;

use App\Models\Users;

class Home extends BaseController {
    public function index(): string {
        $navbar = view('public/components/navbar/navbar');
        $landing = view('public/landing/landing');

        $view = $navbar.$landing;
        return $this->loadView($view);
    }

    public function login(): string {
        $navbar = view('public/components/navbar/navbar');
        $login = view('public/login/login');

        $view = $navbar.$login;
        return $this->loadView($view);
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

    public function admin(): string {
        // $navbar = view('');
        $view = view('user/home/home');
        return $this->loadView($view);
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'))->with('mensaje', '1');
    }
}
