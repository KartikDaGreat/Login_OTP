<?php
namespace Login\Config;

// Create a new instance of our RouteCollection class.
$routes = \Config\Services::routes();
$routes->get('forgotpassword', 'Login\Controllers\Login::forgotpassword');
$routes->add('Login', 'Login\Controllers\Login::checklogin');
$routes->add('logout', 'Login\Controllers\Login::logout');
$routes->add('login', 'Login\Controllers\Login::index');
$routes->add('menu1', 'Login\Controllers\Login::menu1');
$routes->add('menu2', 'Login\Controllers\Login::menu2');
$routes->add('menu3', 'Login\Controllers\Login::menu3');
$routes->post('get_user', 'Login\Controllers\Login::get_user');
$routes->post('check_otp', 'Login\Controllers\Login::check_otp');
$routes->post('update_password', 'Login\Controllers\Login::update_password');
// $routes->post('user_insert', 'Login\Controllers\Login::user_insert');


// $routes->add('login', 'Users\Controllers\Users::login', ['filter' => 'noauth']);
// $routes->add('logout', 'Users\Controllers\Users::logout', ['filter' => 'auth']);
// $routes->add('register', 'Users\Controllers\Users::register', ['filter' => 'noauth']);
// $routes->add('profile', 'Users\Controllers\Users::profile', ['filter' => 'auth']);
