<?php
//declare(strict_types=1);

require_once( __DIR__ . '/../vendor/autoload.php');
use App\Controllers;
use Psr\Http\Message\ServerRequestInterface;



$router = new League\Route\Router;

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

//var_dump($request);

function teste()
    {
        echo "Teste-Function";
        return;
    }

function envio()
    {
        return (new App\Controllers\Home())->index();
    }
//$router->get('/',envio());
$router->get('/index/{id}',(new App\Controllers\Home())->index($request));
//$router->map('GET', '/', [App\Controller\Home::class, 'index']);
//$router->map('GET','/',envio());
    

//teste();
