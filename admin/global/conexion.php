<?php
include "config.php";
try{
    
    $db=new PDO("mysql:host=$dbhost;dbname=$dbbase",$dbuser,$dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
   
    if($db) {
        
    }else{
        echo "fallo de conexion ala base de dato";
    }
  
}catch(PDOexeption $e){
    die("error de conectar ala base de dato" . $e->getMessage());
}