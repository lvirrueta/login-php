<?php

namespace App\Controllers\PublicControllers;
use App\Controllers\BaseController;

class LandingController extends BaseController {
  public function index(): string {
      $navbar = view('public/components/navbar/navbar');
      $landing = view('public/landing/landing');

      $view = $navbar.$landing;
      return $this->loadView($view);
  }
}
