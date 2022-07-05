<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Direccion=$_POST['Direccion'];
$Cargo=$_POST['Cargo'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Disponibilidad=$_POST['Disponibilidad'];

$sql="INSERT INTO trabajador(Nombre,Apellido,Direccion,Cargo,Telefono,Correo,Disponibilidad) 
values ('$Nombre','$Apellido','$Direccion','$Cargo','$Telefono','$Correo','$Disponibilidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}


?>