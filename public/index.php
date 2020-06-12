<?php
require_once( __DIR__ . '/../vendor/autoload.php');

use CoffeeCode\Router\Router;

$router = new Router(BASE_URL);


$router->namespace('App\Controllers');

$router->group(null);

$router->get("/",'Web:home');
$router->get("/{id}",'Web:home');

$router->group('ops');
$router->get("/{errcode}",function($data){
    echo "<h1>Erro {$data['errcode']}</h1>";
});


$router->dispatch();

if ($router->error()) {
    var_dump($router->error());
    $router->redirect("/ops/{$router->error()}");
}
