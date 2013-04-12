<?php
/*
Template Name: partners
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
					  'category_name'=>'partners',
					  'paged' => $paged
  					);

					query_posts($args); 
				?>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="noticia">
						<div class="minibarra"></div>
						
						<div class="contenidonoticia">
							<a href="<?php the_permalink();?>"><img src="<?php the_field("imagen");?>" class="imgmain"></a>
						</div>
						
					</div>
				<?php endwhile; ?>
				
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>