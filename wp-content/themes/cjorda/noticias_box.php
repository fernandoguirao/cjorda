<div class="noticias_box">

	<?php
	
		$args = array(
			'tag'      => 'destacada',
			'showposts' => 4
		);
		query_posts( $args );
		$i=0;
		while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?> ">
			<div class="cuadro_noticia <?php if($i%2==0)echo 'cuadro_noticia_izquierda'; else echo 'cuadro_noticia_derecha';?>">
				<div class="mascar" style="overflow:hidden;width:80px;height:62px;float:left;float:left; margin-right:10px;">
					<img src="<?php the_field("imagen");?>" style="margin-top:5px;min-width:80px;min-height:40px;">
				</div>
				<h1><?php $idioma = get_bloginfo('language'); if ($idioma == 'es-ES') { echo get_the_date('d\.m\.Y'); } else { echo get_the_date('m\.d\.Y'); } ?></h1>
				<p><?php the_title()?></p>
			</div>
			</a>
			<?php if($i==1):?>
				<div class="linea_noticias"></div>
			<?php endif;?>
			<?php $i++;?>
		<?php endwhile;?>
		<?php wp_reset_query(); ?>

</div>
