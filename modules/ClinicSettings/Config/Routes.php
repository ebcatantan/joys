<?php

$routes->group('diseases', ['namespace' => 'Modules\ClinicSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Diseases::index');
    $routes->match(['get', 'post'], 'add', 'Diseases::add_disease');
    $routes->get('(:num)', 'Diseases::index/$1');
    $routes->get('show/(:num)', 'Diseases::show_disease/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Diseases::edit_disease/$1');
    $routes->delete('delete/(:num)', 'Diseases::delete_disease/$1');
});
