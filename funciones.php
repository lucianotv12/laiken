<?php
define('ROOT','localhost');
define('DATABASE','laiken');
define('USER','root');
define('PASS','');
define('CTRL','http://localhost/laiken/ctrl/');
define('VIEW','http://localhost/laiken/view/');
define('CSS','http://localhost/laiken/css/');
define('IMAGES','http://localhost/laiken/images/');



/*function conectar_bd()
	{
		try{
			$conn = new PDO("mysql:host=".ROOT.";dbname=".DATABASE, USER, PASS);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		
		}catch(PDOException $e){
			echo "ERROR: " . $e->getMessage();
		}
	}*/


/*----------------------------------------------------------------------------*/
/* funcion que hace una inclusion automatica de las clases
/*----------------------------------------------------------------------------*/
function __autoload($class_name)
	{
	$bajadas = "";
	while (!is_dir($bajadas."models"))
		{
		$bajadas .= "../";
		}

		require_once($bajadas."models/".strtolower($class_name).".class.php");
	}


function validar_permanencia ($_redireccion_estricta = true)
	{
	if (!isset($_SESSION["usuario"]))
		{
		# Verifico si me pasa una URL para mostrar un mensaje de error
		if($_redireccion_estricta)
			{# sino muestro el mensaje por defecto y redirecciono al Index
			redireccionar("Su sessi&oacute;n ha caducado, aguarde, ser&aacute; redireccionado...",3);
			}
		return false;
		}
	else
		{
		return true;
		}
	}

?>
