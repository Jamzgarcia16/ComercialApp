<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$db = new subase();	# Creamos el objeto $db: instancia de la clase subase

//variables entrada
$n1 = 0;
$n2 = 0;
$suma = 0;
$divicion = 0;
$residuo = "";

//print_r($_POST);
if(isset($_POST["btnCalcular"])){
		//Entrada

		$n1 = $_POST["txtn1"];
		$n2 = $_POST["txtn2"];
		$suma = $n1 + $n2;
		$divicion = $n1 / $n2;
		$residuo = $n1 % $n2;
	}

$p1->assign("txtn1",$suma[0]);
$p1->assign("txtn2",$suma[1]);
$p1->assign("suma",$suma);
$p1->assign("divicion",$divicion);
$p1->assign("residuo",$residuo);


//con este codigo analizamos una variable
echo "\resultDivicion==$residuo; tipo : " . gettype ($residuo) . "<br />\n";


// valor de iva y precio de venta mas iva 
$valorVenta = 0.0;
$iva = 0.0;
$precioVenta = 0.0;

if(isset($_POST["btnVentas"])){
		//Entrada

		$valorVenta = $_POST["valorVenta"];
		//process

		$iva = $valorVenta * 0.19;
		$precioVenta = $valorVenta + $iva;
	}
$p1->assign("valorVenta",$valorVenta);
$p1->assign("iva",$iva);
$p1->assign("precioVenta",$precioVenta);

// numero inverso
(int)$numero = 0;
(int)$ni = 0;
(int)$r = 0;
(int)$tmp = 0;

if(isset($_POST["btnInverso"])){
		//Entrada

		$numero = $_POST["numero"];
		//process
		$tmp = $numero;
		$r = $numero % 10;
		$numero = (int)$numero / 10;
		$ni = $r * 10;
		
		$r = $numero % 10;
		$numero = (int)$numero / 10;
		$ni = ($ni + $r) * 10;

		$r = $numero % 10;
		$numero = (int)($numero / 10);
		$ni = ($ni + $r) * 10;

		$r = $numero % 10;
		$numero = (int)($numero / 10);
		$ni = ($ni + $r) * 10;

		$ni = $ni + $numero;
		$numero = $tmp;
		
	}
$p1->assign("numero",$numero);
$p1->assign("inverso",$ni);


// Prestamos
(float)$capital = 0.0;
(float)$tasaInteres= 0.0;
(int)$tiempo = 0;
(float)$interes = 0.0;
(float)$monto = 0.0;

if(isset($_POST["btnPresatamo"])){
		//Entrada

		$capital = $_POST["capital"];
		$tasaInteres = $_POST["tasaInteres"];
		$tiempo = $_POST["tiempo"];
		//process
		
		$monto = pow((1 + $tasaInteres / 100), $tiempo) * $capital;
		$interes = $monto - $capital;
		
		$arrDataPrestamo = array(
		'capital' => $capital,
		'tasaInteres' => $tasaInteres,
		'tiempo' => $tiempo,
		'monto' => $monto,
		'interes' => $interes
		);
		json_encode($arrDataPrestamo); 
		print_r($arrDataPrestamo);
	}
$p1->assign("capital",$capital);
$p1->assign("tasaInteres",$tasaInteres);
$p1->assign("tiempo",$tiempo);
$p1->assign("interes",$interes);
$p1->assign("monto",$monto);





?>