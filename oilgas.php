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
		$("#catodica").on( "click", function() {
			$('#portfolio_1').show(); 
			$('#portfolio_2').hide(); 
			$('#portfolio_3').hide(); 
			$('#portfolio_4').hide(); 
			$('#portfolio_5').hide(); 
			$('#li_1').addClass( "current" );
			$('#li_2').removeClass( "current" );
			$('#li_3').removeClass( "current" );
		 });
		$("#lineasespeciales").on( "click", function() {
			$('#portfolio_2').show(); 
			$('#portfolio_1').hide(); 
			$('#portfolio_3').hide(); 
			$('#portfolio_4').hide(); 
			$('#portfolio_5').hide(); 
			$('#li_2').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_3').removeClass( "current" );


		 });
		$("#grafito").on( "click", function() {
			$('#portfolio_3').show(); 
			$('#portfolio_1').hide(); 
			$('#portfolio_2').hide(); 
			$('#portfolio_4').hide(); 
			$('#portfolio_5').hide(); 
			$('#li_3').addClass( "current" );
			$('#li_1').removeClass( "current" );
			$('#li_2').removeClass( "current" );

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
							<li ><a href="#"><div>DIVISIONES</div></a>
								<ul>
									<li ><a style="color:white;background-color:#fbb034" href="catodica.php"><div style="color:white">PROTECCIÓN CATÓDICA</div></a></li>
									<li ><a style="color:white;background-color:#ee3135" href="lineas_especiales.php"><div style="color:white">LINEAS ESPECIALES</div></a></li>
									<li ><a style="background-color:#999999" href="grafito.php"><div style="color:white">GRAFITO</div></a></li>

								</ul>
							</li>
							<li class="current"><a href="index.php#industrias"><div>INDUSTRIAS</div></a></li>
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
		<section id="page-title" style="background-image:url('images/banner-lineas-esp.png');" >

			<div class="container clearfix" >
				<h1 style="color:white">LINEAS ESPECIALES</h1>
				<span style="color:white">Todos los productos que necesita para su industria en un solo lugar.</span>

			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu" class="no-sticky" >

			<div id="page-menu-wrap" style="background-color:#ee3135; color:white">

				<div class="container clearfix">
					<nav style=" float:left">
						<ul>
							<li id="li_1" class="current"><a id="catodica">Protección Catódica</a></li>
							<li id="li_2"><a id="lineasespeciales">Lineas Especiales</a></li>
							<li id="li_3"><a id="grafito">Grafito</a></li>

						</ul>
					</nav>

				<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->




		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
				<!--	<ul class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter" ><a href="#" style="background-color:#ee3135;" data-filter="*">Aislación Térmica</a></li>
						<li><a href="#" data-filter=".pf-uielements">Control de Corrosión</a></li>

					</ul>

					<div class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>-->

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio_1"  class="portfolio grid-container grid-container clearfix">

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Super Therm®:</h2>
							</div>
							<p><b>Coating cerámico aislante del calor. Aislación térmica definitiva.</b></p>
							<p>Super Therm® es un aislante térmico multicerámico que bloquea y refleja el calor del sol. Un diseño avanzado, materiales desarrollados por la NASA y resinas cuidadosamente seleccionadas le otorgan características únicas como barrera térmica y como protección contra la humedad y la corrosión, con cualidades que se sostienen a lo largo del tiempo.</p>
							<p>
								<b>Principales beneficios:</b><br/>
								• Refleja el 95% de la luz solar en sus tres formas (Visible, IR y UV).<br/>
								• Es barrera contra la humedad, resiste la condensación y el moho<br/>
								• Resistente al fuego y a químicos, provee aislación y protección anticorrosiva.<br/>
								• Supera a la fibra de vidrio, lana mineral y otros aislantes tradicionales.<br/>
								• 0,6% de degradación en tres años.<br/>
								• Recubrimiento de base agua, bajo en Orgánicos Volátiles.<br/>
								• Reduce los costos de mantenimiento con su gran durabilidad (más de 15 años).
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>Super Therm se emplea en transportes de sustancias perecederas, ahorrando hasta un 30% en el consumo de combustible y minimizando las fallas en los equipos de refrigeración al reducir su sobrecarga. También se lo usa como recubrimiento interior en casas y edificios. Aún recubierto con pintura o empap<elado, impide que el calor escape en invierno, reduciendo los costos de calefacción.</p>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/AT/AT-01.jpg" alt=""></a>


						</div><!-- .portfolio-single-content end -->
						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Epoxotherm®:</h2>
							</div>
							<p><b>Coating cerámico aislante del calor. Aplicable sobre superficies húmedas. Sumergible.</b></p>
							<p>Epoxotherm es un recubrimiento epoxi de dos componentes que produce una capa protectora flexible y resistente, con una capacidad aislante igualo mayor que de cuatro a seis pulgadas de lana de vidrio, con sólo 2mm de espesor seco. Este recubrimiento epoxi fue formulado con tres compuestos cerámicos diferentes para detener la absorción de calor proveniente de fuentes radiantes. Epoxotherm fue diseñado para aplicar se sobre superficies húmedas y para uso sumergido o en áreas donde las constantes salpicaduras y la condensación son un problema. Puede aplicarse por spray sin aire, con pincel o rodillo, y soporta temperaturas de hasta 205°C. Es resistente a muchos químicos y solventes, y puede aplicarse sobre superficies de metal, mampostería y madera.</p>
							<p>
								<b>Beneficios:</b><br/>
								Forma una caparazón impermeable que se adhiere muy bien al sustrato, impidiendo el flujo térmico y la condensación debajo del aislante.
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>En tubos y domos de refrigeración para detener la condensación; para detener el shock térmico en concreto; en el interior en piscinas climatizadas; sobre sustratos donde la humedad constante sea un problema.</p>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<a href="#"><img src="images/lineasespeciales/AT/AT-02.jpg" alt=""></a>



						</div><!-- .portfolio-single-content end -->

						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>HPC:</h2>
							</div>
							<p><b>Aislante Cerámico para ser utilizado en situaciones de alta temperatura.</b></p>
							<p>El recubrimiento HPC contiene una combinación de resinas y cerámicos de alta temperatura y alta performance especialmente diseñados en una fórmula de base agua y no inflamable. Se usa como recubrimiento aislante para reducir la temperatura superficial en tuberías que transportan líquidos calientes, gases o vapor. HPC está diseñado para aislar superficies cuya temperatura se encuentra entre 175°C y 370°C. Previene el escape de calor por conducción y radiación de la superficie de tuberías y recipientes calientes. HPC contendrá el calor en cañerías por distancias mayores que los aislantes tradicionales. Se aplica por spray directamente sobre la superficie caliente previamente limpia. Aumenta la eficiencia y la seguridad de los procesos y retarda la corrosión.</p>
							<p>
								<b>Beneficios:</b><br/>
								Se aplica en caliente, sin detener el proceso productivo. Al tener pH alto y ser barrera contra la humedad, protege a los sustratos contra la corrosión. Con 3mm se reemplazan 6cm de lana de vidrio. No es tóxico ni inflamable. No requiere envoltorio de aluminio. Fácil de aplicar.
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>Aislación de tuberías, recipientes y cualquier superficie caliente (hasta 370°C).</p>						
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/AT/AT-03.jpg" alt=""></a>



						</div><!-- .portfolio-single-content end -->
						<div class="line"></div>

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>HSC:</h2>
							</div>
							<p><b>Aislante térmico cerámico para ser utilizado hasta 175°C.</b></p>
							<p>Parecido a HPC, el recubrimiento HSC contiene una combinación de resinas y cerámicos de alta temperatura y alta performance especialmente diseñados en una fórmula de base agua y no inflamable. HSC está diseñado para aplicarse con pincel en aplicaciones que requieran una terminación suave sobre diámetros pequeños. HSC permite aislar superficies cuyas temperaturas están entre los 65°C y los 175°C. HSC se aplica mientras la superficie está caliente, evitando paradas y pérdida de tiempo productivo. HSC puede aplicarse sobre válvulas y codos, donde la aislación tradicional no puede aplicarse con efectividad. Al bloquear las pérdidas de calor, aumenta el rendimiento de los procesos ahorrando energía y dinero.</p>
							<p>
								<b>Beneficios:</b><br/>
								Es el aislante térmico para altas temperaturas de más fácil aplicación. Su carácter impermeable y su adherencia previenen la corrosión bajo aislantes en el rango de temperaturas en que ésta es más importante.
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>Aislación de tuberías (especialmente de bajo diámetro), recipientes y cualquier superficie caliente (hasta 175°C).</p>						
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/AT/AT-04.jpg" alt=""></a>



						</div><!-- .portfolio-single-content end -->

						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Sunshield®:</h2>
							</div>
							<p><b>Sunshield® combina elastómeros acrílicos y aditivos resinosos de alto desempeño.</b></p>
							<p>De base agua, ofrece una capa protectora flexible y tenaz. Diseñado para la performance y la durabilidad, contiene 4 cerámicos únicos que detienen el ingreso de calor en estructuras debido a las radiaciones solares IR, UV y Visible. Sunshield es flexible e impermeable; reduce el trabajo térmico del techo, y evita la corrosión y el deterioro de la superficie. Aún de buena performance, no ofrece todos los beneficios de Super Therm.</p>						
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/AT/AT-05.jpg" alt=""></a>



						</div><!-- .portfolio-single-content end -->


						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Omega Fire:</h2>
							</div>
							<p><b>Recubrimiento.</b></p>
							<p>Omega Fire es un recubrimiento de un solo componente que contiene una mezcla de ocho cerámicos combinados en una fórmula de base agua para crear una barrera anti llamas y contra la migración del calor. El recubrimiento puede soportar llama directa de hasta 1000 °C endureciendo su superficie en el primer contacto, mientras provee la aislación térmica necesaria. La mezcla de resinas se carboniza al contacto con la llama, formando un compuesto refractario con los componentes cerámicos en la cara del recubrimiento que enfrenta al fuego mientras se mantiene flexible en contacto con el sustrato, acompañándolo en sus movimientos. A diferencia de las pinturas intumescentes, provee protección por más de dos horas (según ensayos realizados por UL).</p>
							<p>
								<b>Beneficios:</b><br/>
								Coating ignífugo de características únicas ovaladas por variedad de ensayos y certificados. Bajos costos de preparación superficial. Adherencia y flexibilidad excepcionales.
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>Protección de equipos, estructuras, salas de máquinas y almacenes/transportes de hidrocarburos antes de y durante el desarrollo de incendios; prevención del colapso de estructuras de soporte.</p>						
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/AT/AT-06.png" alt=""></a>



						</div><!-- .portfolio-single-content end -->

						<div class="clear"></div>

					</div><!-- #portfolio end -->	

					<div id="portfolio_2" style="display:none" class="portfolio grid-container grid-container clearfix">

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Rust Grip®:</h2>
							</div>
							<p><b>Coating que detiene y encapsula la corrosión.Encapsula asbesto y otras sustancias peligrosas</b></p>
							<p>Rust Grip® es un recubrimiento poliuretánico de un solo componente y pigmentos metálicos, desarrollado para adherirse sobre prácticamente cualquier sustrato en cualquier condición. Sobre superficies oxidadas, Rust Grip penetra en la porosidad del óxido, generando un anclaje tenaz e impermeable que protege a la superficie de los factores ambientales.</p>
							<p>
								<b>Beneficios:</b><br/>
							Un solo componente. Impermeable y resistente a la radiación uv. Alta resistencia mecánica (477 kg/cm2 en una semana). Adhiere sobre cualquier tipo de sustrato, con poca preparación superficial. 8000 horas en cámara de niebla salina (y contando). Aprobado para uso marítimo. Resistente a salpicaduras de ácidos, bases y solventes orgánicos. Encapsula firmemente pinturas con plomo, asbesto u otras sustancias peligrosas.
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>Como encapsulante de pinturas de base plomo, asbestos y otras sustancias peligrosas. Como coating anticorrosivo de una sola capa. En atmósferas agresivas con alta salinidad. Como base para otros recubrimientos (como Super Therm o Enamo Grip) donde no pueda realizarse una preparación superficial rigurosa, y como top coat de aislantes que requieran resistencia UV (Hot Pipe Coating o HSC300). Como recubrimiento para pisos (necesita agregados antideslizantes).</p>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/CC/CC-01.jpg" alt=""></a>




						</div><!-- .portfolio-single-content end -->
						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Lining Kote UHS:</h2>
							</div>
							<p><b>Coating para el manejo de sustancias muy corrosivas</b></p>
							<p>Lining Kote UHS es un recubrimiento epoxi de dos componentes diseñado específica mente para resistir los productos químicos más agresivos, tales como ácidos y bases fuertes en altas concentraciones, y la mayoría de los solventes orgánicos. Una vez curado, forma una película polimérica de muy alta densidad (alto peso molecular), flexible, durable y protectora.</p>
							<p>
								<b>Beneficios:</b><br/>
							Con Lining Kote pueden recubrirse aceros de baja o media aleación órdenes de magnitud más económicos que los aceros de alta aleación o las aleaciones de base níquel, para almacenar y/o transportar sustancias altamente corrosivas, o extender la resistencia química de instalaciones existentes.
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>Transporte y contención de ácidos y bases fuertes y sus soluciones, y solventes orgánicos. Protección de estructuras críticas en ambientes altamente corrosivos.</p>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<a href="#"><img src="images/lineasespeciales/CC/CC-02.jpg" alt=""></a>



						</div><!-- .portfolio-single-content end -->
						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Moist Metal Grip®:</h2>
							</div>
							<p><b>Protección en instalaciones mojadas o sumergidas</b></p>
							<p>Moist Metal Grip es un recubrimiento epoxi de dos componentes que tiene especial aplicación en las situaciones en las que nunca se puede contarcon una superficie seca. Esta clase de sustratos se presentan muy a menudo en diversas industrias. Moist Metal Grip puede aplicarse sin detener la maquinaria, obteniéndose una capa durable, impermeable y tenaz que protegerá sus instalaciones por años.</p>
							<p>
								<b>Beneficios:</b><br/>
							Puede aplicarse sobre superficies húmedas o mojadas, y se puede sumergir una vez seca al tacto. Se aplica fácilmente con pincel o rodillo, y adhiere a concreto, madera y metal, incluso si hay óxido instantáneo o superficial.
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>Superficies que permanecerán mojadas o sumergidas, sitios de condensación frecuente o inevitable, protección de hormigones contra la humedady cualquier aplicación en la que se requiera una barrera tenaz contra el agua.</p>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<a href="#"><img src="images/lineasespeciales/CC/CC-03.jpg" alt=""></a>



						</div><!-- .portfolio-single-content end -->


						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
							
								<h2>Chlor Rid®:</h2>
							</div>
							<p><b>Eliminador de sales superficiales</b></p>
							<p>Chlor Rid® es un producto que se agrega al agua con la que se lava una superficie antes de su pintado para remover el contenido de sales que ésta pueda tener. En la mayoría de las pinturas y recubrimientos, el contenido de sales en superficie antes de la aplicación se convierte en el principal motivo de falla prematura: las sales, junto con la presencia de pequeñas cantidades de agua, generarán corrosión que empujará el coating, formando ampollas y, finalmente, despegándolo. Todo esto se evita con el uso de Chlor Rid.</p>
							<p>
								<b>Beneficios:</b><br/>
							Económico. Biodegradable. Bajo en VOCs. No inflamable. Fácil de usar, no requiere maquinaria costosa para su aplicación. Evita el despegue prematuro de los recubrimientos y asiste en la protección contra la corrosión de la superficie.	
							</p>	
							<p><b>Aplicaciones:</b></p>

							<p>Puentes, barcos, tanques de almacenamiento, electrónica, estructuras marinas, plantas de energía eléctrica, plantas mineras, plantas petroquímicas, edificios y vehículos en zonas costeras, tuberías, etc.</p>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/CC/CC-04.jpg" alt=""></a>



						</div><!-- .portfolio-single-content end -->


						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Alocit Systems:</h2>
							</div>
							<p><b>Pintura Epoxi para aplicar sobre superficies secas, mojadas, aceitosas y bajo el agua.</b></p>
							<p>Estos recubrimientos están diseñados para proteger estructuras de la corrosión y para adherirse a los sustratos más desafiantes, mientras mantienen un alto rendimiento sin sacrificar estándares ambientales. 100% sólidos y libre de componentes orgánicos volátiles (VOCs), los coatings ALOClT pueden ser aplicados utilizando pincel, rodillo o spray.</p>
							<p>
								<b>Beneficios:</b><br/>
								• Adhiere sobre superficies sumergidas, mojadas y aceitosas.<br/>
								• Adhiere tanto sobre acero como concreto y los sustratos más rebeldes.<br/>
								• Resistente a la presión hidrostática.<br/>
								• 100 % sólidos.</br>
								• Sin VOCs.</br>
								• Aplicable en agua dulce y salada.</br>
								• Aplicable en ambientes con temperaturas hasta O 0c.</br>
								• Dura hasta 30 años.</br>
								• Resistente a la corrosión y a la abrasión.	
							</p>	
							<p><b>Aplicaciones:</b><br/>

								• Áreas de contención de derrames</br>
								• Túneles y sótanos</br>
								• Pisos. Muelles</br>
								• Pilotes de acero y de concreto</br>
								• Tablestacas. Zonas de salpicaduras.</br>
								• Áreas con corrosión concentrada o acelerada (ALWC y MIC ).</br>
								• Encapsulado de PCB’s.</br>

							</p>
							<p><b>Otros Productos AlOCIT</b></p>
							<p style="text-decoration:underline;color:red">ALOCIT 28.15</p>
							<p><b>Pintura Epoxy para Terminación</b></p>
							<p>Adhesión sobresaliente sobre superficies aceitosas y mojadas, bajo el agua y en la zona de salpicaduras. Es un epoxy formado por dos componentes, para ser aplicado sobre concreto, acero y piezas de hierro.</p>

							<p style="text-decoration:underline;color:red">ALOCIT 28.14</p>
							<p><b>Pintura Epoxy Base</b></p>
							<p>100% sólidos, libre de componentes orgánicos volátiles (VOCs), pintura epoxy que contiene zinc, para ser utilizada como base. Excelente adhesión sobre superficies mojadas y secas, protegiéndolas de la corrosión.</p>
							<p style="text-decoration:underline;color:red">ALOCIT 28.96</p>
							<p><b>Tixotrópico (levemente viscoso).</b></p>
							<p>Una variante tixotrópica del 28.95 específicamente diseñada para aplicaciones verticales o desde abajo. Es utilizado como adhesivo en materiales de construcción o como relleno para reparar grietas y agujeros.</p>
							<p style="text-decoration:underline;color:red">ALOCIT 28.95</p>
							<p><b>Epoxy Base</b></p>
							<p>Base compuesta por dos partes, de baja viscosidad, utilizado para reparar grietas en concreto incluso estando mojado o húmedo. Se puede aplicarsobre superficies húmedas o secas.</p>						
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/CC/CC-05.jpg" alt=""></a>

						</div><!-- .portfolio-single-content end -->

						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Enviropeel:</h2>
							</div>
							<p><b>Thermo Plastic Systems</b></p>
							<p>• Sistema de encapsulado termoplástico para proteger todo tipo de piezas, componentes y equipos.<br/>
							• Posee inhibidores de corrosión para frenar el proceso corrosivo.<br/>
							• Frena la Corrosión Inmediatamente y Protege el Desgaste.</p>
							<p>Enviropeel es una “piel” termoplástica que se puede aplicar sobre objetos de cualquier forma o tamaño, ya sea componentes o equipos. Envlropeel también prevendrá el ingreso de polvo, humedad y otros contaminantes dentro de sistemas rotativos. Asimismo protegerá componentes y equipos almacenados. Se aplica en estado líquido y solidifica casi instantáneamente.</p>
							<p>
								<b>Beneficios:</b><br/>

								• Freno inmediato de la corrosión en todas sus formas.<br/>
								• Reducción directa de desgaste y roturas.<br/>
								• Retorno rápido de la inversión.<br/>
								• Reducción de: costos de mano de obra y accidentes relacionados con el mantenimiento.<br/>
								• Larga vida útil.<br/>
								• Poco requerimiento en la preparación de superficies.<br/>
								• Amigable con el medio ambiente, no tóxico, sin VOC’ s.<br/>
								• Fácil de remover para acceso y servicio. La piel removida puede volver a utilizarse.<br/>
								• Adoptado por importantes compañías Off-Shore y mineras.
							</p>	
							<p><b>Aplicaciones:</b><br/>
								• Alojamiento de cojinetes.<br/>
								• Vályulas, bridas, ejes y poleas.<br/>
								• Cajas de engranajes.<br/>
								• Gabinetes, tableros y cajas de empalmes.<br/>
								• Cabezas de tornillos.<br/>
								• Juntas de metales disímiles.<br/>
								• Reemplazo de cintas de petrolato.<br/>
								• Protección de repuestos críticos.<br/>
								• Repuestos almacenados.<br/>
								• Mecanizados.<br/>
							</p>


						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/CC/CC-06.jpg" alt=""></a>


						</div><!-- .portfolio-single-content end -->

					</div><!-- #portfolio end -->

					<div id="portfolio_3" style="display:none" class="portfolio grid-container grid-container clearfix">
						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Discos de ruptura de grafito:</h2>
							</div>
							<p>Un disco de ruptura es un dispositivo de alivio de presión que provee apertura instantánea a una presión y temperatura determinadas y que no vuelve a cerrarse cuando la presión disminuye. Su función es proteger frente a sobre presiones a un sistema que pueda estar sujeto a presiones excesivas causadas por el mal funcionamiento del equipo mecánico, reacciones fuera de control, y fuegos internos o externos.</p>
							<p>
								<b>Beneficios:</b><br/>
								• Ofrece una excelente resistencia química a los principales agentes corrosivos.<br/>
								• No se ve afectado por el shock térmico debido a su bajo coeficiente de expansión térmica.<br/>
								• Alta resistencia a la fatiga. Excelente comportamiento en situaciones de presiones pulsantes.<br/>
								• Su resistencia mecánica no se ve afectada por las temperaturas dentro del rango de operación.<br/>
								• Admiten un amplio rango de presiones ruptura. Rompen desde presiones muy bajas.<br/>
							</p>	
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/DRG/DRG-01.jpg" alt=""></a>



						</div><!-- .portfolio-single-content end -->


						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<a href="#"><img src="images/lineasespeciales/DRG/DRG-02.png" alt=""></a>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2></h2>
							</div>
							<p style="color:red"><b>DISCO MODELO STD</b><br/></p>
							<p>Este modelo de disco de ruptura se adapta a la mayoría de las aplicaciones. Se fabrica solamente para bridas ANSI 150. Para presiones de ruptura menores a1.75 Kg./cm² se debe utilizar el modelo con soporte para vacío STD-V.</p>
							<p style="color:red"><b>DISCO MODELO STD-I</b><br/></p>
							<p>Este disco se coloca en forma invertida. Permite rangos de presiones mayores al STD. Se fabrican para bridas ANSI 150 y ANSI 300.</p>

							<p style="color:red"><b>DISCO MODELO STD-V</b><br/></p>
							<p>Es el modelo STD con la adición de un soporte que garantiza el funcionamiento del disco en condiciones de vacío.</p>

							<p style="color:red"><b>DISCO MODELO STD-L</b><br/></p>
							<p>Este disco también se coloca en forma invertida. Permite rangos de presiones mayores. Se fabrican para bridas ANSI 150 y ANSI 300. Lleva una barrera de teflón entre el disco y el proceso. Asegura alta resistencia a la corrosión en</p>
							<p style="color:red"><b>DISCO MODELO STD-AT</b><br/></p>
							<p>Es el disco modelo STD al cual se adiciona un soporte para alta temperatura. Este soporte aislante permite trabajar hasta temperaturas de 350°C.</p>


						</div><!-- .portfolio-single-content end -->


						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<a href="#"><img src="images/lineasespeciales/DRG/DRG-03.png" alt=""></a>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>RANGOS DE FABRICACIÓN PARA STD / STD-V</h2>
							</div>
							<p style="color:red">Estos modelos tambien se proveen con aislación para alta temperatura.<br/></p>
							<p style="border: 1px solid red;padding:7px" >
								• Rango de manufactura : 0% / -10%.<br/>
								• Relacion entre la presion de operación y la de ruptura: máximo 80%.<br/>
								• Tolerancia de ruptura: +/- 5% desde 1 kg/cm² y +/- 0,05 kg/cm² desde 0,07 - 1 kg/cm.²<br/>
								• Los discos sin protección para alta temperatura se fabrican para una temperatura coincidente máxima de 150°c.<br/>
								• Máxima temperatura proceso sin aislacion: 200°c.<br/>
								• Máxima temperatura de proceso con ailación: 350°c.<br/>								

							</p>


						</div><!-- .portfolio-single-content end -->


						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<a href="#"><img src="images/lineasespeciales/DRG/DRG-04.png" alt=""></a>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2 style="color:red">RANGOS DE FABRICACIÓN PARA STD-I / STD-L</h2>
							</div>
							<p >Estos modelos tambien se proveen con aislación para alta temperatura. Armadura de acero: opcional para discos ansi 300#<br/></p>
							<p style="border: 1px solid red; padding:7px" >
								• Rango de manufactura : 0% / -10%.<br/>
								• Relacion entre la presion de operación y la de ruptura: máximo 80%.<br/>
								• Tolerancia de ruptura: +/-5% desde 1kg/cm² y +/- 0,05kg /cm² desde 0,07 - 1kg/cm².<br/>
								• Los discos sin protección para alta temperatura se fabrican para una temperatura coincidente máxima de 150°c.<br/>
								• Máxima temperatura proceso sin aislacion para alta temperatura: 200°c. <br/>
								• Máxima temperatura de proceso con aislación para alta temperatura: 350°c. 							
							</p>
							<p style="background-color:red; color:white;padding:7px" >
								<span style="text-decoration:underline"> Datos a suministrar para la cotización de un disco de ruptura</span>
								• Diámetro requerido y modelo de disco de ruptura.<br/>
								• Presión y temperatura de operación.<br/>
								• Nivel de vacío. Contrapresión.<br/>
								• Fluído de proceso.<br/>
								• Presión y temperatura de ruptura.<br/>							
							</p>

						</div><!-- .portfolio-single-content end -->

					</div><!-- #portfolio end -->

					<div id="portfolio_4" style="display:none" class="portfolio grid-container grid-container clearfix">

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_full_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Alivio de presión</h2>
							</div>
							<p ><b>Soluciones de discos de ruptura efectivas y eficientes</b></p>
							<p>Los discos superiores de Fike, Axius®, Axius® SCy ATLAS son productos de Tecnología G2. Una tecnología patentada de última generación usada para fabricar discos de ruptura sin utilizar herramientas de marcado, lo que no produce zonas de tensión que puedan generar fatiga y ofrece un rendimiento de primera clase.
							</p>


						</div><!-- .portfolio-single-content end -->

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_full_third portfolio-single-image nobottommargin">
							<img src="images/lineasespeciales/FIKE/FIKE-01.png" alt="">
							<br/><br/>
							<img src="images/lineasespeciales/FIKE/FIKE-02.png" alt="">
						</div><!-- .portfolio-single-image end -->


						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<a href="#"><img src="images/lineasespeciales/FIKE/FIKE-03.jpg" alt=""></a>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Epaco® Control System</h2>
							</div>
							<p ><b>Detección y control</b></p>
							<p>El sistema de detección y control EPACO de Fike ofrece comunicación con sistemas de supresión y aislamiento brindando máxima protección contra explosiones. También puede ser personalizado para ajustarse a las condiciones específicas de un determinado proceso o planta. El sistema EPACO aporta mayor estabilidad, diseño expandible, contribuye a reducir paradas, reduce costos y brinda protección inigualable.
							</p>
							<p>
								<b>El software exclusivo de Fike, EPWorks™ ofrece reportes de:</b><br/>
								• Estado del sistema<br/>
								• Lecturas de presión<br/>
								• Historia antes y después de la activación del sistema lo cual amplía su capacidad de diagnóstico<br/>				
							</p>

							<p>
								<b>La tecnología “bus” de EPACO:</b><br/>
								• Comunica el estado del sistema<br/>
								• Activa la protección del sistema<br/>
								• Permite acceder a la información a distancia	<br/>		
							</p>


						</div><!-- .portfolio-single-content end -->


						<div class="line"></div>

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<img src="images/lineasespeciales/FIKE/FIKE-04.png" alt="">
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Supresión de explosiones</h2>
							</div>
							<p ><b>Protección industrial completa</b></p>
							<p>Nuestros innovadores actuadores liberan agentes sin carga explosiva y tienen una vida útil de 10 años. El diseño, patentado, tanto del cilindro como de la boquilla, minimiza la restricción del flujo, permite extinguir la explosión más rápido y reduce la presión en el interior del equipo de proceso. El diseño simple del recipiente elimina partes móviles o puntos de desgaste aumentando su confiabilidad en protección contra explosiones.</p>
							<p>								
								• Los contenedores de supresión HRD ofrecen un tiempo de respuesta rápido<br/>
								• Su diseño lo hace muy confiable y su funcionamiento es a prueba de fugas<br/>
								• El sistema de supresión de incendios con CO2 es efectivo en diversos procesos industriales<br/>				
							</p>

							<p style="text-decoration:underline">Aislamiento de explosión</p>
							<p>El aislamiento de una explosión previene la propagación de las llamas por conductos y tuberías de una unidad del proceso a otra mediante válvulas de activación rápida, barreras químicas o pasivas.</p>
							<p style="text-decoration:underline"><b>Prevea la propagación de una explosión con:</b><br/>
								• Aislamiento mecánico, proporciona una barrera física contra la transmisión de llamas y la presión a través de tuberías y ductos.<br/>
								• Aislamiento Químico, consigue detener las llamas a través de la descarga de un agente extintor químico en ductos.<br/>
								• Aislamiento pasivo, ofrece un bloqueo mecánico como respuesta a la ola de presión, resultante de una explosión.<br/>		
							</p>


						</div><!-- .portfolio-single-content end -->


						<div class="line"></div>



						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_full_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Soluciones de venteo</h2>
							</div>
							<p ><b>Soluciones para protección contra explosiones</b></p>
							<p>
								• Paneles de venteo contra explosiones Fike<br/>
								• Requieren poco o ningún mantenimiento<br/>
								• Desempeño comprobado de acuerdo con el diseño; todo el desempeño del modelo se valida mediante pruebas de explosión a escala completa<br/>
								• Diseñados para brindar características de desempeño óptimas:<br/>
									&nbsp;&nbsp;»» Menor masa<br/>
									&nbsp;&nbsp;»» Capacidad de manejo de presión cíclica<br/>
									&nbsp;&nbsp;»» Resistente al vacío<br/>
									&nbsp;&nbsp;»» Alta eficiencia de venteo<br/>
									&nbsp;&nbsp;»» Presiones de ruptura certificadas (PSTAT)<br/>
								• Diseño de apertura completa, sin fragmentación, elimina restricciones<br/>
								• Sin partes móviles, para mayor confiabilidad<br/>
								• Bajo costo, instalación sencilla, y larga vida útil<br/>
								• Opciones disponibles: cubiertas para intemperie, indicadores de ruptura, aislamiento y soportes para vacío.
							</p>
							<p><b>Venteo de explosiones sin llama</b></p>

							<p>El venteo sin llama, junto con los paneles de venteo de explosiones de Fike, puede extinguir la llama de la explosión venteada sin requerir el uso de ductos costosos, limitar la ubicación del equipo, u otra protección más costosa.</p>
							<p> • Elimina la necesidad de usar ductos costosos<br/>
								• Mayor eficiencia de venteo, en comparación con el venteo por ductos<br/>
								• Virtualmente sin mantenimiento</p>
							<p style="border: 1px solid red; padding:7px"  >
								<span style="color:red"><b>PANELES DE VENTEO - TAMAÑOS</b></span><br/>
								CV: Ideal para ciclado estático o moderado, y condiciones de vacío moderadas.<br/>
								CV-S: Óptimo para condiciones en proceso con vacío completo o moderado con algunas pulsaciones/ciclos<br/>
								CV-SF: Soporta condiciones de vacío completo mediante el uso de barras de soporte en el ensamble del marco.<br/>
								VMAX: Panel de venteo de explosiones de alto desempeño con múltiples domos, ofrece una excelente vida útil en condiciones de proceso difíciles, desempeño estable sobre una amplia gama de temperaturas, y clasificada para vacío.
							</p>

						</div><!-- .portfolio-single-content end -->
						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_full_third portfolio-single-image nobottommargin">
							<a href="#"><img src="images/lineasespeciales/FIKE/FIKE-05.png" alt=""></a><br/>
							<a href="#"><img src="images/lineasespeciales/FIKE/FIKE-06.png" alt=""></a>


						</div><!-- .portfolio-single-image end -->

					</div>	
					<div id="portfolio_5" style="display:none" class="portfolio grid-container grid-container clearfix">

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>LENTON® de Pentair®</h2>
							</div>
							<p><b>Sistema de empalmes mecánicos para barras de armaduras</b></p>
							<p>Pentair® es líder mundial en el diseño y fabricación de sistemas avanzados de empalmes mecánicos para barras de armaduras.</p>
							<p><b>Beneficios</b><br/>
								• Más confiables que los sistemas solapados por no depender del hormigón para transferir cargas.<br/>
								• Mayor integridad estructural. Las conexiones mecánicas ofrecen resistencia y solidez durante eventos artificiales, sísmicos u otros eventos naturales.<br/>
								• Los códigos requieren que los empalmes mecánicos brinden prestaciones mayores que las longitudes de diseño típicas para empalmes solapados.
								Típicamente, 125% o 150% mayor capacidad del empalme mecánico versus empalme solapado.<br/>
								• Los empalmes mecánicos eliminan los problemas de congestión de barras en la zona de superposición y permiten una eficiencia mayor minimizando los problemas en la obra.<br/>
								• Los empalmes mecánicos dan la posibilidad al diseñador de obtener una relación ideal de acero/hormigón, con la eliminación de varias barras en la zona de superposición.<br/>
								• Con conexiones mecánicas existe la opción de utilizar barras de mayor diámetro en columnas de menor sección minimizando la congestión. Esta reducción en el tamaño de las columnas resulta un diseño más eficiente y una óptima utilización de áreas.<br/>
								• Eliminan los tediosos cálculos para el solape.<br/>
								• Fácil y rápida instalación y no requieren mano de obra especializada.<br/>
								• Optimizan la relación costo/beneficio al reducir los costos de mano de obra y al acelerar los programas de trabajo.<br/>
								• La utilización para eliminar las barras en espera reduce el trabajo y aumenta la seguridad de la obra.<br/>
								• El manguito Terminator elimina la congestión y simplifica la ubicación de barras.<br/>
								• Cuando se utilizan empalmes para reparación se elimina el costo de tener que romper grandes cantidades
								de hormigón.<br/>
							</p>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/LE/LE-01.png" alt=""></a>



						</div><!-- #portfolio end -->
						<div class="line"></div>

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>La Familia de Manguitos LENTON®</h2>
							</div>
							<p style="color:red">MANGUITOS CON ROSCA CONICA LENTON®</p>
							<p>Los manguitos LENTON® son los empalmes más delgados del mercado y su rosca cónica los convierte en los más confiables y fáciles de instalar, con una relación óptima costo-beneficio. La gama de manguitos LENTON® incluye empalmes estándares y de posición, permitiendo conectar barras de cualquier forma, tamaño y diámetro. También hay manguitos soldables o con rosca métrica para realizar conexiones entre elementos en hormigón y en acero.</p>

							<p style="color:red">LENTON® FORM SAVER</p>
							<p>Es el sistema ideal para eliminar las barras salientes en caso de obras ejecutadas en fases sucesivas o en caso de aberturas temporales. Está diseñado con rosca cónica LENTON® y fabricado con una protección de la rosca unida a una placa, para una sujeción sencilla y segura al enconfrado.</p>							

							<p style="color:red">CADWELD® REBAR</p>
							<p>Los manguitos CADWELD® REBAR se utilizan en caso de necesitarse una resistencia y solidez superior. Ofrece consistencia versatilidad y flexibilidad. Es el empalme más utilizado a escala mundial para instalaciones nucleares. El sistema CADWELD® REBAR no tiene ninguna exigencia particular para la preparación de los extremos de las barras.</p>							
							<p style="color:red">LENTON® INTERLOCK</p>
							<p>Es un sistema de conexión para pre-fabricadores por estar diseñado para dar una continuidad estructural entre las barras de armadura en elementos pre-fabricados. El sistema LENTON® INTERLOCK tiene su máxima eficiencia en construcciones pre-fabricadas, donde contribuye a eliminar las líneas anti-estéticas entre los elementos estructurales con resultados arquitectónicamente muy atractivos.</p>														

							<p style="color:red">LENTON® QUICK WEDGE</p>
							<p>Este sistema está diseñado principalmente para conexiones sobre barras ya existentes en la estructura siendo su instalación muy rápida y sencilla. LENTON® QUICK WEDGE permite la eliminación de los costos y peligros de demolición de secciones de hormigón. Es un sistema muy eficiente para ampliar viaductos, para reforzar estructuras en zonas sísmicas, para extensión de pilares, etc.</p>														

							<p style="color:red">LENTON® SPEED SLEEVE</p>
							<p>Es un sistema de empalme en estructuras solicitadas únicamente a compresión. LENTON® SPEED SLEEVE está diseñado para una instalación rápida y una inspección sencilla. Estando los extremos de las barras cortados a escuadra, este sistema cumple con las normas internacionales para empalmes a compresión.</p>														
							<p style="color:red">LENTON® TERMINATOR</p>
							<p>Este elemento es un sistema de anclaje con rosca cónica que se coloca en el extremo de la barra con el objetivo de proveer un anclaje más eficaz respecto al que se obtiene con una barra doblada. Este sistema simplifica la ubicación de las barras, reduce la congestión y mejora la integridad estructural.</p>														

							<p style="color:red">LENTON® LOCK</p>
							<p>Estos manguitos permiten una fácil y simple instalación en campo debido a que no es necesaria la preparación del extremo de la barra, el corte por sierra del extremo o estampado del extremo. Los manguitos se instalan mediante la utilización de una llave convencional o neumática dependiendo del diámetro de la barra. Las cabezas de los tornillos de ajuste se descabezan al alcanzarse el torque necesario lo que permite una inspección visual.</p>							

						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">
							<a href="#"><img src="images/lineasespeciales/LE/LE-02.png" alt=""></a>


						</div><!-- #portfolio end -->
						<div class="line"></div>

				</div>




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
							  <input type="radio" name="contactEmail" value="lineasespeciales@laiken.com.ar" checked>  &nbsp;LINEAS ESPECIALES&nbsp;&nbsp;&nbsp;
							  <input type="radio" name="contactEmail" value="grafitos@laiken.com.ar" > &nbsp;GRAFITOS

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