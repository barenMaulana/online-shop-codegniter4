<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// index
$routes->get('/', 'Home::index');
$routes->get('indah-taman-product', 'Home::product');
$routes->match(['get', 'post'], 'search-product', 'Home::search');

// admin
$routes->get('admin-dashboard', 'Admin::index', ['filter' => 'auth']);
$routes->get('admin-product', 'Admin::product', ['filter' => 'auth']);
$routes->get('admin-gallery', 'Admin::gallery', ['filter' => 'auth']);

// product
$routes->match(['get', 'post'], 'product-create', 'Product::index', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'product-detail', 'Product::detail', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'product-update', 'Product::update', ['filter' => 'auth']);

// gallery
$routes->match(['get', 'post'], 'gallery-create', 'Gallery::index', ['filter' => 'auth']);


// auth
$routes->match(['get', 'post'], 'login', 'Auth::index', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'registration', 'Auth::registration', ['filter' => 'noauth']);
$routes->get('logout', 'Auth::logout');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
