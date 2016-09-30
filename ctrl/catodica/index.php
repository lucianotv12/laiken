<?php

include_once '../../funciones.php';

if(!isset($_GET["accion"]))$accion= "magnesio";
else $accion = $_GET["accion"];


switch ($accion) {
	case 'magnesio':
		$subcategoria= 1;
		include ('../../view/catodica/catodica_header.php');
		include("../../view/catodica/subcategorias.php");
		include ('../../view/catodica/catodica_footer.php');

		break;
	case 'zinc':
		$subcategoria= 2;
		include ('../../view/catodica/catodica_header.php');
		include("../../view/catodica/subcategorias.php");
		include ('../../view/catodica/catodica_footer.php');

		break;	
	case 'aluminio':
		$subcategoria= 3;
		include ('../../view/catodica/catodica_header.php');
		include("../../view/catodica/subcategorias.php");
		include ('../../view/catodica/catodica_footer.php');

		break;			
	case 'producto':
		$subcategoria= 3;
		$idProducto= $_GET["id"];
		include ('../../view/catodica/catodica_header.php');
		include("../../view/catodica/catodica_producto.php");
		include ('../../view/catodica/catodica_footer.php');

		break;					
	default:
		# code...
		break;
}


?>

