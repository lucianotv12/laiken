<?php

   $producto = mysql_real_escape_string($idProducto);	

   $conn = new Conexion();

   $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE P.id = :producto');
   $sql->execute(array('producto' => $producto));


   $resultado = $sql->fetchAll();

   foreach ($resultado as $row) {
      $nombre =  $row["nombre"];
      $descripcion =  $row["descripcion"];      
      $url_img = $row["url_img"];
      $categoria = $row["idCategoria"];
      $subcategoria = $row["idSubcategoria"];

   }
   $conn = null;
   $sql = null;

   if($categoria == 1):
   	$volver= "catodica.php";

   elseif($categoria == 2):
   	$volver= "lineasEspeciales.php";

   endif;	

   if($subcategoria == 1):
   		$volver= CTRL . "catodica/index.php?accion=magnesio";
   		$carpeta_img= "AM";

   elseif($subcategoria == 2):
   		$volver= CTRL . "catodica/index.php?accion=zinc";
   		$carpeta_img= "AZ";

   elseif($subcategoria == 3):
   		$volver= CTRL . "catodica/index.php?accion=aluminio";
   		$carpeta_img= "AA";

   endif;	



?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="clear"></div>



					<div id="portfolio_1_1"  class="portfolio grid-container grid-container clearfix">

						<div class="fancy-title" style="padding-bottom:30px; border-bottom:1px gray solid">	
								<span style="float:left">
								<b><?php echo $nombre?>:</b> <?php echo $descripcion?>							
							</span>
							<span style="float:right">
								<a id="volver_1" style="color:orange; cursor:pointer" href="<?php echo $volver;?>"> « VOLVER</a>
							</span>
						</div>

						<div class="col_three_third portfolio-single-image nobottommargin">
							<a href="#"><img src="<?php echo IMAGES?>/catodica/<?php echo $carpeta_img?>/<?php echo $url_img?>" alt=""></a>
						</div>


						<div class="clear"></div>

					</div><!-- #portfolio end -->					



				<div class="clear"></div>

