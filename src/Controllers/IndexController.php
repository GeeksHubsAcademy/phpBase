<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 4/10/18
 * Time: 17:27
 */

namespace App\Controllers;

use App\Core\MethodsBase\BaseController;
use App\Core\Helpers\View;

class IndexController extends BaseController
{

    public function getView()
    {
        View::renderTemplate('index.view.html');
    }
}