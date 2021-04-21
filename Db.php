<?php
require_once('./Config.php');

class Db{
   //Atributos
   private $type = TYPE;
   private $host = DB_HOST;
   private $dbName = DB_DBNAME;
   private $user = DB_USER;
   private $password = DB_PASSWORD;
   private $dbh;
   
   public function __construct()
   {
       try {
           //Data Source Name
           $dsn = "$this->type:host=$this->host;dbname=$this->dbName";
           //DBH = Database Handle
           $this->dbh = new PDO($dsn,$this->user, $this->password,[
               PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
           ]);
       } catch (PDOException $e) {
           echo $e->getMessage();
       }
   }
   public function insertData($table, $data)
   {
       $fields = "";
       $valueFields = "";
       foreach($data[0] as $indexData => $valueData){
            $fields .= substr($indexData, 1, strlen($indexData)) . ',';
            $valueFields .= $indexData . ',';
       }
       $fields = substr($fields, 0, strlen($fields)-1);
       $valueFields = substr($valueFields, 0, strlen($valueFields)-1);
       
    $stmt = $this->dbh->prepare("INSERT INTO $table ($fields) VALUES($valueFields)");
        foreach($data as $d){
            if($stmt->execute($d)){
            //echo "Datos Guardados";
            }
        }
   }
   public function readData(){
       $stmt = $this->dbh->prepare("SELECT * FROM summary");
       $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $stmt->execute();
       while($summary = $stmt->fetch()){
           echo "Nombre: {$summary['name']} Apellido: {$summary['last_name']}<br>";
       }
       
   }
   public function readData2(){
    $stmt = $this->dbh->prepare("SELECT * FROM summary");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    while($summary = $stmt->fetch()){
        echo "Nombre: $summary->name Apellido: $summary->last_name<br>";
    }
    echo "Ejecutando la funcion readData2";
    
}
   public function __destruct()
   {
       $this->dbh = null;
   }
   
}

//Prueba
$d = new Db();
$d->readData2();
