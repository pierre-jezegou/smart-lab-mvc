<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('patient', new Route(constant('URL_SUBFOLDER') . '/patient/{id}', array('controller' => 'PatientController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('alert', new Route(constant('URL_SUBFOLDER') . '/alert/{id}', array('controller' => 'AlertController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('alerts', new Route(constant('URL_SUBFOLDER') . '/alerts', array('controller' => 'AlertsController', 'method'=>'indexAction'), array()));
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'LoginController', 'method'=>'indexAction'), array()));
$routes->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'RegisterController', 'method'=>'indexAction'), array()));
$routes->add('patients', new Route(constant('URL_SUBFOLDER') . '/patients', array('controller' => 'PatientsController', 'method'=>'indexAction'), array()));
$routes->add('monitoring', new Route(constant('URL_SUBFOLDER') . '/monitoring', array('controller' => 'MonitoringController', 'method'=>'indexAction'), array()));
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));