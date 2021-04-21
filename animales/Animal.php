<?php

class Animal{
    //Atributos -> Los estados de la clase
    protected string $nombre;
    protected int $edad;
    protected float $peso;
    protected string $alimentos;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function dormir()
    {
        echo 'Estoy Durmiendo y Soy ' . $this->nombre  . '<br>';
    }
    public function comer()
    {
        echo 'Estoy Comiendo y Soy ' . $this->nombre  . '<br>';
    }
    public function escribir()
    {
        echo 'Estoy Escribiendo' . '<br>';
    }
}