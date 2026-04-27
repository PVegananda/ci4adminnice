<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ======= Authentication Routes =======
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');
// End Authentication Routes

$routes->get('/', 'Home::index', ['filter' => 'auth']);

// Tables
$routes->get('/tables/data', 'Home::tableData', ['filter' => 'auth']);
$routes->get('/tables/general', 'Home::tableGeneral', ['filter' => 'auth']);

// Components
$routes->get('/components/alerts', 'Home::alerts', ['filter' => 'auth']);
$routes->get('/components/accordion', 'Home::accordion', ['filter' => 'auth']);

// Forms
$routes->get('/forms/elements', 'Home::formElements', ['filter' => 'auth']);
$routes->get('/forms/layouts', 'Home::formLayouts', ['filter' => 'auth']);

// Pages
$routes->get('/profile', 'Home::profile', ['filter' => 'auth']);
$routes->get('/faq', 'Home::faq', ['filter' => 'auth']);
$routes->get('/contact', 'Home::contact', ['filter' => 'auth']);
// $routes->get('/login', 'Home::login'); // Moved to AuthController
$routes->get('/register', 'Home::register', ['filter' => 'auth']);
$routes->get('/error-404', 'Home::error404', ['filter' => 'auth']);
$routes->get('/blank', 'Home::blank', ['filter' => 'auth']);

// Custom Pages
$routes->get('/produk', 'Home::produk', ['filter' => 'auth']);
$routes->get('/keranjang', 'Home::keranjang', ['filter' => 'auth']);
