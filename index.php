<?php
// Include necessary files
require_once 'config.php';
require_once 'router.php';
require_once 'controller.php';
require_once 'model.php';
require_once 'view.php';
require_once 'api_key.php';

// Create a new router instance
$router = new Router();

// Define routes
$router->add('/', 'HomeController@index');
$router->add('/about', 'AboutController@index');
$router->add('/contact', 'ContactController@index');

// Handle the request
$router->dispatch($_SERVER['REQUEST_URI']);
?>
