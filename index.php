<?
include_once 'funciones.php';
?>

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
		$("#_nosotros").on( "click", function() {
			$('#li_1').addClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_5').removeClass( "current" );
			$('#li_6').removeClass( "current" );												

		 });
		$("#_divisiones").on( "click", function() {
			$('#li_2').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_5').removeClass( "current" );
			$('#li_6').removeClass( "current" );												

		 });
		$("#_industrias").on( "click", function() {

			$('#li_3').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_5').removeClass( "current" );
			$('#li_6').removeClass( "current" );												
		 });		

		$("#_servicios").on( "click", function() {
			$('#li_4').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_5').removeClass( "current" );
			$('#li_6').removeClass( "current" );												

		 });		

		$("#_contacto").on( "click", function() {

			$('#li_5').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_3').removeClass( "current" );
			$('#li_4').removeClass( "current" );
			$('#li_6').removeClass( "current" );												

		 });		

		$("#_monitoreo").on( "click", function() {
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
							<li id="li_1" ><a href="#" data-scrollto="#us" id="_nosotros"><div>NOSOTROS</div></a></li>
							<li id="li_2" ><a href="#" data-scrollto="#divisiones" id="_divisiones"><div>DIVISIONES</div></a>
								<ul>
									<li ><a style="color:white;background-color:#fbb034" href="ctrl/catodica/"><div style="color:white">PROTECCIÓN CATÓDICA</div></a></li>
									<li ><a style="color:white;background-color:#ee3135" href="lineas_especiales.php"><div style="color:white">LINEAS ESPECIALES</div></a></li>
									<li ><a style="background-color:#999999" href="grafito.php"><div style="color:white">GRAFITO</div></a></li>

								</ul>
							</li>
							<li id="li_3" ><a href="#" data-scrollto="#industrias" id="_industrias"><div>INDUSTRIAS</div></a></li>
							<li id="li_4" ><a href="#" data-scrollto="#servicios" id="_servicios"><div>SERVICIOS</div></a></li>
							<li id="li_5" ><a href="#" data-scrollto="#contacto" id="_contacto"><div>CONTACTO</div></a></li>
							<li id="li_6" ><a href="https://secure.pipelinewatchdog.com/index.aspx" id="_monitoreo" target="_blank"><div>MONITOREO</div></a></li>



						</ul>


					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax swiper_wrapper clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('images/slider-01.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">NUESTRO COMPROMISO</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">La protección de las personas, el medio Ambiente y las Instalaciones</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('images/slider-02.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">EXPERIENCIA</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Más de 30 años en el mercado de petróleo y gas.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('images/slider-03.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">LÍDER EN ARGENTINA</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">En la fabricación de ánodos de protección catódica.</p>
							</div>
						</div>
					</div>

				</div>
				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
			<!--	<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>-->
			</div>

			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						grabCursor: true,
						autoplay: 7000,
						speed: 650,
						loop: true,
						onSwiperCreated: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeStart: function(swiper){
							$('#slide-number-current').html(swiper.activeLoopIndex + 1);
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeEnd: function(swiper){
							$('#slider').find('.swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
								if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
							});
							$('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
								if($(this).find('.yt-bg-player').length > 0) {
									$(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
								}
							});
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});

					$('#slider-arrow-left').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipePrev();
					});

					$('#slider-arrow-right').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipeNext();
					});

					$('#slide-number-current').html(swiperSlider.activeLoopIndex + 1);
					$('#slide-number-total').html($('#slider').find('.swiper-slide:not(.swiper-slide-duplicate)').length);
				});
			</script>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<a id="us"></a>

			<div class="content-wrap">

				<div class="promo promo-light promo-full  header-stick notopborder">
					<div class="container clearfix">
						<h3>LAIKEN S.A. ES LA ÚNICA EMPRESA ARGENTINA CERTIFICADA EN NORMAS ISO 9001: 2008<BR/>
							PARA LA FABRICACIÓN Y COMERCIALIZACIÓN DE ÁNODOS PARA PROTECCIÓN CATÓDICA.
						</h3>
					</div>
				</div>
				<div class="container clearfix">

					<div class=" center">
						<h3></h3>
						<span style="font-weight:400; font-size: 18px; ">Laiken S.A. fue fundada en 1985 en Buenos Aires, Argentina, país miembro del Mercosur. Veinte años de experiencia en la investigación y desarrollo de productos de excelente calidad, nos permiten brindar las mejores soluciones para la industria. Contamos con personal altamente calificado y entrenado para brindarles a nuestros clientes el soporte técnico y la ayuda necesaria a lo largo de sus emprendimientos.</span>
					</div>


				<div class="clear"></div><div class="line bottommargin"></div>

				<div class="col_two_fifth bottommargin">
