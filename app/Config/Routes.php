<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public
$routes->get('/', 'PublicControllers\LandingController::index');
$routes->get('/login', 'PublicControllers\LoginController::login');
$routes->post('/login', 'PublicControllers\LoginController::loginPost');

// User
$routes->get('/admin', 'UserControllers\HomeController::admin');
$routes->get('/logout', 'UserControllers\HomeController::logout');
