<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('patient', new Route(constant('URL_SUBFOLDER') . '/patient/{id}', array('controller' => 'PatientController', 'method'=>'showAction'), array('id' => '[0-9]+')));