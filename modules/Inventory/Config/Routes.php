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
$routes->group('medicines', ['namespace' => 'Modules\Inventory\Controllers'], function($routes)
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
$routes->group('supplies', ['namespace' => 'Modules\Inventory\Controllers'], function($routes)
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
$routes->group('supply-stocks', ['namespace' => 'Modules\Inventory\Controllers'], function($routes)
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
