<?php
global $router;
//include third party libraries and begin
require __DIR__ . '/Engine.php';

//start api definitions

use ApiEngine\Engine;

$router->get("/", function () {
    echo makeApi(true, array('status' => true, 'msg' => 'my first api written with flatRoad'), 'successful');
});
//middleware
$router->before('GET|POST', '/auth/.*', function () {
    $data = (array)getAxios();
    if ($data['ssk'] != SSK) {
        echo makeApi(false, [], 'You have not authenticate this request with our server, please contact the developer dev@rscbyte.com');
        exit();
    }
});

//authentication
$router->mount('/auth', function () use ($router) {
    //index api
    $router->all('/', function () {
        echo makeApi(false, [], 'Not a valid auth route');
    });
    //logout
    $router->all('/logout/', function () {
        $data = (array)getAxios();
        echo Engine::Logout($data['token']);
    });
    //login begins
    $router->all('/login/', function () {
        $data = (array)getAxios();
        echo Engine::Login($data);
    });
});
