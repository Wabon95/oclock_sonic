<?php
// Controllers
require_once __DIR__.'/../app/controllers/CoreController.php';
require_once __DIR__.'/../app/controllers/MainController.php';
// Utils
require_once __DIR__.'/../app/utils/Database.php';
// Models
require_once __DIR__.'/../app/models/CoreModel.php';
require_once __DIR__.'/../app/models/CharacterModel.php';
// Library
require_once __DIR__ . '/../vendor/autoload.php';

// Initialisation d'Altorouter
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

// Définition des routes
$router->map( 'GET', '/', [
    'controller' => 'MainController',
    'method' => 'home'
], 'home' );

$router->map( 'GET', '/homev2/', [
    'controller' => 'MainController',
    'method' => 'home_v2'
], 'home_v2' );

$router->map( 'GET', '/creators/', [
    'controller' => 'MainController',
    'method' => 'creators'
], 'creators' );

// Appel du controller correspondant
$match = $router->match();
if($match === false) {
    header('HTTP/1.0 404 Not Found');
    echo '404';
}
else {
    $routeInfos = $match['target'];
    $params = $match['params'];

    $controllerName = $routeInfos['controller'];
    $methodName = $routeInfos['method'];

    $controller = new $controllerName();
    $controller->$methodName($params);
}