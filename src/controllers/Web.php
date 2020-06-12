<?php

namespace App\Controllers;
use App\Models\Model;
use App\Views\Template;

/**
 * [Description Web]
 */
class Web {

   
    /**
     * @param mixed $data
     * 
     * @return [type]
     */
    public function home($data){
        //echo '<h1>' . get_class($this).':'.__FUNCTION__.'</h1></br>';
        $var = $data['id'];
        //echo $var;
        $model =  new Model();
        $retorno = $model->model($var);
        $view = new Template(); 
        $view->template($retorno);
    }   
}