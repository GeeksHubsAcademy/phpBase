<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 4/10/18
 * Time: 17:17
 */

namespace App\Core;

use App\Controllers\IndexController;

class BootStrap
{
    static function init(){
        //Inicio de Sesion.
        session_start();
        $indexController = new IndexController();
        $indexController->getView();


    }

}