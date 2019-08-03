<?php
error_reporting(0);
header('Content-Type: application/json');
//import routing engines
require '../vendor/autoload.php';

// Require composer autoloader
use Bramus\Router\Router;

// Create Router instance
$router = new Router();

// Define routes
// ....
//defining errors
$router->set404(function () {
    echo makeApi(false, [], 'Route not defined');
});

//require main api route
require ('router.php');

// Run it!
$router->run();

//render functions
function makeApi($status, $data = [], $msg = null)
{
    return json_encode(array('status' => $status, 'data' => $data, 'msg' => $msg));
}
