<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<?php get_carousel();?>
	<div id="buscaador" class="container-fluid bordesuperior">
		<div class="minibarra"></div>
		<div class="row-fluid no-space columnaizda">
			<div class="span8" id="home_content">
				<?php if(have_posts()):?>
				<p class="tex"> Found the following matches:</p>
				<div class="separador"></div>
				<?php while ( have_posts() ) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="buscaenlace">
						    <div class="imagbus">
						      <img src="<?php the_field("imagen");?>" class="imagenbusqueda">
						  </div>
							<p class="titulobusqueda"><?php the_title();?></p>
							<p class="fechabusqueda"><?php the_date('d \d\e\ F \d\e\ Y'); ?></p>
							<div class="textobusqueda"><?php the_excerpt();?></div>
							
						</a>
						
					
				<?php endwhile; ?>
				<div class="paginacion">
					<?php previous_posts_link(); ?>
					<span class="posterior">
						<?php next_posts_link(); ?>
					</span>
				</div>
				<?php else:?>
					<p class="tex">There were no results, try another combination of words.</p>
					<p class="tex">Thanks.</p>
					<div class="separador"></div>
				<?php endif;?>
				
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>




