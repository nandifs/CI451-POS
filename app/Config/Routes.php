<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// $routes->get('/', 'Home::index');
$routes->get('about', 'Page::about');
$routes->get('contact', 'Page::contact');
$routes->get('faqs', 'Page::faqs');
$routes->get('sign-in', 'Page::signin');

// Routes for BackOffice
$routes->get('/', 'Backend\Main::dashboard');
$routes->get('dashboard', 'Backend\Main::dashboard');

$routes->get('kategori', 'Backend\ProdukKategori::index');
$routes->post('kategori', 'Backend\ProdukKategori::index');
$routes->get('kategori/tambah', 'Backend\ProdukKategori::new');
$routes->post('kategori/simpandatabaru', 'Backend\ProdukKategori::create');
