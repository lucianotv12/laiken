
<?php
include_once("funciones.php");


 $categoria = "1";   
 $subcategoria = "1";   

   $conn = new Conexion();

   $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE idCategoria = :Categoria and idSubcategoria = :subcategoria');
   $sql->execute(array('Categoria' => $categoria, 'subcategoria' => $subcategoria));


   $resultado = $sql->fetchAll();
	$productos_1 = array();
   foreach ($resultado as $row) {
      $productos_1[] =  $row;
   }



   $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE idCategoria = :Categoria and idSubcategoria = 2');
   $sql->execute(array('Categoria' => $categoria));


   $resultado = $sql->fetchAll();
	$productos_zinc = array();
   foreach ($resultado as $row) {
      $productos_zinc[] =  $row;
   }

  $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE idCategoria = :Categoria and idSubcategoria = 3');
   $sql->execute(array('Categoria' => $categoria));


   $resultado = $sql->fetchAll();
	$productos_aluminio = array();
   foreach ($resultado as $row) {
      $productos_aluminio[] =  $row;
   }

  $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE idCategoria = :Categoria and idSubcategoria = 4');
   $sql->execute(array('Categoria' => $categoria));


   $resultado = $sql->fetchAll();
	$productos_CI = array();
   foreach ($resultado as $row) {
      $productos_CI[] =  $row;
   }


  $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE idCategoria = :Categoria and idSubcategoria = 5');
   $sql->execute(array('Categoria' => $categoria));


   $resultado = $sql->fetchAll();
	$productos_SE = array();
   foreach ($resultado as $row) {
      $productos_SE[] =  $row;
   }


  $sql = $conn->prepare('SELECT P.*, PI.url_img FROM productos P inner join productos_img PI ON P.id = PI.idProducto WHERE idCategoria = :Categoria and idSubcategoria = 6');
   $sql->execute(array('Categoria' => $categoria));


   $resultado = $sql->fetchAll();
	$productos_MR = array();
   foreach ($resultado as $row) {
      $productos_MR[] =  $row;
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

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio_1" class="portfolio grid-container grid-container clearfix">

						<?php foreach($productos_1 as $magnesio):?>

							<article class="portfolio-item pf-media pf-icons">
								<div class="portfolio-image" style="border:1px solid gray;">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<a href="catodica_producto.php?id=<?php echo $magnesio['id']; ?>"><img src="images/catodica/AM/minis/<?php echo $magnesio["url_img"]; ?>" alt=""></a>
											</div>
										</div>
									</div>

										<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="catodica_producto.php?id=<?php echo $magnesio['id']; ?>" class="center-icon" ><i class="icon-line-plus"></i></a>

									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="catodica_producto.php?id=<?php echo $magnesio['id']; ?>"><?php echo $magnesio["nombre"]; ?></a></h3>
									<span><a href="#">APLICACIONES</a></span>
								</div>
							</article>
						<?php endforeach;?>
	

					</div><!-- #portfolio end -->

	
					<div id="portfolio_2" style="display:none" class="portfolio grid-container grid-container clearfix">

						<?php foreach($productos_zinc as $zinc):?>

							<article class="portfolio-item pf-media pf-icons">
								<div class="portfolio-image" style="border:1px solid gray;">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<img src="images/catodica/AZ/minis/<?php echo $zinc["url_img"]; ?>" alt="">
											</div>
										</div>
									</div>

										<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="catodica_producto.php?id=<?php echo $zinc['id']; ?>" class="center-icon" ><i class="icon-line-plus"></i></a>

									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="catodica_producto.php?id=<?php echo $zinc['id']; ?>"><?php echo $zinc["nombre"]; ?></a></h3>
									<span><a href="#">APLICACIONES</a></span>
								</div>
							</article>
						<?php endforeach;?>
	

					</div><!-- #portfolio end -->
					

					<div id="portfolio_3" style="display:none"  class="portfolio grid-container grid-container clearfix">

						<?php foreach($productos_aluminio as $aluminio):?>

							<article class="portfolio-item pf-media pf-icons">
								<div class="portfolio-image" style="border:1px solid gray;">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<a href="catodica_producto.php?id=<?php echo $aluminio['id']; ?>"><img src="images/catodica/AA/minis/<?php echo $aluminio["url_img"]; ?>" alt=""></a>
											</div>
										</div>
									</div>

										<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="catodica_producto.php?id=<?php echo $aluminio['id']; ?>" class="center-icon" ><i class="icon-line-plus"></i></a>

									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="catodica_producto.php?id=<?php echo $aluminio['id']; ?>"><?php echo $aluminio["nombre"]; ?></a></h3>
									<span><a href="#">APLICACIONES</a></span>
								</div>
							</article>
						<?php endforeach;?>

					</div><!-- #portfolio end -->

					<div id="portfolio_4" style="display:none" class="portfolio grid-container grid-container clearfix">
						<?php foreach($productos_CI as $CI):?>

							<article class="portfolio-item pf-media pf-icons">
								<div class="portfolio-image" style="border:1px solid gray;">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<a href="catodica_producto.php?id=<?php echo $CI['id']; ?>"><img src="images/catodica/CI/minis/<?php echo $CI["url_img"]; ?>" alt=""></a>
											</div>
										</div>
									</div>

										<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="catodica_producto.php?id=<?php echo $CI['id']; ?>" class="center-icon" ><i class="icon-line-plus"></i></a>

									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="catodica_producto.php?id=<?php echo $CI['id']; ?>"><?php echo $CI["nombre"]; ?></a></h3>
									<span><a href="#">APLICACIONES</a></span>
								</div>
							</article>
						<?php endforeach;?>
					</div><!-- #portfolio end -->


					<div id="portfolio_5" style="display:none"  class="portfolio grid-container grid-container clearfix">

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<a href="#"><img src="images/catodica/SE/SE-02.png" alt=""></a>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>CADWELD® PLUS:</h2>
							</div>
							<p>Lo último en conexiones soldadas que nunca se aflojan, corroen o incrementan su valor de resistencia, solo se mejoran.
								CADWELD PLUS es el último desarrollo en la continua evolución de los productos exotérmicos de ERICO®. Las conexiones eléctricas CADWELD
								han sido reconocidas como lo mejor en conexiones para la industria de ferrocarriles, protección catódica y aplicaciones para sistemas de tierra
								o energía.</p>
							<p>
								Características:<br/>
								• Paquete Integrado de material para soldadura<br/>
								• Metal de soldadura con Código<br/>
								• Unidad Electrónica de Control<br/>
								• Cable de un metro con ochenta centímetros para la unidad
								de Control<br/>
							</p>	
							<p>
								Beneficios
								<br/>• Simplifica el entrenamiento y la preparación
								<br/>• Reducción en costos de mano de obra
								<br/>• Simplifica la limpieza
								<br/>• Reduce el riesgo de error en la aplicación
								<br/>• Verificación visual simple para ver el tamaño correcto de la carga
								<br/>• No requiere de material de arranque
								<br/>• Fácil ignición
								<br/>• Incrementa la flexibilidad en áreas de difícil acceso

							</p>

						</div><!-- .portfolio-single-content end -->
						<div class="line"></div>


						<!-- Portfolio Single Image
						============================================= -->
						<div class="col_two_third portfolio-single-image nobottommargin">
							<a href="#"><img src="images/catodica/SE/SE-01.png" alt=""></a>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col_one_third portfolio-single-content col_last nobottommargin">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>El sistema CADWELD® PLUS:</h2>
							</div>
							<p>Consiste en un contenedor metálico sellado para la soldadura, desechable y resistente a la humedad.
								El material de soldadura, disco retén y fuente de ignición están incorporados en el contenedor individual.</p>
							<p>
								• Virtualmente sin caducidad de almacenamiento<br/>
								• Se realizan las soldaduras a distancias de hasta 1.8 metros (Hasta 4.6 metros con un cable opcional)<br/>
								• Requiere un mínimo de componentes – no material de arranque, no discos reten, no chispero<br/>
								• Fácil de manejar, almacenar y transportar – por aire, tierra o mar en cantidades ilimitadas<br/>
								• Reduce el tiempo de instalación en un 20%<br/>
								• Los contenedores del material de soldadura tienen un código de colores -por tamaño y tipo de aleación- para una fácil identificación.	<br/>
								• Tiene un sistema de ignición electrónico por medio de una unidad de control operada por baterías con certificación CE/UL y NOM que está diseñada para 600 conexiones con un juego de 8 baterías normales AA (incluidas) – no requiere baterías especiales o cargadores.<br/>
								• Diseñado para utilizarse en todos los moldes estándar CADWELD® incluyendo los de CADWELD® MULTI.

							</p>	

						</div><!-- .portfolio-single-content end -->


						<div class="clear"></div>

					</div><!-- #portfolio end -->					

					<div id="portfolio_6" style="display:none"  class="portfolio grid-container grid-container clearfix">
						<div class="row">
							<!-- Portfolio Single Image
							============================================= -->
							<div class="col_two_third portfolio-single-image nobottommargin">
								<a href="#"><img src="images/catodica/MR/MR-01.png" alt=""></a>
							</div><!-- .portfolio-single-image end -->

							<!-- Portfolio Single Content
							============================================= -->
							<div class="col_one_third portfolio-single-content col_last nobottommargin">

								<!-- Portfolio Single - Description
								============================================= -->
								<div class="fancy-title title-bottom-border">
									<h2>Elecsys M2M:</h2>
								</div>
								<p>¿Cómo funciona?</p>

							</div><!-- .portfolio-single-content end -->
						</div>
						<div class="line"></div>
						<div class="row">
							<!-- Portfolio Single Image
							============================================= -->
							<div class="col_two_third portfolio-single-image nobottommargin">
								<a href="#"><img src="images/catodica/MR/MR-02.png" alt=""></a>
							</div><!-- .portfolio-single-image end -->

							<!-- Portfolio Single Content
							============================================= -->
							<div class="col_one_third portfolio-single-content col_last nobottommargin">



								<!-- Portfolio Single - Description
								============================================= -->
								<div class="fancy-title title-bottom-border">
									<h2>Elecsys ISM-4:</h2>
								</div>
								<p><b>Sistema de monitorización remota</b></p>
								<p>El Elecsys ISM-4 es un monitor industrial de 4 canales con flexibilidad de medición para manejar una amplia gama de aplicaciones de monitorización remota. Cada uno de los cuatro canales se puede configurar de manera independiente para medir voltajes con precisión entre +/-100mV y +/-200V</p>
								<p>
									<b>Características:</b><br/>
									• Notificaciones instantáneas de alarma y normalización por correo electrónico o mensaje de texto<br/>
									• Rangos programables en todos los canales analógicos<br/>
									• Gabinete con bloqueo<br/>
									• Circuitos resistentes a descargas/sobretensión<br/>								
									• Disponible en configuraciones habilitadas para celular, satélite o Modbus<br/>
									• Funcionamiento en régimen de potencia flexible
								</p>


							</div><!-- .portfolio-single-content end -->
						</div>
						<div class="line"></div>

						<div class="row">
							<!-- Portfolio Single Image
							============================================= -->
							<div class="col_two_third portfolio-single-image nobottommargin">
								<a href="#"><img src="images/catodica/MR/MR-03.png" alt=""></a>
							</div><!-- .portfolio-single-image end -->

							<!-- Portfolio Single Content
							============================================= -->
							<div class="col_one_third portfolio-single-content col_last nobottommargin">



								<!-- Portfolio Single - Description
								============================================= -->
								<div class="fancy-title title-bottom-border">
									<h2>SentraLink CP:</h2>
								</div>
								<p><b>Monitoreo Remoto para Sensores, Transductores y Protección Catódica</b></p>
								<p>El SentraLink CP es el sistema ideal para cualquier acción de monitoreo que incluya la combinación de sensores, transductores y/o lecturas de protección catódica, como granjas de pozos y tanques, estaciones reguladoras, estaciones de control (válvulas).</p>
								<p>
									<b>Características:</b><br/>
									• Monitoreo de pozos y tanques<br/>
									• Monitoreo remoto de estaciones de control/ válvulas<br/>
									• Monitoreo remoto de válvulas de escape<br/>
									• Monitoreo remoto de estaciones reguladoras
								</p>
								<p>
									<b>Aplicaciones:</b><br/>
									• Circuito diseñado para aguantar sobretensiones<br/>
									• Programable vía Internet<br/>
									• 2 entradas análogas para voltaje, 2 entradas para sensores/ transductores,1 entrada digital<br/>
									• Batería Recargable de Apoyo de níquel cadmio para alarmas de perdida de suministro
								</p>

							</div><!-- .portfolio-single-content end -->
						</div>
						<div class="line"></div>

						<div class="row">
							<!-- Portfolio Single Image
							============================================= -->
							<div class="col_two_third portfolio-single-image nobottommargin">
								<a href="#"><img src="images/catodica/MR/MR-04.png" alt=""></a>
							</div><!-- .portfolio-single-image end -->

							<!-- Portfolio Single Content
							============================================= -->
							<div class="col_one_third portfolio-single-content col_last nobottommargin">



								<!-- Portfolio Single - Description
								============================================= -->
								<div class="fancy-title title-bottom-border">
									<h2>Watchdog Scout:</h2>
								</div>
								<p><b>Sistemas de Monitoreo Remoto con Interrupción</b></p>
								<p>El Watchdog Scout está diseñado para enfrentar todos los desafíos encontrados en el monitoreo de rectificadores para protección catódica. El avanzado sistema con capacidad de verificación compara, automáticamente, el canal de calibración a un voltaje estable y pre-determinado en cada medición garantizando la lectura más precisa en todo momento.</p>
								<p>
									<b>Características:</b><br/>
									• 4 canales de medición análogos, 2 canales de entrada digitales (contacto seco, acumulación de pulso), canal de detección de prendido/apagado de AC (probeta incluido), interrupción sincronizada vía GPS<br/>
									• Protección contra sobretensiones (prueba de voltaje acorde con las especificaciones del IEC 61000-4-5 ha sido conducida)<br/>
									• ”Calibración con Auto-Verificación” asegura la medición precisa de cada lectura<br/>
									• Opciones de telemetría satelital o celular para comunicación confiable en cualquier rincón del mundo<br/>
									• Interrupción de rectificador<br/>
									• Detección de perdida de corriente alterna (AC)
								</p>
								<p>
									<b>Aplicaciones:</b><br/>
									• Monitoreo de rectificador para protección catódica<br/>
									• Programación de ciclos de interrupción en grupo<br/>
									• Monitoreo de estado seco, digital con alarmas<br/>
									• Contador de pulso/acumulador para aplicaciones de lectura de medidores<br/>
									• Sistema de comunicación/interface LCD
								</p>

							</div><!-- .portfolio-single-content end -->
						</div>

						<div class="line"></div>

						<div class="row">
							<!-- Portfolio Single Image
							============================================= -->
							<div class="col_two_third portfolio-single-image nobottommargin">
								<a href="#"><img src="images/catodica/MR/MR-05.png" alt=""></a>
							</div><!-- .portfolio-single-image end -->

							<!-- Portfolio Single Content
							============================================= -->
							<div class="col_one_third portfolio-single-content col_last nobottommargin">



								<!-- Portfolio Single - Description
								============================================= -->
								<div class="fancy-title title-bottom-border">
									<h2>Watchdog Tracker:</h2>
								</div>
								<p><b>Sistemas de Monitoreo Remoto para Estaciones de Prueba, Bonos Críticos y Mitigación de AC</b></p>
								<p>El sistema de monitoreo remoto Watchdog Tracker se carateriza por su “estado-de-arte” en Precisión de Medición y su registro de datos de forma remota. Calcula y registra todos los valores estándar de las estaciones de prueba y además: Potencial AC, Densidad de Corriente AC y Corriente AC de Drenaje. Todas las lecturas y mediciones son almacenadas en la memoria interna y pueden ser extraídas de manera remota a través de cualquier aparato con acceso al Internet como tablets y smartphones. A su vez, las alarmas, horarios y escaneados pueden ser programados remotamente.</p>
								<p>
									<b>Características:</b><br/>
									• Circuito diseñado para aguantar sobrecargas<br/>
									• Programable vía Internet<br/>
									• Funciona con batería o con panel solar<br/>
									• Acceso vía Internet<br/>
									• Construcción dura y fuerte<br/>
									• Tarjeta Data-logger interna/fija con capacidad de 30 millones de mediciones o 15 años de mediciones al más corto intervalo (15”)
								</p>
								<p>
									<b>Aplicaciones:</b><br/>
									• Medición de voltaje inducido AC<br/>
									• Densidad de corriente AC y drenaje de corriente<br/>
									• Bonos críticos<br/>
									• Bonos aislados de refuerzo<br/>
									• Voltajes potenciales On/Off<br/>
									• Interruptores de corriente inversa
								</p>

							</div><!-- .portfolio-single-content end -->
						</div>

					</div><!-- #portfolio end -->





				<div class="clear"></div>

<?php
include_once 'catodica_footer.php';
?>