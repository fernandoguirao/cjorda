<?php
/**
 * @package Bueninvento
 * @subpackage CJorda
 * @since Carmen Jorda
 */
?> 

<!DOCTYPE html>
	<!--[if lt IE 7]>	<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>	<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>	<html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!-->	<html class="no-js" <?php if ($idioma == 'es-ES') { ?>lang="es"<?php } else { ?>lang="en"<?php } ?>> <!--<![endif]-->

	<!-- 0. HEAD -->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="">
		<!-- <meta name="viewport" content="width=device-width"> -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		
		<?php estilos();?>
		<?php javascripts();?>
		<?php wp_head(); ?>
	</head>
	<?php 
		if(is_home())
			$page="home";
		else if(is_page("circuitos"))
			$page="circuitos";
		else if(is_page("galeria"))
			$page="galeria";
		else if(is_page("about-me"))
			$page="aboutme";
		else if(is_page("partners"))
			$page="partners";
		else if(is_page("calendario"))
			$page="calendario";
		else if(is_page("contacto"))
			$page="contacto";
		else
			$page="otra";
	?>
	<?php// if(is_home()):?>
	<body id="<?php echo $page;?>" onload="hide_preloader()">
	
		<div id="preloader">
			<div class="datospreloader">
				<p><?php _e("Loading, please wait", "cjorda"); ?></p>
				<img src="<?php bloginfo("template_url");?>/img/mascara.png" alt="" id="mascarapreloader">
				<img src="<?php bloginfo("template_url");?>/img/rpm.gif" id="preloader_image" >
				<img src="<?php bloginfo("template_url");?>/img/logo.png" id="prelogo" >
			</div>
		</div> 
	<?php //else:?>
	<?php// endif;?>

	<header>
		<div class="container" id="header">
		      <div id="logo">
		          <div id="ipadlogo">
    		      <img src="<?php bloginfo("template_url");?>/img/logo.png" alt="">
		          </div>
		      </div>
			<?php get_crono();?>
		</div>
		<?php get_barra_nav();?>
	</header>
		<div class="container sconta">