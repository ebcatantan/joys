<?php
$routes->group('consultation-schedules', ['namespace' => 'Modules\ConsultationSchedules\Controllers'], function($routes)
{
    $routes->get('/', 'Schedules::index');
    $routes->get('(:num)', 'Schedules::index/$1');
    $routes->get('show/(:num)', 'Schedules::show_consultation_schedules/$1');
    $routes->get('own/(:num)', 'Schedules::consultation_schedules_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Schedules::add_consultation_schedules');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Schedules::edit_consultation_schedules/$1');
    $routes->delete('delete/(:num)', 'Schedules::delete_consultation_schedules/$1');
});
