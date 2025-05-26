<?php 
$conexion=mysqli_connect("localhost","root","","fontana");

	$usuario=$_POST["usuario"];
	$contraseña=$_POST["contraseña"];

	$insertar="INSERT INTO login (usuario,contraseña)VALUES('$usuario','$contraseña')";
	$ejecutar=mysqli_query($conexion,$insertar);

	header("Location:../Modelo/login.html");	
?>