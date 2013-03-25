<?php
/**
 * @package Bueninvento
 * @subpackage CJorda
 * @since Carmen Jorda
 */

function estilos(){
    ?>
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/fonts.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/carousel.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/crono.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/barra_navegacion.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/noticias_box.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/barra_derecha.css">
    <?php
}

function javascripts(){
	?>
		<script src="<?php bloginfo('template_url');?>/js/jquery-1.9.1.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	<?php
}
function get_carousel(){
	require 'carousel.php';
}

function get_barra_nav(){
	require 'barra_navegacion.php';
}
function get_noticias_box(){
	require 'noticias_box.php';
}

function get_barraderecha(){
	require 'barra_derecha.php';
}

function get_crono(){
	require 'crono.php';
}
?>