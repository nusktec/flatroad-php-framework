<?php
global $router;
//start clean definitions

//define home page - login
$router->get('/', function (){
    require(renderView('login'));
});
//make a middleware
$router->get('/dashboard', function (){
    require(renderView('dashboard'));
});
