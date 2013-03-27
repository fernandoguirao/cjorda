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
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsivo.css">
    <?php
}

function javascripts(){
	?>
		<script src="<?php bloginfo('template_url');?>/js/jquery-1.9.1.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/main.js"></script>

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

function mandar_email(){
	$invalido=0;
	$cadena="";
	if(isset($_POST["mandado"])){
		if($_POST["acepta"]!="Yes"){
			$cadena.="Tienes que aceptar nuestra patata política de confidencialidad<br>";
			$invalido=1;
		}
		if($_POST["nombre"]==""){
			$cadena.="Tienes que introducir tu nombre<br>";
			$invalido=1;
		}
		if($_POST["email"]==""){
			$cadena.="Tienes que introducir tu email<br>";
			$invalido=1;
		}
		if($_POST["asunto"]==""){
			$cadena.="Tienes que introducir un asunto<br>";
			$invalido=1;
		}
		if($_POST["contenido"]==""){
			$cadena.="Tienes que introducir el contenido<br>";
			$invalido=1;
		}
		if($invalido==0){
			$cuerpo="";
			$cuerpo.="Nombre: ".$_POST["nombre"]."\n";
			$cuerpo.="Email: ".$_POST["email"]."\n";
			$cuerpo.="Mensaje: ".$_POST["contenido"]."\n";
			if(mail(get_option('admin_email'),$_POST["asunto"],$cuerpo))
				$cadena="Email mandado<br>";
			else
				$cadena="Ha ocurrido un error, intentalo de nuevo más tarde<br>";
		}
		echo $cadena;
	}
}

?>