<?php

use App\Controllers\Api\LuasPersegi;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/film', 'Api\FilmController::index');
$routes->post('/hitung-luas', 'Api\LuasPersegi::hitungLuasPersegi');
$routes->post('/simpan-pesan', 'Api\Pesan::simpanPesan');
$routes->get('/waktu-sekarang', 'Api\Waktu::waktuSekarang');