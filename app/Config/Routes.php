<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/home', 'Home::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/signin', 'LoginController::sgnIn');

$routes->get('/registro', 'RegistroController::index');
$routes->get('/registro/crear', 'RegistroController::crear');
$routes->post('/añadirregistro', 'RegistroController::añadirRegistro');
$routes->get('/eliminarregistro', 'RegistroController::eliminarRegistro');
$routes->get('/modificarregistro', 'RegistroController::modificarRegistro');
$routes->post('/modificar', 'RegistroController::modificarEditar');

$routes->get('/agregar', 'AgregarApartamentoController::index');
$routes->get('/agregar/crear', 'AgregarApartamentoController::crear');
$routes->post('/añadirapartamento', 'AgregarApartamentoController::añadirApartamento');
$routes->get('/eliminarapartamento', 'AgregarApartamentoController::eliminarApartamento');
$routes->get('/modificarapartamento', 'AgregarApartamentoController::modificarApartamento');
$routes->post('/modificarapartamento', 'AgregarApartamentoController::modificarEditarapartamento');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
