<?php 
$events = eo_get_events(array( 
       'numberposts'=>1, 
       'events_start_after'=>'today', 
       'showpastevents'=>false,//Will be deprecated, but set it to true to play it safe. 
  ));
?>
<?php if($events): ?>
<?php foreach($events as $event):?>
<div class="contenedor_crono">
	<?php echo	get_the_title($event->ID); ?>
	<?php $dia_evento=eo_format_date($event->StartDate, 'd');?>
	<?php $mes_evento=eo_format_date($event->StartDate, 'm');?>
	<?php $anyo_evento=eo_format_date($event->StartDate, 'Y');?>
	<?php $hora_evento=eo_format_date($event->StartTime, 'G');?>
	<?php echo $dia_evento." ".$mes_evento." ".$anyo_evento;?>
</div>
<?php endforeach;?>
<?php endif;?>