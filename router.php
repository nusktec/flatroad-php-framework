<?php
global $router;
//start clean definitions
//define home page
$router->get('/{34}', function ($id){
    require(renderView('landing/login'));
});
