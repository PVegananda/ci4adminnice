<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Tables
$routes->get('/tables/data', 'Home::tableData');
$routes->get('/tables/general', 'Home::tableGeneral');

// Components
$routes->get('/components/alerts', 'Home::alerts');
$routes->get('/components/accordion', 'Home::accordion');

// Forms
$routes->get('/forms/elements', 'Home::formElements');
$routes->get('/forms/layouts', 'Home::formLayouts');

// Pages
$routes->get('/profile', 'Home::profile');
$routes->get('/faq', 'Home::faq');
$routes->get('/contact', 'Home::contact');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/error-404', 'Home::error404');
$routes->get('/blank', 'Home::blank');

// Custom Pages
$routes->get('/produk', 'Home::produk');
$routes->get('/keranjang', 'Home::keranjang');
