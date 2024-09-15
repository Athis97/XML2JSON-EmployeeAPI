<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('employee/register', 'EmployeeController::register');
$routes->post('employee/save', 'EmployeeController::save');
$routes->get('employee/success', 'EmployeeController::success');
$routes->get('veh-avail/show', 'VehAvailController::showData');
$routes->get('veh-avail/upload', 'VehAvailController::uploadXmlForm');
$routes->post('veh-avail/import', 'VehAvailController::importXml');

// APIs
$routes->get('api/employee', 'ApiController::getEmployee');