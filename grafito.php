<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Ibris" />
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>Laiken</title>

	<script type="text/javascript">
		$(document).ready(function(){
		$("#polvos").on( "click", function() {
			$('#portfolio_1').show(); 
			$('#portfolio_2').hide(); 
			$('#portfolio_3').hide(); 
			$('#portfolio_4').hide(); 
			$('#portfolio_5').hide(); 
			$('#portfolio_6').hide(); 
			$('#li_1').addClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_5').removeClass( "current" );
			$('#li_6').removeClass( "current" );	
		 });
		$("#manufacturas").on( "click", function() {
			$('#portfolio_2').show(); 
			$('#portfolio_1').hide(); 
			$('#portfolio_3').hide(); 
			$('#portfolio_4').hide(); 
			$('#portfolio_5').hide(); 
			$('#portfolio_6').hide(); 
			$('#li_2').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_5').removeClass( "current" );
			$('#li_6').removeClass( "current" );	

		 });
		$("#electrodos").on( "click", function() {
			$('#portfolio_3').show(); 
			$('#portfolio_1').hide(); 
			$('#portfolio_2').hide(); 
			$('#portfolio_4').hide(); 
			$('#portfolio_5').hide(); 
			$('#portfolio_6').hide(); 
			$('#li_3').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_5').removeClass( "current" );
			$('#li_6').removeClass( "current" );	
		 });		

		$("#carbones").on( "click", function() {
			$('#portfolio_4').show(); 
			$('#portfolio_1').hide(); 
			$('#portfolio_2').hide(); 
			$('#portfolio_3').hide(); 
			$('#portfolio_5').hide(); 
			$('#portfolio_6').hide(); 
			$('#li_4').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_5').removeClass( "current" );
			$('#li_6').removeClass( "current" );	
		 });		

		$("#lubricantes").on( "click", function() {
			$('#portfolio_5').show(); 
			$('#portfolio_1').hide(); 
			$('#portfolio_2').hide(); 
			$('#portfolio_3').hide(); 
			$('#portfolio_4').hide(); 
			$('#portfolio_6').hide(); 
			$('#li_5').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_6').removeClass( "current" );	
		 });		

		$("#edm").on( "click", function() {
			$('#portfolio_6').show(); 
			$('#portfolio_1').hide(); 
			$('#portfolio_2').hide(); 
			$('#portfolio_3').hide(); 
			$('#portfolio_4').hide(); 
			$('#portfolio_5').hide(); 

			$('#li_6').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_5').removeClass( "current" );	
		 });		

	});	

	</script>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-4">

						<ul>
							<li class=""><a href="index.php#nosotros"><div>NOSOTROS</div></a></li>
							<li class="current"><a href="#"><div>DIVISIONES</div></a>
								<ul>
									<li ><a style="color:white;background-color:#fbb034" href="catodica.php"><div style="color:white">PROTECCIÓN CATÓDICA</div></a></li>
									<li ><a style="color:white;background-color:#ee3135" href="lineas_especiales.php"><div style="color:white">LINEAS ESPECIALES</div></a></li>
									<li ><a style="background-color:#999999" href="grafito.php"><div style="color:white">GRAFITO</div></a></li>

								</ul>
							</li>
							<li class=""><a href="index.php#industrias"><div>INDUSTRIAS</div></a></li>
							<li class=""><a href="index.php#servicios"><div>SERVICIOS</div></a></li>
							<li class=""><a href="index.php#contacto"><div>CONTACTO</div></a></li>
							<li class=""><a href="https://secure.pipelinewatchdog.com/index.aspx" target="_blank"><div>MONITOREO</div></a></li>
						</ul>


					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" style="background-image:url('images/banner-grafito.png'); " >

			<div class="container clearfix" >
				<h1 style="color:white">GRAFITOS</h1>
				<span style="color:white">Todos los productos que necesita para su industria en un solo lugar.</span>

			</div>

		</section><!-- #page-title end -->



		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
				<!--	<ul class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Polvos y Granulados de Grafito</a></li>


					</ul>

					<div class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>
				-->
					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio_1" class="portfolio grid-container grid-container clearfix">

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_two_third portfolio-single-image nobottommargin">
						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2>Polvos y granulados de grafito:</h2>
						</div>
						<p>Laiken S.A. provee todos los grados de grafito en polvo disponibles en el mercado para una gran diversidad de aplicaciones.</p>
						<p>El grafito natural y el grafito artificial tienen usos específicos y diferentes y el stock contempla todas las necesidades del usuario.</p>
						<p><b>Grafito Natural:</b><br/>
						• Carbono 70%; 85%, 92%, 94%, 99% Y 99,5%.
						</p>

						<p><b>Grafito Artificial:</b><br/>
							• Carbono Fijo: 98 - 99%.<br/>
							• Azufre: 0,01 a 0,04%.						
						</p>						

						<p><b>Granulometrías:</b><br/>
							• Natural: Malla 200, 325, y escamas (> 80 Mesh).<br/>
							• Artificial: 8/40, 0,2 a 2 mm., 0,5 a 6 mm., 2 a 10 mm., 0 a 0,40 mm. Y otras a pedido.<br/>
							• Pellets.<br/>
							• Grafito amorfo en varias concentraciones.	<br/>			
						</p>						


					</div><!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content col_last nobottommargin">
						<a href="#"><img src="images/grafito/GR-01.png" alt=""></a>
					</div><!-- .portfolio-single-content end -->
					<div class="line"></div>

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_two_third portfolio-single-image nobottommargin">
						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2>Manufacturas de grafito</h2>
						</div>
						<p>Los grafitos especiales de Laiken pueden ser entregados como manufacturas mecanizadas de precisión, incluso con maquinaria de control numérico, de acuerdo con las especificaciones del usuario o como materiales semi elaborados.</p>
						<p>Los servicios de Laiken incluyen el asesoramiento en profundidad brindado durante el desarrollo del proyecto y la apropiada elección del grafito para cumplir con los requerimientos técnicos.</p>
						<p>Los grafitos disponibles en stock para entrega inmediata, han sido fabricados y certificados de acuerdo con las normas ISO 9001.</p>
						<p>De acuerdo a la aplicación requerida por el cliente, se selecciona el material para su manufactura.</p>
						<p>El mecanizado cumplirá con las tolerancias especificadas en el diseño o plano del usuario.</p>
					</div><!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content col_last nobottommargin">
						<a href="#"><img src="images/grafito/GR-02.png" alt=""></a>


					</div><!-- .portfolio-single-content end -->

					<div class="line"></div>

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_two_third portfolio-single-image nobottommargin">
						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2>Electródos de grafito para hornos eléctricos</h2>
						</div>
						<p>Su utilización en hornos de arco eléctrico permite la fabricación de fundición de hierro y de acero de altas calidades. La mejora en la calidad de los electrodos ha incrementado su rendimiento alcanzando costos de producción cada vez más bajos y más competitivos.</p>
						<p>Laiken S.A. provee al mercado electrodos de grafito en dos grados: Regular y High Power, y en dimensiones de 4/1,6/1, 7”, 8/1,9/1,10/1, 12”, hasta 20/1.</p>
						<p style="text-decoration:underline"><b>Carbones Eléctricos</b></p>
						<p>Fabricados en electrografitos, grafitos naturales, especiales y con contenidos de cobre. Aplicaciones en motores, generadores, racción, rozadores, trolleys, etc.</p>
					</div><!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content col_last nobottommargin">
						<a href="#"><img src="images/grafito/GR-03.png" alt=""></a>


					</div><!-- .portfolio-single-content end -->

					<div class="line"></div>

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_two_third portfolio-single-image nobottommargin">
						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2>Equipos de Proceso</h2>
						</div>
						<p>
							• Diseño, ingeniería de procesos y fabricación de Intercambiadores de calor de grafito, multitubulares y de bloques. Superficies desde 2 m2 hasta 200 m2.<br/>
							• Absorbedores para HCL de film descendiente.<br/>
							• Hornos de síntesis de HCL.<br/>
							• Columnas y piezas complementarias.<br/>
							• Mantenimiento y reparaciones de absorbedores y de intercambiadores de grafito.<br/>										
						</p>
						<p><b>Reparaciones a nuevo de Equipos de Grafito.</b><br/>
							• Diámetro de carcasa: 1700 mm.<br/>
							• Largo de tubos: 5200 mm.<br/>
							• Peso aprox.: 10 ton.<br/>
							• Cliente: Ultrafértil (Brasil).<br/>
							• Provisión y montaje de una planta de fabricación de HCL (33%) para PAMCOR, Río Tercero, Pcia. de Córdoba, Argentina.<br/>
							• Intercambiadores de calor de bloques de grafito.<br/>
						</p>
					</div><!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content col_last nobottommargin">
						<a href="#"><img src="images/grafito/GR-04.png" alt=""></a>


					</div><!-- .portfolio-single-content end -->


					<div class="line"></div>

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_full_third portfolio-single-image nobottommargin">
						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2>Lubricantes y desmoldantes</h2>
						</div>
						<p>Dispersiones coloidales de grafito en agua, aceite y alcohol.</p>
						<p>Formulaciones para trabajos especiales, con grafito y bisulfuro de molibdeno. Desmoldantes para forja, trefilación, cadenas, engranajes, etc.</p>
						<p><h2>Grafito flexible en rollos y láminas</h2></p>
						<p>Se trata de un grafito puro de altísima calidad fabricado por un sistema de moldeado. No se utiliza ningún agregado adicional en estos productos. Es un producto flexible, compresible y cuenta con un alto grado de resiliencia.</p>
						<p>Algunas aplicaciones típicas son: juntas, escudos reflectivos de calor,sellos y empaquetaduras.</p>
						<p><b>Dimensiones:</b> Espesores: 0,38; 0,5; 1 mm. y ancho de 1000 mm.</p>
						<p><b>Largos:</b>cortes a pedido hasta 50 m.</p>
						<p><b>Láminas:</b>Espesor de 1 mm., 1,5 mm., 3,5 mm. y 600 mm. de ancho y largos de 1000 mm.</p>
						<p>• Láminas de grafito flexible con inserción metálica.<br/>
							• Fibras de carbono.<br/>
							• Compuestos C-G (carbono - grafito).<br/>
							• Mantas y telas de grafito y carbono.	<br/>
						</p>

						<p>
							<br/>
								<h2>EDM Electroerosión</h2>
							<br/>							
						</p>
						<p>Servicio técnico especializado en asesoramiento al cliente. Mantenemos diez calidades de grafito en stock para las diferentes necesidades de trabajo. Grafitos para desbaste, terminación, e incluso para terminaciones con muy baja rugosidad. Materiales para letras en sobre y bajo relieve o para formas muy complicadas o muy delgadas.</p>
						<p>El grafito es 5 veces más liviano que el cobre y asimismo permite que se trabaje al doble de velocidad, con la gran ventaja que significa trabajar con un material de fácil mecanizado. Debido a que el grafito soporta temperaturas muy elevadas, se desgasta mucho menos que el cobre y no se deforma con las altas temperaturas que se producen durante el proceso de electroerosión.</p>


					</div><!-- .portfolio-single-image end -->



					</div><!-- #portfolio end -->





				<div class="clear"></div>

				<!-- Contact Form
					============================================= -->
				<?php
				if(isset($_POST["template-contactform-submit"])):

				$emailReceptor = $_POST["contactEmail"];

				$emailUsuario = $_POST["template-contactform-email"];

				$nombre = $_POST["template-contactform-name"];

				$telefono = $_POST["template-contactform-phone"];

				$subject = $_POST["template-contactform-subject"];

				$mensaje = $_POST["template-contactform-message"];

				$msj .= "Mail enviado desde Pagina Web";
				$msj .= "Nombre: $nombre \r\n ";
				$msj .= "Email: $emailUsuario \r\n ";
				$msj .= "Telefono: $telefono \r\n ";
				$msj .= "Titulo: $subject \r\n ";
				$msj .= "$mensaje";



				$cabeceras = 'From: info@laiken.com.ar' . "\r\n" .
				    'Reply-To: '. $emailUsuario . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();			


				// Enviarlo
				@mail($emailReceptor, $subject, $msj, $cabeceras);


				//print_r($_POST);
				//echo "aca enrtosss"; die;
				endif;

				?>

				<a id="contacto"></a>
				<div class="container" style="padding-top:80px" >
					<div class="heading-block center">
							<h2>CONTÁCTENOS</h2>
							<span class="divcenter">Envíenos un mail con su consulta.</span>
						</div>
					<div class="col_half">
						<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Su mensaje ha sido enviado correctamente!"></div>

						<form class="nobottommargin" id="template-contactform" name="contactform" method="post">

							<div class="form-process"></div>

							<div class="col_full">
								<label for="template-contactform-subject">Seleccione area de consulta <small>*</small></label><br>
							  <input type="radio" name="contactEmail" value="proteccioncatodica@laiken.com.ar">  &nbsp;PROTECCIÓN CATÓDICA&nbsp;&nbsp;&nbsp;
							  <input type="radio" name="contactEmail" value="lineasespeciales@laiken.com.ar">  &nbsp;LINEAS ESPECIALES&nbsp;&nbsp;&nbsp;
							  <input type="radio" name="contactEmail" value="grafitos@laiken.com.ar" checked> &nbsp;GRAFITOS

							</div>

							<div class="col_one_third">
								<label for="template-contactform-name">Nombre <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Teléfono</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-subject">Asunto <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Mensaje <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit" style="background-color:#999999">ENVIAR MENSAJE</button>
							</div>

						</form>

						<script type="text/javascript">

							$("#template-contactform").validate({
								submitHandler: function(form) {
									alert("El mensaje fue enviado correctamente.");
									$('.form-process').fadeIn();
									Send();
									return false;
								}
							});

						</script>


					</div><!-- Contact Form End -->
					
					<!-- Google Map
					============================================= -->
					<div class="col_half col_last" style="padding-top:42px">

						<section id="google-map" class="gmap" style="height: 410px;"></section>
						<div style="padding-top:15px; float:left">

							<address style="text-align:left">
								<strong>Laiken S.A.</strong><br>
								Av.Ramon Carrillo 332 C1275AHH
								Ciudad Autonoma de Buenos Aires
							</address>
						</div>
						

						<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDYAcl8h46PKnyFguhbhLoCCFn4Qs9DBvk"></script>

						<script type="text/javascript">
							
							var map;
							
							map = new google.maps.Map(document.getElementById('google-map'), {
								center: { lat: -34.6344373, lng: -58.3847207 },
								zoom: 16,
								scrollwheel: false
								
							});
							var markerArg = new google.maps.Marker({ position: { lat:-34.6344373, lng: -58.3847207 }, map: map });

							
							$().ready(function(){
								$('#mapARG').on('click',function(){
									map.setCenter({ lat: -34.589772, lng: -58.420345 });
								});
							

							});
							
							
								
						</script>
						
						

					</div><!-- Google Map End -->
					
				</div>


			</div> <!--wrap-->


		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2016 All Rights Reserved by Laiken S.A.
					</div>

					<div class="col_half col_last tright">

						 <span class="middot">Nuestros teléfonos &middot;</span> 
						 +54-11-4304-0111 / +54-11-4305-6785 
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>