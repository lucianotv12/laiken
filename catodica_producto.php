
<?php
include_once("funciones.php");

   $producto = mysql_real_escape_string($_GET["id"]);	

   $conn = new Conexion();

   $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE P.id = :producto');
   $sql->execute(array('producto' => $producto));


   $resultado = $sql->fetchAll();

   foreach ($resultado as $row) {
      $nombre =  $row["nombre"];
      $descripcion =  $row["descripcion"];      
      $url_img = $row["url_img"];
   }
   $conn = null;
   $sql = null;


include_once 'catodica_header.php';

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
								<h5 id="volver_1" style="color:orange; cursor:pointer"> « VOLVER</h5>
							</span>
						</div>

						<div class="col_three_third portfolio-single-image nobottommargin">
							<a href="#"><img src="images/catodica/AM/<?php echo $url_img?>" alt=""></a>
						</div>


						<div class="clear"></div>

					</div><!-- #portfolio end -->					



				<div class="clear"></div>

<?php
include_once 'catodica_footer.php';
?>