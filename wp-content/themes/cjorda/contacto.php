<?php
/*
Template Name: contacto
*/
?>
<?php get_header(); ?>
	<div class="container-fluid">
		<div class="minibarra"></div>
		<div class="row-fluid no-space columnaizda">
			<div class="span8" id="home_content">
				<div class="estado_mail">
					<?php mandar_email();?>
				</div>
				<form class="form-horizontal contactoform" method="post">
				    <h2>¿Quieres contarnos algo?</h2>
				    <h3>Rellena nuestro formulario de contacto. Gracias.</h3>
					<div class="control-group">
						<label class="control-label" for="inputName">Cómo te llamas</label>
						<div class="controls">
							<input type="text" name="nombre" id="inputName" placeholder="Tu nombre y apellidos">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<input type="text" name="email" id="inputEmail" placeholder="Tu email">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputAsunto">Asunto</label>
						<div class="controls">
							<input type="text" name="asunto" id="inputAsunto" placeholder="Asunto">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputMensaje">Mensaje</label>
						<div class="controls">
							<textarea rows="3"  name="contenido" id="inputMensaje" placeholder="Tu mensaje">
							</textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox" style="font-size: 13px; padding-bottom: 12px; width: 183px;">
								<input type="checkbox" name="acepta" value="Yes"> Estás de acuerdo con nuestra <a href="">política de confidencialidad</a>
							</label>
							<input type="hidden" name="mandado">
							<button type="submit" class="btn">Enviar mensaje</button>
						</div>
					</div>
			</form>
			</div>
			<?php get_barraderecha();?>
		</div>
<?php get_footer(); ?>
