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
/*Salón Altavista= 1,200,000;
Salón Monteverde= 2,000,000;
Centro Social El Bosque= 3,500,000;
Salón de Eventos Villa Toscana = 1,800,000;
Casa La Fontana= 2,200,000;
Salón Campestre Bella Luna = 4,800,000;
Salón La Estancia= 2,600,000;
Jardines del Nogal= 1,500,000;
Casa del Río Eventos = 1,700,000;
Salón Altos del Parque = 3,200,000;
Eventos Quinta Real = 4,000,000;
Salón Reflejos del Lago = 3,000,000;
Salón Los Pinos= 1,600,000;
Espacio Ámbar = 2,000,000;
Salón Jardines de Cedro = 2,500,000;*/

	$precio1=1,200,000;
	$precio2=2,000,000;
	$precio3=3,500,000;
	$precio4=1,800,000;
	$precio5=2,200,000;
	$precio6=4,800,000;
	$precio7=2,600,000;
	$precio8=1,500,000;
	$precio9=1,700,000;
	$precio10=3,200,000;
	$precio11=4,000,000;
	$precio12=3,000,000;
	$precio13=1,600,000;
	$precio14=2,000,000;
	$precio15=2,500,000;

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
	$Protocolo11= $_POST['num11']* $precio12;
	$Protocolo11= $_POST['num11']* $precio13;
	$Protocolo11= $_POST['num11']* $precio14;
	$Protocolo11= $_POST['num11']* $precio15;

	$Totalprotocolos= $Protocolo1 + $Protocolo2 + $Protocolo3 + $Protocolo4 + $Protocolo5 +$Protocolo6 + $Protocolo7 + $Protocolo8 + $Protocolo9 + $Protocolo10 + $Protocolo11;
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






