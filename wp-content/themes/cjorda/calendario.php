<?php
/*
Template Name: calendario
*/
?>
<?php get_header(); ?>
	<?php get_carousel();?>
	<div class="container-fluid bordesuperior">
		<div class="minibarra">
		</div>
		<div class="row-fluid no-space columnaizda">
			<div class="span8" id="home_content">
				<div id="calendariocircuitos">
				<?php
					$events = eo_get_events(array( 
						'events_start_after'=>'today', 
						'showpastevents'=>false,//Will be deprecated, but set it to true to play it safe. 
					));
					if($events):
					foreach($events as $event):
					?>
					<div class="cadacircuito">
						<div class="textocircuito">
							<div class="titulocircuito">
								<image src="<?php bloginfo('template_url'); ?>/img/icoflags.png" alt="" style="margin:-4px 20px 0 13px;" class="cirimico" WIDTH="28">
								<?php
								echo get_the_title($event->ID); //Titulo del evento
								?>
							</div>
							<div class="fechacircuito">
								<image src="<?php bloginfo('template_url'); ?>/img/icocal.png" alt="" class="cirimico">
								<?php
								echo eo_format_date($event->StartDate, 'd\/m\/Y');//fecha del evento
								?>
							</div>
							<div class="paiscircuito">
								<image src="<?php bloginfo('template_url'); ?>/img/icopin.png" alt="" style="margin: 0 29px 0 10px;" class="cirimico">
								<?php
								the_field("pais", $event->ID); //Pais del circuito
								?>
							</div>
							<div class="circuitocircuito">
								<image src="<?php bloginfo('template_url'); ?>/img/icocasco.png" alt="" class="cirimico" WIDTH="19">
								<?php
								the_field("circuito", $event->ID); //Circuito donde se corre
								?>
							</div>
						</div>
						<div class="banderacircuito">
							<img src="<?php the_field("bandera", $event->ID);?>">
						</div>
						<div class="mapacircuito">
							<img src="<?php the_field("imagen", $event->ID);?>">
						</div>
					</div>
					<?php
						endforeach;
						endif;
					?>
				</div>
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>