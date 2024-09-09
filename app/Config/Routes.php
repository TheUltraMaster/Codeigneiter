<?php

use CodeIgniter\Router\RouteCollection;


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// Route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// CRUD Routes for Automobiles
$routes->get('automoviles-list', 'AutomovilCrud::index');
$routes->get('automovil-form', 'AutomovilCrud::create');
$routes->post('store-automovil', 'AutomovilCrud::store');  
$routes->get('edit-automovil/(:num)', 'AutomovilCrud::singleAutomovil/$1');
$routes->post('update-automovil', 'AutomovilCrud::update');
$routes->get('delete-automovil/(:num)', 'AutomovilCrud::delete/$1');

// CRUD Routes for Users (if still needed)
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');
