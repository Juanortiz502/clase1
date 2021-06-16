<?php
require_once "./../vendor/autoload.php";

use Src\Request;
use Src\Run;


///Register env
$dontenv = Dotenv\Dotenv::createImmutable('../');
//load env
$dontenv->load();
//load
define('DB_HOSTNAME', $_ENV['DB_HOSTNAME']);
define('DB_DATABASE', $_ENV['DB_DATABASE']);
define('DB_USERNAME', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);


Run::Execute(new Request($_GET['url']));

