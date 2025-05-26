<?php

$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];


 $conexion=mysqli_connect("localhost","root","","fontana");
 $consulta="SELECT * FROM login WHERE usuario='$usuario' and contraseña='$contraseña'";


 $ejecutar=mysqli_query($conexion,$consulta);

 $filas=mysqli_num_rows($ejecutar);

 if ($filas>0) {
 	header("location:../Vista/Menu.html");
 	
 } else{
 	header ("location:../Modelo/Login.html");
 }

mysqli_free_result($ejecutar);
msyqli_close($conexion);

?>