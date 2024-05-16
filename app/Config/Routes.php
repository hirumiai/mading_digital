<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// frontend : index 
$routes->get('/', 'HomeController::index');

// login routes 
$routes->get('login', 'AuthController::index');

// login routes process validation
$routes->post('login/process', 'AuthController::loginProcess');

// backend :  dashboard 
$routes->get('/dashboard', 'DashboardController::index');

// backend : list video 
$routes->get('/list_video', 'VideoController::index');

// backend : upload video
$routes->get('/unggah_video', 'UnggahVideoController::index');
$routes->post('unggah_video/process', 'UnggahVideoController::actionUnggahVideo');

// backend : update video 
$routes->get('update_video/(:any)', 'UpdateVideoController::index/$1');
$routes->put('update_video/process', 'UpdateVideoController::actionUpdateVideo');

// backend : delete video
$routes->delete('delete/video/process/(:any)', 'VideoController::actionDelete/$1');

// backend : list agenda
$routes->get('/list_agenda', 'AgendaController::index');

// backend : unggah angenda
$routes->get('/unggah_angenda', 'UngggahAgendaController::index');





// backend : logout 
$routes->get('/logout', 'AuthController::logout');


// backend : get All video 
$routes->get('videos/get', 'HomeController::getVideo');
