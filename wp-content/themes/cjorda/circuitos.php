<?php
/*
Template Name: circuitos
*/
?>
<?php get_header(); ?>
	<?php get_carousel();?>
	<div class="container-fluid bordesuperior">
		<div class="minibarra"></div>
		<div class="row-fluid no-space columnaizda">
			<div class="span8" id="home_content">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
					  'posts_per_page' => 7,
					  'category_name'=>'circuitos',
					  'paged' => $paged
  					);

					query_posts($args); 
				?>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="noticia">
						<div class="minibarra"></div>
						<img src="<?php the_field("imagen");?>" class="imgmain">
						<div class="contenidonoticia">
							<div class="fecha_noticia"><?php the_date('d \D\E\ F \D\E\ Y', '<p style="text-transform: uppercase">', '</p>'); ?></div>
							<div class="titulo_noticia"><p><?php the_title();?></p></div>
							<div class="cuerpo_entrada"><?php the_excerpt();?></div>
							<div style="display: none;"><?php the_content();?></div>
							<div class="container-fluid container_botones">
								<div class="row-fluid">
									<a class="read-more" href="<?php the_permalink();?>">
										<div class="span5 btn_seguir">
											<div class="ico-seguir">
											</div>
											<span>
												Seguir Leyendo
											</span>
										</div>
									</a>
									<div class="span5 btn_compartir">
										<div class="ico-face">
										</div>
										<div class="ico-twit">
										</div>
										<span>
											Compartir
										</span>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				<?php endwhile; ?>
				<div class="paginacion">
					<?php previous_posts_link(); ?>
					<span class="posterior">
						<?php next_posts_link(); ?>
					</span>
				</div>
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>