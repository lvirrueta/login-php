<?php

namespace App\Controllers\UserControllers;
use App\Controllers\BaseController;

class HomeController extends BaseController {
    public function admin(): string {
        $navbar = view('user/components/navbar/navbar');

        $data['navbar'] = $navbar;

        $home = view('user/home/home', $data);
        return $this->loadView($home);
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'))->with('mensaje', '1');
    }
}
