<?php
$routes->group('medicines', ['namespace' => 'Modules\MedicineManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Medicines::index');
    $routes->get('(:num)', 'Medicines::index/$1');
    $routes->get('show/(:num)', 'Medicines::show_medicine/$1');
    $routes->get('own/(:num)', 'Users::user_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Medicines::add_medicine');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Medicines::edit_medicine/$1');
    $routes->delete('delete/(:num)', 'Medicines::delete_medicine/$1');
});
