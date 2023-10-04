<?php

namespace App\Controllers\PublicControllers;
use App\Controllers\BaseController;

class LandingController extends BaseController {
  public function index(): string {
      $navbar = view('public/components/navbar/navbar');
      $footer = view('public/components/footer/footer');

      $data['navbar'] = $navbar;
      $data['footer'] = $footer;

      $landing = view('public/landing/landing', $data);
      return $this->loadView($landing);
  }
}
