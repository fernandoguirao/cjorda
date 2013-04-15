<?php get_header(); ?>
	<?php get_carousel();?>
	<div class="container-fluid bordesuperior">
		<div class="minibarra"></div>
		<div class="row-fluid no-space columnaizda">
			<div class="span8" id="home_content">
				<?php get_noticias_box();?>
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'category_name'=>'noticias',
					  'posts_per_page' => 3,
					  'paged' => $paged
  					);
					query_posts($args); 
				?>
				
				<div id="notihome">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="noticia">
						<div class="minibarra"></div>
						<a href="<?php the_permalink();?>">
						  <div class="imgmain">
						      <img src="<?php the_field("imagen");?>">
						  </div>
						</a>
						<div class="contenidonoticia">
    						<div class="fecha_noticia"><?php the_date('d \D\E\ F \D\E\ Y', '<p style="text-transform: uppercase">', '</p>'); ?></div>
						  <a href="<?php the_permalink();?>"><div class="titulo_noticia"><p><?php the_title();?></p></div></a>
						  <a href="<?php the_permalink();?>"><div class="cuerpo_entrada"><?php the_excerpt();?></div></a>
							
						</div>
						
					</div>
				<?php endwhile; ?>
				</div>
				<div class="spara"></div>
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