<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE usuarios SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>