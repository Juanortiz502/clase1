<?php
require_once 'Animal.php';
class Perro extends Animal{

}
$perro = new Perro('Perro Lucas');
$perro->comer();