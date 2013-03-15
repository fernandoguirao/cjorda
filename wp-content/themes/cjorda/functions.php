<?php
/**
 * @package Bueninvento
 * @subpackage CJorda
 * @since Carmen Jorda
 */

function estilos(){
    ?>
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/carousel.css">

    	
    <?php
}

function javascripts(){
	?>
		<script src="<?php bloginfo('template_url');?>/js/jquery-1.9.1.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	<?php
}
function get_carrousel(){
	require 'carrousel.php';
}
?>