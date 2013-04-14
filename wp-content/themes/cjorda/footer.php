		</div>

		<?php wp_footer(); ?>
		<footer>
			<div class="footer">
			     <div id="foot-izq">
    				<div class="menu_footer hidden-phone">
    					<a href="<?php bloginfo("url");?>" class="home">HOME</a>
    					<a href="<?php bloginfo("url");?>/calendario" class="calendario">CALENDARIO</a>
    					<a href="<?php bloginfo("url");?>/galeria" class="galeria">GALERIA</a>
    					
    					<a href="<?php bloginfo("url");?>/about" class="about-me">ABOUT ME</a>
    					<a href="<?php bloginfo("url");?>/contacto" class="contacto">CONTACTO</a>
    					<a href="<?php bloginfo("url");?>/partners" class="partners">PARTNERS</a>
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
    					©Carmen Jordá 2013 | <a href="">Aviso legal</a> | <a href="<?php bloginfo("url");?>/en">English version</a>
    				</div>
				</div>
				<div class="patrocinadores_footer visible-desktop">
					Patrocinadores
					<div class="patrocinador_footer">
						<img src="<?php bloginfo("template_url");?>/img/patrocinadores.png">
					</div>
				</div>
			</div>
		</footer>

		<?php get_scripts_footer();?>

	</body>

</html>