<?php
/*
Template Name: galeria
*/
?>
<?php get_header(); ?>
<?php get_carousel();?>
	<div class="container-fluid">
		<div class="minibarra"></div>
		<div class="row-fluid no-space columnaizda">
			<div class="span8" id="home_content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content();?>
					
					<!-- EMPIEZA LA GALERÍA -->
				
                <div class="der-fotos" id="imagenes">
                    <!-- CADA THUMB -->
                    <div class="der-mascara">
                        <a href="#img0" data-toggle="modal">
                            <img src="<?php bloginfo('template_url'); ?>/img/cjorda.png" alt="">
                        </a>
                    </div>
                    <!-- FIN DE CADA THUMB -->
                    <!-- CADA THUMB -->
                    <div class="der-mascara">
                        <a href="#img1" data-toggle="modal">
                            <img src="http://bueninvento.net/proyectos/carmenjorda/wp-content/uploads/2013/03/slide03.png" alt="">
                        </a>
                    </div>
                    <!-- FIN DE CADA THUMB -->
                     <!-- CADA THUMB -->
                    <div class="der-mascara">
                        <a href="#img2" data-toggle="modal">
                            <img src="<?php bloginfo('template_url'); ?>/img/cjorda.png" alt="">
                        </a>
                    </div>
                    <!-- FIN DE CADA THUMB -->
                     <!-- CADA THUMB -->
                    <div class="der-mascara">
                        <a href="#img3" data-toggle="modal">
                            <img src="<?php bloginfo('template_url'); ?>/img/cjorda.png" alt="">
                        </a>
                    </div>
                    <!-- FIN DE CADA THUMB -->
                </div>
                
                
                <!-- TODOS LOS MODALES -->
                <div id="cajamodales">
                <!-- Modal individual -->
                    <div id="img1" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-body">
                            <img src="<?php bloginfo('template_url'); ?>/img/cjorda.png" alt="">
                        </div>
                        <div class="modal-footer">
                            <p>
                                sdsd
                            </p>
                            <a href="#img0" class="btn" data-dismiss="modal" data-toggle="modal" >
                                <i class="icon-chevron-left"></i>
                            </a>
                            <a href="#img2" class="btn" data-dismiss="modal" data-toggle="modal" >
                                <i class="icon-chevron-right"></i>
                            </a>
                            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">
                                <i class="icon-remove icon-white"></i>
                            </button>
                        </div>
                    </div> <!-- Fin de modal individual -->
                    
                    <!-- Modal individual -->
                    <div id="img2" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-body">
                            <img src="<?php bloginfo('template_url'); ?>/img/cjorda.png" alt="">
                        </div>
                        <div class="modal-footer">
                            <p>
                                sdsd
                            </p>
                            <a href="#img1" class="btn" data-dismiss="modal" data-toggle="modal" >
                                <i class="icon-chevron-left"></i>
                            </a>
                            <a href="#img0" class="btn" data-dismiss="modal" data-toggle="modal" >
                                <i class="icon-chevron-right"></i>
                            </a>
                            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">
                                <i class="icon-remove icon-white"></i>
                            </button>
                        </div>
                    </div> <!-- Fin de modal individual -->
                </div>
					<!-- TERMINA LA GALERÍA -->
				<div class="separador"></div>
				<?php endwhile; ?>
			</div>

		</div>

<?php get_footer(); ?>




