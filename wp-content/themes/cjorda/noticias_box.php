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
				<h1><?php echo get_the_date('d\.m\.Y'); ?></h1>
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
