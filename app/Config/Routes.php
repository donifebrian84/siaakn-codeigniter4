<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('akun1', 'Akun1::index');
$routes->get('akun1/new', 'Akun1::new');
$routes->post('akun1', 'Akun1::create');
$routes->get('akun1/edit/(:segment)', 'Akun1::edit/$1');
$routes->put('akun1/update/(:segment)', 'Akun1::update/$1');
$routes->delete('akun1/delete/(:segment)', 'Akun1::delete/$1');

//$routes->resource() pada app/Config/Routes.php agar secara otomatis mendaftarkan 7 rute RESTful (index, new, create, edit, update, delete, show): RESTful Resource Controller untuk Akun 2
$routes->resource('akun2', ['controller' => 'Akun2']);

$routes->resource('akun3', ['controller' => 'Akun3']);
