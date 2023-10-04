<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->post('/login', 'Home::loginPost');

// User
$routes->get('/admin', 'Home::admin');
$routes->get('/logout', 'Home::logout');
