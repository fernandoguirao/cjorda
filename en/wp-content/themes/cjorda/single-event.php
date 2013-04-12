<?php
/*
Template Name: page
*/
?>
<?php get_header(); ?>

	<div class="container-fluid">
		<div class="minibarra"></div>
		<div class="row-fluid no-space columnaizda">
			<div class="span8" id="home_content">
			
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">

				<!-- Display event title -->
				<h1 class="entry-title"><?php the_title(); ?></h1>

			</header><!-- .entry-header -->
	
			<div class="entry-content">
				<!-- Get event information, see template: event-meta-event-single.php -->
				<?php eo_get_template_part('event-meta','event-single'); ?>

				<!-- The content or the description of the event-->
				<?php the_content(); ?>
				<a <a class="btn" href="<?php bloginfo("url");?>/calendario">Return to calendar</a>
				
			</div><!-- .entry-content -->

			
			</article><!-- #post-<?php the_ID(); ?> -->



		<?php endwhile; // end of the loop. ?>

				
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>
