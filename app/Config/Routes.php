<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route (beranda)
$routes->get('/', 'Beranda::index');

// Halaman tentang
$routes->get('tentang', 'Beranda::tentang');

// Route dengan parameter angka
$routes->get('pengguna/(:num)', 'Beranda::pengguna/$1');

// Halaman waktu
$routes->get('waktu', 'Beranda::waktu');