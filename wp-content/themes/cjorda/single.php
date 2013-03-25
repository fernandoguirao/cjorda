<?php get_header(); ?>
	<?php get_carousel();?>
	<div class="container-fluid">
		<div class="minibarra"></div>
		<div class="row-fluid no-space">
			<div class="span8" id="home_content">
				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="noticia">
						<div class="minibarra"></div>
						<img src="<?php the_field("imagen");?>">
						<div class="fecha_noticia"><?php the_date('d-F-Y', '<p style="text-transform: uppercase">', '</p>'); ?></div>
						<div class="titulo_noticia"><p><?php the_title();?></p></div>
						<div style=""><?php the_content();?></div>
						<div class="container-fluid container_botones">
							<div class="row-fluid">
								<div class="span5 btn_compartir ">Compartir</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php previous_post_link(); ?>
				<?php next_post_link(); ?>
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>