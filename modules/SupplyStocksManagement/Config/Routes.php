<?php
$routes->group('supply-stocks', ['namespace' => 'Modules\SupplyStocksManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Stocks::index');
    $routes->get('(:num)', 'Stocks::index/$1');
    $routes->get('show/(:num)', 'Stocks::show_supply_stocks/$1');
    $routes->get('own/(:num)', 'Stocks::stocks_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Stocks::add_supply_stocks');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Stocks::edit_supply_stocks/$1');
    $routes->delete('delete/(:num)', 'Stocks::delete_supply_stocks/$1');
});