<!--					<a href="http://vimeo.com/101373765" data-lightbox="iframe">-->
						<img src="images/video.png" alt="Image">

<!--					</a>-->
				</div>

				<div class="col_three_fifth  col_last">

					<div class="heading-block" style="margin-bottom:25px">
						<h3>Trabajamos estratégicamente para entregar a nuestros clientes productos de alta calidad:</h3>
					</div>

					<div>
						<ul>
							<li>Protección catódica</li>
							<li>Monitoreo de activos</li>
							<li>Recubrimientos (Aislación térmica y Control de la corrosión)</li>
							<li>Sistemas de alivio de presión</li>
							<li>Protección contra explosiones</li>
							<li>Empalmes mecánicos de para barras de armadura</li>
							<li>Polvos y granulados de grafito</li>
							<li>Manufacturas de grafito</li>

						</ul>
					</div>

				</div>

				<div class="clear"></div>

				<div class="row bottommargin" style="background:#f5f5f5;padding:30px 10px 20px 15px; margin-bottom:0">
					<div class="col-xs-3" style="padding-top:15px" >
							<img src="images/logo-corrosion.png" alt="Image">

					</div>

					<div class="col-xs-9 text-left" style="padding:8px 0 0 0"> 
							<h3 style="font-size:24px; margin-bottom:15px">LAIKEN S.A. ES MIEMBRO DE: THE CORROSION SOCIETY </h3>
							<span style="font-size:20px">Protecting People, Assets and the Environment from the Effects of Corrosion</span> 


					</div>
				</div>
				<div class="clear"></div>
					<a id="divisiones"></a>

					<div class="fancy-title title-border title-center topmargin-sm">
						<h2>DIVISIONES</h2>
					</div>
					<div class="title-center topmargin-sm">
						<p style="font-size:20px">Tenemos las mejores soluciones para su industria.</p>

					</div>

					</div> <!--CONTAINER-->


					<div class="col_full bottommargin-lg common-height">


						<div class="col-md-4 dark col-padding ohidden" style="background-color: #fbb034;">
							<div>
								<h3 class="uppercase" style="font-weight: 600;">PROTECCIÓN CATÓDICA</h3>
								<p style="line-height: 1.8;">La corrosión es la causante de grandes perjuicios económicos en instalaciones enterradas y/o sumergidas. Por esta razón, es necesario la utilización de la técnica de Protección Catódica,</p>
								<a href="catodica.php" class="button button-border button-light button-rounded uppercase nomargin">VER +</a>
							</div>
						</div>

						<div class="col-md-4 dark col-padding ohidden" style="background-color: #ee3135;">
							<div>
								<h3 class="uppercase" style="font-weight: 600;">LINEAS ESPECIALES</h3>
								<p style="line-height: 1.8;">En Laiken S.A., trabajamos para desarrollar soluciones a problemas complejos. Alivio de presión, supresión contra explosiones, empalmes de barras de construcción, aislación térmica, electroerosión.</p>
								<a href="lineas_especiales.php" class="button button-border button-light button-rounded uppercase nomargin">VER +</a>

							</div>
						</div>
						<div class="col-md-4 dark col-padding ohidden" style="background-color: #999999;">
							<div>
								<h3 class="uppercase" style="font-weight: 600;">GRAFITO</h3>
								<p style="line-height: 1.8;">Descubra un universo de aplicaciones.<br/>Laiken S.A. es la única empresa de Argentina especializada en la provisión de gráfito, para cubrir todas las aplicaciones industriales.</p>								
								<a href="grafito.php" class="button button-border button-light button-rounded uppercase nomargin">VER +</a>
							</div>
						</div>

						<div class="clear"></div>

					</div>

				<div class="container clearfix ">
					<a id="industrias"></a>


					<div class="fancy-title title-border title-center topmargin-sm">
						<h2>INDUSTRIAS</h2>
					</div>


					<div id="portfolio" class="portfolio grid-container portfolio-5 clearfix">

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<img src="images/industria/industria-01.jpeg" alt="Oil & Gas">
							</div>
							<div class="portfolio-desc">
								<h3>Oil & Gas</h3>

							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<img src="images/industria/industria-02.jpeg" alt="Industria">
							</div>
							<div class="portfolio-desc">
								<h3>Industria</h3>

							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<img src="images/industria/industria-03.jpeg" alt="Energía">
							</div>
							<div class="portfolio-desc">
								<h3>Energía</h3>

							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<img src="images/industria/industria-04.jpeg" alt="Minería">
							</div>
							<div class="portfolio-desc">
								<h3>Minería</h3>

							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="#">
									<img src="images/industria/industria-05.jpeg" alt="Construcción">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3>Construcción</h3>


							</div>
						</article>						

					</div><!-- #portfolio end -->


				</div> <!--CONTAINER-->
				
				<div class="clear"></div><div class="bottommargin"></div>

				<div class="section parallax dark bottommargin" style="background-image: url('images/servicios/servicios.jpeg'); padding: 100px 0;" data-stellar-background-ratio="0.4">
					<a id="servicios"></a>

					<div class="heading-block center">
						<h3>SERVICIOS</h3>
					</div>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/icono-testimonial-1.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Contamos con personal técnico altamente capacitado<br/>
										capaz de trabajar tiempo parcial o complete en su empresa</p>

									</div>
								</div>
