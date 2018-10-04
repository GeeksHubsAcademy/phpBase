<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 1/10/18
 * Time: 17:42
 */

namespace App\Core\Helpers;


class Connection
{
    public static function make($config){
        try{
            return new \PDO(
              $config['connection'].';dbname='.$config['name'],
              $config['userame'],
              $config['password'],
              $config['options']
            );
        }catch (\PDOException $e){
            die($e->getMessage());
        }
    }
}