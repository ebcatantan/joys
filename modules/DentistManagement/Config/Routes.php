<?php
$routes->group('dentists', ['namespace' => 'Modules\DentistManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Dentists::index');
    $routes->get('(:num)', 'Dentists::index/$1');
    //$routes->get('show/(:num)', 'Dentists::show_dentist/$1');
    $routes->get('own/(:num)', 'Dentists::user_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Dentists::add_dentist');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Dentists::edit_dentist/$1');
    $routes->delete('delete/(:num)', 'Dentists::delete_dentist/$1');
});
