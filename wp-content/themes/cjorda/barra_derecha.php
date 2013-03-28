<div class="span4 hidden-phone" id="sidebar">

<?php
	$args = array(
		'tag'      => 'favorita',
		'showposts' => 1
	);
	query_posts( $args );
	while ( have_posts() ) : the_post(); ?>
	<a href="<?php the_permalink();?>">
		<div class="noticia_destacada" style="background-image:url(<?php the_field("slideimagen");?>);background-size:141% auto;">
				<p class="ultimahora">Reportaje a fondo</p><br><p style="margin-top: -1px;"><?php the_title();?></p>
		</div>
	</a>
	<?php endwhile;?>
	<?php wp_reset_query(); ?>

	<div class="buscador">
		
		<?php get_buscador(); ?>

	</div>
	
	<?php
		include_once(ABSPATH . WPINC . '/feed.php');
		$rss = fetch_feed('https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=CarmenJorda');
		$maxitems = $rss->get_item_quantity(7);
		$rss_items = $rss->get_items(0, $maxitems);
	?>
 
	<ul>
		<?php
		foreach ( $rss_items as $item ) : ?>
			<a href="<?php echo $item->get_permalink();?>">
				<div class="entrada_derecha">
					<div class="contenedor_icono"><img src="<?php bloginfo("template_url");?>/img/twitter.png"></div>
					<div class="conte">
						<p><?php echo substr($item->get_title(), 12)?></p>
						<p class="lafecha">Publicado el <?php echo $item->get_date('d\.m\.Y');?></p>
					</div>
				</div>
			</a>		
		<?php endforeach; ?>
	</ul>

</div>