
<?php
include_once("../../funciones.php");


 $categoria = "1";   

   $conn = new Conexion();

   $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE idCategoria = :Categoria and idSubcategoria = :subcategoria');
   $sql->execute(array('Categoria' => $categoria, 'subcategoria' => $subcategoria));


   $resultado = $sql->fetchAll();
	$productos_1 = array();
   foreach ($resultado as $row) {
      $productos_1[] =  $row;
   }


   $conn = null;
   $sql = null;



?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio_1" class="portfolio grid-container grid-container clearfix">

						<?php foreach($productos_1 as $producto):
						if($producto['idSubcategoria'] == 1):
							$carpeta_img = "AM";
						elseif($producto['idSubcategoria'] == 2):
							$carpeta_img = "AZ";
						elseif($producto['idSubcategoria'] == 3):
							$carpeta_img = "AA";
						elseif($producto['idSubcategoria'] == 4):
							$carpeta_img = "AA";						
						endif;
						?>

							<article class="portfolio-item pf-media pf-icons">
								<div class="portfolio-image" style="border:1px solid gray;">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<a href="catodica_producto.php?id=<?php echo $producto['id']; ?>"><img src="../../images/catodica/<?php echo $carpeta_img?>/minis/<?php echo $producto["url_img"]; ?>" alt=""></a>
											</div>
										</div>
									</div>

										<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="<?php echo CTRL?>catodica/index.php?accion=producto&id=<?php echo $producto['id']; ?>" class="center-icon" ><i class="icon-line-plus"></i></a>

									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="catodica_producto.php?id=<?php echo $producto['id']; ?>"><?php echo $producto["nombre"]; ?></a></h3>
									<span><a href="#">APLICACIONES</a></span>
								</div>
							</article>
						<?php endforeach;?>
	

					</div><!-- #portfolio end -->

				<div class="clear"></div>
