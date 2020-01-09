<?php
$routes->group('medicine-stocks', ['namespace' => 'Modules\Inventory\Controllers'], function($routes)
{
    $routes->get('/', 'Medicine_Stocks::index');
    $routes->match(['get', 'post'], 'add', 'Medicine_Stocks::add_medicine_stocks');
    $routes->get('(:num)', 'Medicine_Stocks::index/$1');
    $routes->get('show/(:num)', 'Medicine_Stocks::show_medicine_stocks/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Medicine_Stocks::edit_medicine_stocks/$1');
    $routes->delete('delete/(:num)', 'Medicine_Stocks::delete_medicine_stocks/$1');
});
