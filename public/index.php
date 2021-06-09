<?php
require_once "./../vendor/autoload.php";

use Src\Request;
use Src\Run;

Run::Execute(new Request($_GET['url']));

