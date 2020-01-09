<?php 
$routes->group('supplies', ['namespace' => 'Modules\SuppliesManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Supplies::index');
    $routes->get('(:num)', 'Supplies::index/$1');
    $routes->get('show/(:num)', 'Supplies::show_supplies/$1');
    $routes->get('own/(:num)', 'Supplies::supplies_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Supplies::add_supplies');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Supplies::edit_supplies/$1');
    $routes->delete('delete/(:num)', 'Supplies::delete_supplies/$1');
});
    