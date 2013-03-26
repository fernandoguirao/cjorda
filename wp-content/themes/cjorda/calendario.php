<?php
/*
Template Name: calendario
*/
?>
<?php get_header(); ?>
	<div class="container-fluid">
		<div class="minibarra"></div>
		<div class="row-fluid no-space">
			<div class="span8" id="home_content">
				<?php get_noticias_box();?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content();?>
				<?php endwhile; ?>
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>
