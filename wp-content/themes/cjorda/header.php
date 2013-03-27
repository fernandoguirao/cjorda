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
	<body>
	<header>
		<div class="container" id="header">
			<?php get_crono();?>
		</div>
		<?php get_barra_nav();?>
	</header>
		<div class="container">