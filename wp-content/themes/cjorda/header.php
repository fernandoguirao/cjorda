<?php
/**
 * @package Bueninvento
 * @subpackage CJorda
 * @since Carmen Jorda
 */
?> 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<?php estilos();?>
		<?php javascripts();?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
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
	<body id="<?php echo $page;?>">
	<header>
		<div class="container" id="header">
			<?php get_crono();?>
		</div>
		<?php get_barra_nav();?>
	</header>
		<div class="container">