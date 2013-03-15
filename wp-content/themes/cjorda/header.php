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
	<header>
		<div class="container" id="header">
			<div class="contenedor_crono">
			</div>
		</div>
		<div class="barra">
		</div>
	</header>
	<body>
		<div class="container">