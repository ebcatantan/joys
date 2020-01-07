<?php
$routes->group('medicine-allergies', ['namespace' => 'Modules\MedicineAllergiesManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Allergies::index');
    $routes->get('(:num)', 'Allergies::index/$1');
    $routes->get('show/(:num)', 'Allergies::show_medicine_allergies/$1');
    $routes->get('own/(:num)', 'Allergies::medicine_allergies_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Allergies::add_medicine_allergies');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Allergies::edit_medicine_allergies/$1');
    $routes->delete('delete/(:num)', 'Allergies::delete_medicine_allergies/$1');
});
