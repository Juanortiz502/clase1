<?php 
require_once 'Animal.php';

class Oveja extends Animal{

}
$oveja = new Oveja('Oveja Loca');
$oveja->comer();