<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// frontend : index 
$routes->get('/', 'HomeController::index');



// backend :  dashboard 
$routes->get('/dashboard', 'DashboardController::index');

// backend : list video 
$routes->get('/list_video', 'VideoController::index');

// backend : upload video
$routes->get('/unggah_video', 'UnggahVideoController::index');


// backend : list agenda
$routes->get('/list_agenda', 'AgendaController::index');

// backend : unggah angenda
$routes->get('/unggah_angenda', 'UngggahAgendaController::index');



// backend : logout 
$routes->get('/logout', 'AuthController::index');
