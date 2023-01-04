<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
//Pages pharmacien
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('patient', new Route(constant('URL_SUBFOLDER') . '/patient/{id}', array('controller' => 'PatientController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('alert', new Route(constant('URL_SUBFOLDER') . '/alert/{id}', array('controller' => 'AlertController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('alerts', new Route(constant('URL_SUBFOLDER') . '/alerts', array('controller' => 'AlertsController', 'method'=>'indexAction'), array()));
$routes->add('patients', new Route(constant('URL_SUBFOLDER') . '/patients', array('controller' => 'PatientsController', 'method'=>'indexAction'), array()));

$routes->add('precription', new Route(constant('URL_SUBFOLDER') . '/prescription/{id}', array('controller' => 'PrescriptionController', 'method'=>'indexAction'), array()));
$routes->add('edit_prescription', new Route(constant('URL_SUBFOLDER') . '/prescriptions/{id}/edit', array('controller' => 'EditPrescriptionController', 'method'=>'indexAction'), array()));


//Pages administrateur & utilitaire
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'LoginController', 'method'=>'indexAction'), array()));
$routes->add('reset_password', new Route(constant('URL_SUBFOLDER') . '/reset_password', array('controller' => 'ResetpasswordController', 'method'=>'indexAction'), array()));
$routes->add('reset_password_done', new Route(constant('URL_SUBFOLDER') . '/reset_password/done', array('controller' => 'ResetpasswordController', 'method'=>'password_reset'), array()));
$routes->add('logincheck', new Route(constant('URL_SUBFOLDER') . '/logincheck', array('controller' => 'LoginController', 'method'=>'logincheck'), array()));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'LoginController', 'method'=>'deconnect'), array()));
$routes->add('register', new Route(constant('URL_SUBFOLDER') . '/admin/register', array('controller' => 'RegisterController', 'method'=>'indexAction'), array()));
$routes->add('new_account', new Route(constant('URL_SUBFOLDER') . '/admin/register/new_account', array('controller' => 'RegisterController', 'method'=>'new_account'), array()));
$routes->add('monitoring', new Route(constant('URL_SUBFOLDER') . '/monitoring', array('controller' => 'MonitoringController', 'method'=>'indexAction'), array()));

$routes->add('admin', new Route(constant('URL_SUBFOLDER') . '/admin', array('controller' => 'AdminController', 'method'=>'indexAction'), array()));