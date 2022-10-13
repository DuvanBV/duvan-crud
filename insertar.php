<?php
include("conexion.php");
$con=conectar();


$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO usuarios VALUES(NULL,'$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>