<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 1/10/18
 * Time: 17:37
 */

namespace App\Core\Config;


class configDB
{
    public static function getConfig(){
        return [
            'database' =>[
                'name'=>'blog',
                'username'=>'root',
                'password'=>'44865710',
                'connection'=>'mysql:host=127.0.0.1',
                'options'=>[
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            ]
        ];
    }
}