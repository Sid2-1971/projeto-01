<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

//  TODO Classe Home
class Home {
    
    public function index(ServerRequestInterface $request) 
    //public function index()
    {
        echo "Função home do Controlador Home <br>";
        //var_dump ($request);
        
    }
}