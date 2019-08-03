<?php
global $router;
//include third party libraries and begin

//start api definitions
$router->get("/", function (){
   echo makeApi(true, array('status'=>true, 'msg'=>'my first api written with flatRoad'), 'successful');
});
