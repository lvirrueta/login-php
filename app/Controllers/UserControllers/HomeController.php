<?php

namespace App\Controllers\UserControllers;
use App\Controllers\BaseController;

class HomeController extends BaseController {
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
