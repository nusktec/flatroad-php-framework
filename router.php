<?php
global $router;
//start clean definitions

//define home page - login
$router->get('/', function () {
    require(renderView('login'));
});
//make a middleware anf general login
$router->before('GET|POST','/su/.*', function () {
    if(true){
        require(renderView('login'));
    }
    exit();
});

//to admin dashboard
$router->get('/su/', function () {
    header('Location: /dashboard');
});

//to admin dashboard
$router->get('/su/dashboard', function () {
    require(renderView('dashboard'));
});

//test url
$router->get("/test", function () {

});
