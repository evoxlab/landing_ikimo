<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('registro', 'Home::register_action');

#$routes->get('iniciar-sesion', 'Home::login');
#$routes->post('login', 'Home::login_action');

$routes->post('survey', 'Home::survey');

$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard/clientes', 'Dashboard::clients');
$routes->get('dashboard/usuarios', 'Dashboard::users');
$routes->get('dashboard/encuestas', 'Dashboard::surveys');

$routes->get('dashboard/salir', 'Dashboard::logout');




