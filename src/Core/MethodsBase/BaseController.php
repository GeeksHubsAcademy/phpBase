<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 4/10/18
 * Time: 17:29
 */

namespace App\Core\MethodsBase;



abstract class BaseController
{
    abstract public function getView();

    protected function returnView($page)
    {
        $host= $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF'],'/\\'));
        header("Location: http://$host$uri/$page");
    }
}