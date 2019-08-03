<html lang="en" ch>
<?php
//import routing engines
require __DIR__ . '/vendor/autoload.php';

// Require composer autoloader
use Bramus\Router\Router;

// Create Router instance
$router = new Router();

// Define routes
// ....
//defining errors
$router->set404(function (){
   echo "Error has occur !";
});

//include major routes
require ('router.php');

// Run it!
$router->run();

//render functions
function renderView($viewName){
    return (__DIR__.'/views/'.$viewName.'.php');
}
?>
</html>
