<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

//$routes->resource() pada app/Config/Routes.php agar secara otomatis mendaftarkan 7 rute RESTful (index, new, create, edit, update, delete, show): RESTful Resource Controller
$routes->resource('akun1', ['controller' => 'Akun1']);

$routes->resource('akun2', ['controller' => 'Akun2']);

$routes->resource('akun3', ['controller' => 'Akun3']);
