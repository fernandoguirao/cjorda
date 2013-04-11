<?php
/*
Template Name: calendario
*/
?>
<?php get_header(); ?>
	<?php get_carousel();?>
	<div class="container-fluid bordesuperior">
		<div class="minibarra"></div>
		<div class="row-fluid no-space columnaizda">
			<div class="span8" id="home_content">
				<?php
					$events = eo_get_events(array( 
						'events_start_after'=>'today', 
						'showpastevents'=>false,//Will be deprecated, but set it to true to play it safe. 
					));
					if($events):
					foreach($events as $event):
						echo get_the_title($event->ID); //Titulo del evento
						the_field("circuito", $event->ID); //Circuito donde se corre
						echo eo_format_date($event->StartDate, 'd\/m\/Y');//fecha del evento
						the_field("pais", $event->ID); //Pais del circuito
						?>
						<img src="<?php the_field("bandera", $event->ID);?>">
						<img src="<?php the_field("imagen", $event->ID);?>">

						<?php
					endforeach;
					endif;
			?>
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>