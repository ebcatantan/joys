<?php
$routes->group('patients', ['namespace' => 'Modules\PatientManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Patients::index');
    $routes->get('(:num)', 'Patients::index/$1');
    $routes->get('show/(:num)', 'Patients::show_patient/$1');
    $routes->get('own/(:num)', 'Patients::patient_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Patients::add_patient');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Patients::edit_patient/$1');
    $routes->delete('delete/(:num)', 'Patients::delete_patient/$1');
});

$routes->group('medical-history', ['namespace' => 'Modules\PatientManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Medicals::index');
    $routes->get('(:num)', 'Medicals::index/$1');
    $routes->get('show/(:num)', 'Medicals::show_medical/$1');
    $routes->get('own/(:num)', 'Medicals::medical_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Medicals::add_medical');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Medicals::edit_medical/$1');
    $routes->delete('delete/(:num)', 'Medicals::delete_medical/$1');
});
