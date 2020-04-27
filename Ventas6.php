<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$db = new subase();	# Creamos el objeto $db: instancia de la clase subase


//variables entrada
$n1 = 0;
$n2 = 0;
$s = 0;

//print_r($_POST);
if(isset($_POST["btnCalcular"])){
		//Entrada

		$n1 = $_POST["txtn1"];
		$n2 = $_POST["txtn2"];
		$s = $n1 + $n2;
	}

$p1->assign("txtn1",$s[0]);
$p1->assign("txtn2",$s[1]);
$p1->assign("suma",$s);


?>