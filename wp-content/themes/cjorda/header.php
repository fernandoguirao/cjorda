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
		<?php javascripts();?>
		<?php estilos();?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php wp_head(); ?>

	</head>
	<header>
		<div class="container" id="header">
			<?php get_crono();?>
		</div>
		<?php get_barra_nav();?>
	</header>
	<body>
		<div class="container">