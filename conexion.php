<?php 
$server="localhost";
$user="root"; 
$password="";
$db="registro";

$conexion= new mysqli($server,$user,$password,$db);

if ($conexion->connect-$error_reporting){

    die("conexion fallida". $conexion->connect-$error_reporting);


} else {
    echo "conectado";

}

?>