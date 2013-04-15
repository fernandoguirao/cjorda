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
						<img src="<?php the_field("imagen");?>" class="imgmain img-polaroid">
						<div class="contenidonoticia">
							<div class="titulo_noticia"><p><?php the_title();?></p></div>
							<div class="cuerpo_entrada"><?php the_content();?></div>
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