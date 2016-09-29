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

							  <input type="radio" name="contactEmail" value="proteccioncatodica@laiken.com.ar" checked>  &nbsp;PROTECCIÓN CATÓDICA&nbsp;&nbsp;&nbsp;
							  <input type="radio" name="contactEmail" value="lineasespeciales@laiken.com.ar">  &nbsp;LINEAS ESPECIALES&nbsp;&nbsp;&nbsp;
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
							var markerArg = new google.maps.Marker({ position: { lat:-34.6344373, lng: -58.3847207 }, map: map});

							
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