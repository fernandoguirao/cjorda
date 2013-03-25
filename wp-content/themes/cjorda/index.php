<?php get_header(); ?>
	<?php get_carousel();?>
	<div class="container-fluid">
		<div class="minibarra"></div>
		<div class="row-fluid no-space">
			<div class="span8" id="home_content">
				<?php get_noticias_box();?>
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
					  'posts_per_page' => 1,
					  'paged' => $paged
  					);

					query_posts($args); 
				?>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="noticia">
						<div class="minibarra"></div>
						<img src="<?php the_field("imagen");?>">
						<div class="fecha_noticia"><?php the_date('d-F-Y', '<p style="text-transform: uppercase">', '</p>'); ?></div>
						<div class="titulo_noticia"><p><?php the_title();?></p></div>
						<div class="cuerpo_entrada"><?php the_excerpt();?></div>
						<div style="display: none;"><?php the_content();?></div>
						<div class="container-fluid container_botones">
							<div class="row-fluid">
								<a class="read-more" href="?p=<?php echo get_the_ID();?>">
									<div class="span5 btn_seguir">Seguir Leyendo</div>
								</a>
								<div class="span5 btn_compartir">Compartir</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php previous_posts_link(); ?>
				<?php next_posts_link(); ?>
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>