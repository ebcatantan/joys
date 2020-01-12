<?php
$routes->group('payments', ['namespace' => 'Modules\Reports\Controllers'], function($routes)
{
    $routes->get('/', 'Payments::index');
    $routes->get('(:num)', 'Payments::index/$1');
    $routes->get('show/(:num)', 'Payments::show_payment/$1');
    $routes->get('own/(:num)', 'Payments::user_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Payments::add_payment');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Payments::edit_payment/$1');
    $routes->delete('delete/(:num)', 'Payments::delete_payment/$1');
});