<!--								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/icono-testimonial-2.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Somos líderes en Argentina para los materiales de control de corrosión, como ánodos, y recubrimientos.</p>

									</div>
								</div>
-->
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/icono-testimonial-3.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Laiken es su mejor opción para desarrollar su negocio en el mercado latinoamericano.</p>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="clear"></div>

				<a id="porfolio"></a>
				<div class="container clearfix mrg-b20 mrg-t20 container-clients">
					<div class="row">
						<div class="heading-block center mrg-b0">
							<h2>&nbsp;</h2>
							<span class="divcenter">Algunas de las Empresas que confían en nosotros.</span>							
						</div>
					</div>
				</div>

				<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel footer-stick" style="padding: 11px 0; background-color:#f5f5f5;">
					<div class="oc-item"><a><img src="images/clients/customer-01.png" alt="Clients"></a></div>
					<div class="oc-item"><a><img src="images/clients/customer-02.png" alt="Clients"></a></div>
					<div class="oc-item"><a><img src="images/clients/customer-03.png" alt="Clients"></a></div>
					<div class="oc-item"><a><img src="images/clients/customer-04.png" alt="Clients"></a></div>
					<div class="oc-item"><a><img src="images/clients/customer-05.png" alt="Clients"></a></div>
					<div class="oc-item"><a><img src="images/clients/customer-06.png" alt="Clients"></a></div>
					<div class="oc-item"><a><img src="images/clients/customer-07.png" alt="Clients"></a></div>
					<div class="oc-item"><a><img src="images/clients/customer-08.png" alt="Clients"></a></div>
				</div>

						<script type="text/javascript">

							jQuery(document).ready(function($) {

								var ocClients = $("#oc-clients-full");

								ocClients.owlCarousel({
									margin: 30,
									loop: true,
									nav: false,
									autoplay: true,
									dots: false,
									autoplayHoverPause: true,
									responsive:{
										0:{ items:3 },
										800:{ items:4 },
										1000:{ items:5 }
									}
								});

								ocClients.on('resize.owl.carousel', function(event) {
								    
								    var $carousel = $('#oc-clients-full');        
								    $carousel.data('owl.carousel')._invalidated.width = true;
								    $carousel.trigger('refresh.owl.carousel');

								    console.log('owlres');
								})

							});

						</script>

				<div class="clear"></div><div class="bottommargin-lg"></div>

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
							  <input type="radio" name="contactEmail" value="proteccioncatodica@laiken.com.ar" checked>  &nbsp;PROTECCIÓN CATÓDICA&nbsp;&nbsp;&nbsp;
							  <input type="radio" name="contactEmail" value="lineasespeciales@laiken.com.ar">  &nbsp;LINEAS ESPECIALES&nbsp;&nbsp;&nbsp;
							  <input type="radio" name="contactEmail" value="grafitos@laiken.com.ar"> &nbsp;GRAFITOS

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



			</div> <!-- WRAP-->

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