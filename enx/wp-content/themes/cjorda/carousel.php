<script src="<?php bloginfo('template_url');?>/js/carrousel.js"></script>


<?php
	$args = array(
		'tag'      => 'slide',
		'showposts' => 4
	);
	query_posts( $args );
	$img_slide=array();
	$link_slide=array();
	$titulo_slide=array();
	$i=0;
	while ( have_posts() ) : the_post(); 
		$img_slide[$i]=get_field("slideimagen");
		$link_slide[$i]=get_permalink();
		$titulo_slide[$i]=get_the_title();
		$i++;
	endwhile;
	wp_reset_query(); 
?>



<div id="myCarousel" class="carousel slide" style="max-heigh=300px; margin-bottom:0px;">
	<div class="carousel-indicators">
		<a class="boton_carousel" href="#myCarousel" data-slide-to="0">
	    	<div class="boton_slide" style="background:#3a739c;">
	    	</div>
	    </a>
		<a class="boton_carousel" href="#myCarousel" data-slide-to="1">
	    	<div class="boton_slide" style="background:#3a739c;">
	    	</div>
	    </a>
		<a class="boton_carousel" href="#myCarousel" data-slide-to="2">
	    	<div class="boton_slide" style="background:#3a739c;">
	    	</div>
	    </a>
	    <a class="boton_carousel" href="#myCarousel" data-slide-to="3">
	    	<div class="boton_slide" style="background:#3a739c;">
	    	</div>
	    </a>
    </div>
    <div class="carousel-inner">
    	<div class="item active" >
        	<img src="<?php echo $img_slide[0];?>" alt="">
        	<div class="contenedor_titular">
	        	<a href="<?php echo $link_slide[0];?>" class="titulink">
	        	  <h1 class="titular_slide">
	        		<span>
	        			<?php echo $titulo_slide[0];?>
	        		</span>
	        	</h1>
	        	</a>
	        	<a href="<?php echo $link_slide[0];?>" class="btn_leer_mas">
		        	<div class="lbl_leer_mas">
		        		<span>
		        			LEER MÁS
		        		</span>
		        	</div>
		        	<div class="lbl_plus">
		        		<span>
		        			+
		        		</span>
		        	</div>
	        	</a>
        	</div>
	    </div>
    	<div class="item" >
        	<img src="<?php echo $img_slide[1];?>" alt="">
        	<div class="contenedor_titular">
	        	<a href="<?php echo $link_slide[1];?>" class="titulink">
	        	<h1 class="titular_slide">
	        		<span>
	        			<?php echo $titulo_slide[1];?>
	        		</span>
	        	</h1>
	        	</a>
	        	<a href="<?php echo $link_slide[1];?>" class="btn_leer_mas">
		        	<div class="lbl_leer_mas">
		        		<span>
		        			READ MORE
		        		</span>
		        	</div>
		        	<div class="lbl_plus">
		        		<span>
		        			+
		        		</span>
		        	</div>
	        	</a>
        	</div>
	    </div>
    	<div class="item" >
        	<img src="<?php echo $img_slide[2];?>" alt="">
        	<div class="contenedor_titular">
        	<a href="<?php echo $link_slide[2];?>" class="titulink">
	        	<h1 class="titular_slide">
	        		<span>
	        			<?php echo $titulo_slide[2];?>
	        		</span>
	        	</h1>
        	</a>
	        	<a href="<?php echo $link_slide[2];?>" class="btn_leer_mas">
		        	<div class="lbl_leer_mas">
		        		<span>
		        			READ MORE
		        		</span>
		        	</div>
		        	<div class="lbl_plus">
		        		<span>
		        			+
		        		</span>
		        	</div>
	        	</a>
        	</div>
	    </div>
    	<div class="item" >
        	<img src="<?php echo $img_slide[3];?>" alt="">
        	<div class="contenedor_titular">
        	<a href="<?php echo $link_slide[3];?>" class="titulink">
	        	<h1 class="titular_slide">
	        		<span>
	        			<?php echo $titulo_slide[3];?>
	        		</span>
	        	</h1>
        	</a>
	        	<a href="<?php echo $link_slide[3];?>" class="btn_leer_mas">
		        	<div class="lbl_leer_mas">
		        		<span>
		        			READ MORE
		        		</span>
		        	</div>
		        	<div class="lbl_plus">
		        		<span>
		        			+
		        		</span>
		        	</div>
	        	</a>
        	</div>
	    </div>
	
</div>