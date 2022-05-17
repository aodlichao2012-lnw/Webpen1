<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/','Home::index');

$routes->get('/', 'Pages::view/home');

//Register
$routes->get('Register', 'Register::index');
$routes->post('Signup', 'Register::save');

//Login
$routes->get('Login', 'Login::index');
$routes->post('Signin', 'Login::auth');
$routes->get('logout', 'Login::logout');

$routes->get('index', 'Index::index', ['filter' => 'auth']);

//CRUD Product
$routes->get('Product', 'Product::index', ['filter' => 'auth']);
$routes->get('ProductInsert', 'Product::create', ['filter' => 'auth']);
$routes->post('insert', 'Product::insert', ['filter' => 'auth']);
$routes->get('ProductUpdate/(:num)', 'Product::getIDupdate/$1', ['filter' => 'auth']);
$routes->post('update', 'Product::update', ['filter' => 'auth']);
$routes->get('delete/(:num)', 'Product::delete/$1', ['filter' => 'auth']);

//CRUD News
$routes->get('Newnews', 'Newnews::index', ['filter' => 'auth']);
$routes->get('NewnewsInsert', 'Newnews::create', ['filter' => 'auth']);
$routes->post('Newsinsert', 'Newnews::insert', ['filter' => 'auth']);
$routes->get('NewnewsUpdate/(:num)', 'Newnews::getNewsUpdate/$1', ['filter' => 'auth']);
$routes->post('Newsupdate', 'Newnews::update', ['filter' => 'auth']);
$routes->get('Newnewsdelete/(:num)', 'Newnews::delete/$1', ['filter' => 'auth']);

//support 
$routes->get('Supports', 'Support::index', ['filter' => 'auth']);
//$routes->post('problem', 'Pages::insert_problem');
$routes->post('problem', 'Document::index');
$routes->get('update_problem/(:num)', 'Support::getIDupdate/$1', ['filter' => 'auth']);
$routes->post('problem_update', 'Support::update', ['filter' => 'auth']);
$routes->get('delete_problem/(:num)', 'Support::delete/$1', ['filter' => 'auth']);

//Appply
$routes->get('apply/(:num)', 'apply::view_apply/$1');
$routes->post('add_apply', 'apply::insert');
$routes->get('Apply', 'apply::admin_view', ['filter' => 'auth']);
$routes->get('delete_apply/(:num)', 'apply::delete/$1', ['filter' => 'auth']);
$routes->get('job', 'apply::admin_viewjob', ['filter' => 'auth']);
$routes->get('edit_job/(:num)', 'apply::getJobupdate/$1', ['filter' => 'auth']);
$routes->post('update_job', 'apply::update', ['filter' => 'auth']);
$routes->get('add_job', 'apply::create', ['filter' => 'auth']);
$routes->post('Jobinsert', 'apply::insertJob', ['filter' => 'auth']);
$routes->get('detail_apply/(:num)', 'apply::detail/$1');

//Warranty
$routes->get('once', 'Warranty::once');
$routes->get('yearly', 'Warranty::yearly');
$routes->get('warran', 'Warranty::warran');
$routes->get('out_warran', 'Warranty::out_warran');

//order
$routes->get('Order', 'Order::index', ['filter' => 'auth']);
$routes->get('order_delete/(:num)', 'Order::delete/$1', ['filter' => 'auth']);
$routes->get('detail_order/(:num)', 'Order::detail/$1');
$routes->post('add_order', 'Order::insert');
$routes->get('buy/(:num)', 'Order::buy/$1');

//Video
$routes->get('Video', 'video::admin_view', ['filter' => 'auth']);
$routes->get('VideoCreate', 'video::create', ['filter' => 'auth']);
$routes->post('VideoInsert', 'video::insert', ['filter' => 'auth']);
$routes->get('video_delete/(:num)', 'video::delete/$1', ['filter' => 'auth']);
$routes->get('edite_video/(:num)', 'video::getVideoupdate/$1', ['filter' => 'auth']);
$routes->post('update_video', 'video::update', ['filter' => 'auth']);


//End
$routes->post('sendmail', 'Pages::send_mail');
$routes->get('p_detail/(:num)', 'Pages::detail/$1');
$routes->get('n_detail/(:num)', 'Pages::n_detail/$1');
$routes->get('(:any)', 'Pages::view/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
