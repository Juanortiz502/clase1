<?php

namespace Src;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;




class Model{
    public function __construct(){
        $con = [
            'driver' => 'mysql',
            'host'  => DB_HOSTNAME,
            'port' => '3306',
            'database'  => DB_DATABASE ,
            'username' => DB_USERNAME,
            'password' => DB_PASSWORD,
            'charset' => 'utf8mb4',
            'collaction' => 'utf8mb4_spanish2_ci',
            'prefix' => ''
        ];
        $this->boot($con);
    }
    public function boot($con){
        $capsule = new Capsule;
        $capsule->addConnection($con);
        $capsule->bootEloquent();
    }
}