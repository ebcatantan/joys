<?php
$routes->group('dental-conditions', ['namespace' => 'Modules\Dental_conditionManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Dental_conditions::index');
    $routes->match(['get', 'post'], 'add', 'Dental_conditions::add_dental_condition');
    $routes->get('(:num)', 'Dental_conditions::index/$1');
    $routes->get('show/(:num)', 'Dental_conditions::show_dental_condition/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Dental_conditions::edit_dental_condition/$1');
    $routes->delete('delete/(:num)', 'Dental_conditions::delete_dental_condition/$1');
});
