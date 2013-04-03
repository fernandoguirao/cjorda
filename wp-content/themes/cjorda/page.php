<?php
/*
Template Name: page
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
				<?php endwhile; ?>
			</div>
			<?php get_barraderecha();?>
		</div>

<?php get_footer(); ?>
