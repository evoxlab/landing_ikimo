<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('iniciar-sesion', 'Home::login');
$routes->post('login', 'Home::login_action');
$routes->get('gracias', 'Home::thanks');
$routes->post('contact', 'Home::contact');
$routes->post('survey', 'Home::survey');

$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard/clientes', 'Dashboard::clients');
$routes->get('dashboard/usuarios', 'Dashboard::users');
$routes->get('dashboard/encuestas', 'Dashboard::surveys');

$routes->get('dashboard/salir', 'Dashboard::logout');




