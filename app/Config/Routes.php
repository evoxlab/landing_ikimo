<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('registro', 'Home::register_action');

#$routes->get('iniciar-sesion', 'Home::login');
#$routes->post('login', 'Home::login_action');

// $routes->post('survey', 'Home::survey');
$routes->get('admin', 'Home::login');
$routes->post('admin_login', 'Home::login_action');

$routes->get('dashboard', 'Dashboard::index');
//estrucuta
$routes->match(['get', 'post'], '/dashboard/estructura', 'Dashboard::estructura');
$routes->post('/dashboard/estructura_up', 'Dashboard::estructura_up');
$routes->get('/dashboard/estructura/(:num)', 'Dashboard::estructura/$1');

$routes->get('dashboard/clientes', 'Dashboard::clients');
$routes->get('dashboard/usuarios', 'Dashboard::users');
$routes->get('dashboard/encuestas', 'Dashboard::surveys');

$routes->get('dashboard/salir', 'Dashboard::logout');




