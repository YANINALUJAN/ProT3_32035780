<?php

use CodeIgniter\Router\RouteCollection;
//RUTAS DE INDEX//
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acercade');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('cards', 'Home::cards');

// Rutas del Registro de Usuarios
$routes->get('/Registro', 'Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');

// Rutas del login
$routes->get('/Login', 'Login_controller');
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');
