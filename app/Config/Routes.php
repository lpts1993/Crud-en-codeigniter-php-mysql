<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'C_persona::index');
$routes->get('/agregar', 'c_persona::agregar');
$routes->post('/insertar', 'c_persona::insertar');
$routes->get('/eliminar/(:num)', 'c_persona::eliminar/$1');
$routes->get('/editar/(:num)', 'c_persona::editar/$1');
$routes->post('/factualizar', 'c_persona::factualizar');

