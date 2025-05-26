<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximu-scale=1.0, minimun-scale=1.0">
<title>Calculadora</title>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="../Css/resultado.css">  
<body>


			<div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>

     
<center>


<center>
<br>
<h1 class="animate__animated animate__bounce animate__repeat-3"><p style = "font-family:arial;"><p style="color:#EAECEE"> </h1>

		<div class="contenedor_tarjeta">

			
		 <figure>
		 	<h1>El costo total es de:</h1> 
		 		<div class="contenedor">
 <?php

	$precio1=46.800;
	$precio2=39.000;
	$precio3=31.200;
	$precio4=35.100;
	$precio5=97.500 ;
	$precio6=85.800;
	$precio7=70.200;
	$precio8=66.300;
	$precio9=27.300;
	$precio10=23.400;
	$precio11=19.500;
	$precio12=23.400;
	$precio13=46.800;


	$Protocolo1= $_POST['num1']* $precio1;
	$Protocolo2= $_POST['num2']* $precio2;
	$Protocolo3= $_POST['num3']* $precio3;
	$Protocolo4= $_POST['num4']* $precio4;
	$Protocolo5= $_POST['num5']* $precio5;
	$Protocolo6= $_POST['num6']* $precio6;
	$Protocolo7= $_POST['num7']* $precio7;
	$Protocolo8= $_POST['num8']* $precio8;
	$Protocolo9= $_POST['num9']* $precio9;
	$Protocolo10= $_POST['num10']* $precio10;
	$Protocolo11= $_POST['num11']* $precio11;
	$Protocolo12= $_POST['num12']* $precio12;
	$Protocolo13= $_POST['num13']* $precio13;


	$Totalprotocolos= $Protocolo1 + $Protocolo2 + $Protocolo3 + $Protocolo4 + $Protocolo5 +$Protocolo6 + $Protocolo7 + $Protocolo8 + $Protocolo9 + $Protocolo10 + $Protocolo11 + $Protocolo12 + $Protocolo13;
	echo "<font size='8'><h3>$".$Totalprotocolos."</h3></font>";


?>
</div>
 <br>


	</font>
</center></p>
<center>

	<br><br><br>
	<span class="clientes"><a href="../Modelo/Calculadora cientifica.html"><font size="6"color="#EEF0F0">Volver</span>
	</font>
</a>
</span>
</center>
</figure>
</p>
</html>






