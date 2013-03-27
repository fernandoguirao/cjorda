<?php 
$events = eo_get_events(array( 
       'numberposts'=>1, 
       'events_start_after'=>'today', 
       'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe. 
  ));
  
?>

<?php if($events): ?>
	<?php foreach($events as $event):?>
		<?php
			$dia_evento=eo_format_date($event->StartDate, 'd');
			$mes_evento=eo_format_date($event->StartDate, 'm');
			$anyo_evento=eo_format_date($event->StartDate, 'Y');
			$hora_evento=eo_format_date($event->StartTime, 'G');
			$minuto_evento=eo_format_date($event->StartTime, 'i');
		?>
		<div class="contenedor_crono">
			<div class="cr_digito" id="cr_titulo"><?php echo	get_the_title($event->ID);?></div>
			<div class="cr_digito cr_reloj" id="cr_dias">0</div>
			<div class="cr_digito cr_puntos">:</div>
			<div class="cr_digito cr_reloj" id="cr_horas">0</div>
			<div class="cr_digito cr_puntos">:</div>
			<div class="cr_digito cr_reloj" id="cr_minutos">0</div>
			<div class="cr_digito cr_puntos">:</div>
			<div class="cr_digito cr_reloj" id="cr_segundos">0</div>
		</div>
	<?php endforeach;?>
<?php endif;?>

<script type="text/javascript">
	var fecha_evento=new Date(<?php echo $anyo_evento;?>, <?php echo $mes_evento-1;?>, <?php echo $dia_evento;?>, <?php echo $hora_evento;?>, <?php echo $minuto_evento;?>, 0, 0);
	var intermitente=true;
	function crono(){
		var hoy=new Date();
		var diferencia=(fecha_evento.getTime()-hoy.getTime())/1000;
		dias=Math.floor(diferencia/86400);
		$("#cr_dias").html(dias);
		diferencia=diferencia-(86400*dias);
		horas=Math.floor(diferencia/3600);
		if(horas<10)
			$("#cr_horas").html("0"+horas);
		else
			$("#cr_horas").html(horas);

		diferencia=diferencia-(3600*horas);
		minutos=Math.floor(diferencia/60);
		if(minutos<10)
			$("#cr_minutos").html("0"+minutos);
		else
			$("#cr_minutos").html(minutos);
		diferencia=diferencia-(60*minutos);
		if(diferencia<10)
			$("#cr_segundos").html("0"+Math.floor(diferencia));
		else
			$("#cr_segundos").html(Math.floor(diferencia));

		setTimeout(crono,1000)
		if(intermitente){
			$(".cr_puntos").css("opacity", 0);
			intermitente=false;
		}
		else{
			$(".cr_puntos").css("opacity", 1);
			intermitente=true;
		}
	}
	

</script>

			<div class="sombrasup">
				<img src="<?php bloginfo('template_url')?>/img/sombra-sup.png" alt="">
			</div>
			<div class="sombra">
			</div>
