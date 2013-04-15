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
				    <h2><?php _e("Do you have something to tell us?", "cjorda"); ?></h2>
				    <h3><?php _e("Fill our contact form. Thanks!", "cjorda"); ?></h3>
					<div class="control-group">
						<label class="control-label" for="inputName"><?php _e("Your name", "cjorda"); ?></label>
						<div class="controls">
							<input type="text" name="nombre" id="inputName" placeholder="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<input type="text" name="email" id="inputEmail" placeholder="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputAsunto"><?php _e("Subject", "cjorda"); ?></label>
						<div class="controls">
							<input type="text" name="asunto" id="inputAsunto" placeholder="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputMensaje"><?php _e("Message", "cjorda"); ?></label>
						<div class="controls">
							<textarea rows="3"  name="contenido" id="inputMensaje" placeholder="">
							</textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox" style="font-size: 13px; padding-bottom: 12px; width: 183px;">
								<input type="checkbox" name="acepta" value="Yes"> <?php _e("Clicking here you agree with our", "cjorda"); ?> <a href=""><?php _e("privacy police", "cjorda"); ?></a>
							</label>
							<input type="hidden" name="mandado">
							<button type="submit" class="btn"><?php _e("Send message", "cjorda"); ?></button>
						</div>
					</div>
			</form>
			</div>
			<?php get_barraderecha();?>
		</div>
<?php get_footer(); ?>
