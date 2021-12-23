<?php
try{

    //Credenciales para la conexion a phpmyadmin
    $host = "mysql.face.ubiobio.cl";
    $dbname= "5soft2021";
    $username= "g5soft";
    $password = "g5isw2021";
 
    $conn = new mysqli($host,$username,$password,$dbname);

}catch(Exception $e){
    echo "Error: ".$e->getMessage();
}
?>