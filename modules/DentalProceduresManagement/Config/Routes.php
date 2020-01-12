<?php
$routes->group('dental-procedures', ['namespace' => 'Modules\DentalProceduresManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Procedures::index');
    $routes->match(['get', 'post'], 'add', 'Procedures::add_procedure');
    $routes->get('(:num)', 'Procedures::index/$1');
    $routes->get('show/(:num)', 'Procedures::show_procedure/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Procedures::edit_procedure/$1');
    $routes->delete('delete/(:num)', 'Procedures::delete_procedure/$1');
});
