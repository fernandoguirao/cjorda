		</div>

		<?php wp_footer(); ?>
		<footer>
			<div class="footer">
			     <div id="foot-izq">
    				<div class="menu_footer hidden-phone">
    					<a href="<?php bloginfo("url");?>" class="home"><?php _e("HOME", "cjorda"); ?></a>
    					<a href="<?php bloginfo("url");?>/calendario" class="calendario"><?php _e("CALENDAR", "cjorda"); ?></a>
    					<a href="<?php bloginfo("url");?>/galeria" class="galeria"><?php _e("GALLERY", "cjorda"); ?></a>
    					
    					<a href="<?php bloginfo("url");?>/about" class="about-me"><?php _e("ABOUT ME", "cjorda"); ?></a>
    					<a href="<?php bloginfo("url");?>/contacto" class="contacto"><?php _e("CONTACT", "cjorda"); ?></a>
    					<a href="<?php bloginfo("url");?>/partners" class="partners"><?php _e("PARTNERS", "cjorda"); ?></a>
    				</div>
    				<div class="social_footer">
        				<a href="https://www.facebook.com/carmenjordaofficial">
        				    <img src="<?php bloginfo("template_url");?>/img/facebook.png">
        				</a>
        				<a href="http://twitter.com/carmenjorda">
        				    <img src="<?php bloginfo("template_url");?>/img/twitter.png">
        				</a>
        				<a href="http://instagram.com/carmenjorda#">
        				    <img src="<?php bloginfo("template_url");?>/img/instagram.png">
        				</a>
    				</div>
    				<div class="copyright">
    					©Carmen Jordá 2013 | <a href=""><?php _e("Legal terms", "cjorda"); ?></a> | <a href="http://carmenjorda.com/<?php $idioma = get_bloginfo('language'); if ($idioma == 'es-ES') { ?>en">English version<?php } else { ?>es">Versión española<?php } ?></a>
    				</div>
				</div>
				<div class="patrocinadores_footer visible-desktop">
					<?php _e("PARTNERS", "cjorda"); ?>
					<div class="patrocinador_footer">
						<img src="<?php bloginfo("template_url");?>/img/patrocinadores.png">
					</div>
				</div>
			</div>
		</footer>

		<?php get_scripts_footer();?>

	</body>

</html>