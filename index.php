<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 1/10/18
 * Time: 17:04
 */

require "vendor/autoload.php";

use App\Core\Config\configDB;
use App\Core\Helpers\Connection;

$config = configDB::getConfig();
Connection::make($config['database']);