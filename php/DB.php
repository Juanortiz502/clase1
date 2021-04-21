<?php

class DB{
    private string $host;
    private string $dbUser;
    private string $dbPassword;
    private string $dbName;
    private string $dbPort;
    private $mysql;

    public function __construct($host = '127.0.0.1', $dbUser = 'root', $dbPassword = 'wramirez', $dbName = 'cv', $dbPort = '3307')
    {
        $this->$host = $host;
        $this->$dbUser = $dbUser;
        $this->$dbPassword= $dbPassword;
        $this->$dbName = $dbName;
        $this->$dbPort = $dbPort;
        
        $this->mysql = new mysqli($this->$host, $this->$dbUser, $this->$dbPassword, $this->$dbName, $this->$dbPort);
        if($this->mysql->connect_error){
            echo "Error de Conexion" . $this->mysql->connect_errorno;
        }
    }
    public function insertar($strInsert){
        $this->mysql->query($strInsert);
    }
    public function insertarResumen($name, $last_name, $age, $ide, $lang){
        $strInsert = "INSERT INTO summary (name, last_name, age, ide, lan) VALUES('$name', '$last_name', '$age', '$ide', '$lang')";
        $this->mysql->query($strInsert);
    }
    
}