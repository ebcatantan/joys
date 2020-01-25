<?php
$routes->group('dentists', ['namespace' => 'Modules\ClinicSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Dentists::index');
    $routes->get('(:num)', 'Dentists::index/$1');
    $routes->get('show/(:num)', 'Dentists::show_dentist/$1');
    $routes->get('own/(:num)', 'Dentists::user_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Dentists::add_dentist');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Dentists::edit_dentist/$1');
    $routes->delete('delete/(:num)', 'Dentists::delete_dentist/$1');
});

$routes->group('diseases', ['namespace' => 'Modules\ClinicSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Diseases::index');
    $routes->match(['get', 'post'], 'add', 'Diseases::add_disease');
    $routes->get('(:num)', 'Diseases::index/$1');
    $routes->get('show/(:num)', 'Diseases::show_disease/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Diseases::edit_disease/$1');
    $routes->delete('delete/(:num)', 'Diseases::delete_disease/$1');
});

$routes->group('dental-procedures', ['namespace' => 'Modules\ClinicSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Procedures::index');
    $routes->match(['get', 'post'], 'add', 'Procedures::add_procedure');
    $routes->get('(:num)', 'Procedures::index/$1');
    $routes->get('show/(:num)', 'Procedures::show_procedure/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Procedures::edit_procedure/$1');
    $routes->delete('delete/(:num)', 'Procedures::delete_procedure/$1');
});

$routes->group('dental-conditions', ['namespace' => 'Modules\ClinicSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Dental_conditions::index');
    $routes->match(['get', 'post'], 'add', 'Dental_conditions::add_dental_condition');
    $routes->get('(:num)', 'Dental_conditions::index/$1');
    $routes->get('show/(:num)', 'Dental_conditions::show_dental_condition/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Dental_conditions::edit_dental_condition/$1');
    $routes->delete('delete/(:num)', 'Dental_conditions::delete_dental_condition/$1');
});

$routes->group('medicine-allergies', ['namespace' => 'Modules\ClinicSettings\Controllers'], function($routes)
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
