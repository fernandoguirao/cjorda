<?php
/**
 * @package Bueninvento
 * @subpackage CJorda
 * @since Carmen Jorda
 */
 
 load_theme_textdomain('cjorda');

function estilos(){
    ?>
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/fonts.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/style.css">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/carousel.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/crono.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/barra_navegacion.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/noticias_box.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/barra_derecha.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/footer.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/paginas.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/nuevasnoticias.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/calendario.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/galeria.less">
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/preloader.less">
    	<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ie.css" />
		<![endif]-->
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ie8.css" />
		<![endif]-->
		<!--[if lt IE 8]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ie7.css" />
		<![endif]-->
    	<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/responsivo.less">
    <?php
}



function javascripts(){
	?>
		<script src="<?php bloginfo('template_url');?>/js/jquery-1.9.1.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/less.js"></script>

	<?php
}

function get_scripts_footer() {
?>

        <script src="<?php bloginfo('template_url');?>/js/main.js"></script>

<?php

}

function get_carousel(){
	if(is_home())
		require 'carousel.php';
	else
		require 'banner.php';
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
			$cadena.="You must accept our privacy police.<br>";
			$invalido=1;
		}
		if($_POST["nombre"]==""){
			$cadena.="You must introduce your name.<br>";
			$invalido=1;
		}
		if($_POST["email"]==""){
			$cadena.="You must introduce your email<br>";
			$invalido=1;
		}
		if($_POST["asunto"]==""){
			$cadena.="You must introduce your subject<br>";
			$invalido=1;
		}
		if($_POST["contenido"]==""){
			$cadena.="You must introduce your message<br>";
			$invalido=1;
		}
		if($invalido==0){
			$cuerpo="";
			$cuerpo.="Nombre: ".$_POST["nombre"]."\n";
			$cuerpo.="Email: ".$_POST["email"]."\n";
			$cuerpo.="Mensaje: ".$_POST["contenido"]."\n";
			if(mail(get_option('admin_email'),$_POST["asunto"],$cuerpo))
				$cadena="Email sent<br>";
			else
				$cadena="There was a problem, try sending us your message again, please.<br>";
		}
		echo $cadena;
	}
}

function get_buscador() {
?>
	<?php $idioma = get_bloginfo('language');	?>
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	    <img src="<?php bloginfo("template_url");?>/img/lupa.png">
	    <input type="text" placeholder="<?php if ($idioma == 'es-ES') { ?>BUSCAR...<?php } else { ?>SEARCH...<?php } ?>" class="inp_buscar" value="" name="s" id="s" />
    </form><?
}

function compartir(){
?>				
	<div class="span5 btn_compartir">
		<a href="http://www.facebook.com/sharer.php?
		s=100
		&p[url]=<?php the_permalink();?>
		&p[title]=<?php the_title(); ?>
		&p[summary]=<?php echo get_the_excerpt(); ?>"  
		target="_blank">
		<div class="ico-face">
		</div>
		</a>
		<a href="https://twitter.com/share?url=<?php echo the_permalink();?>&text=<?php echo the_permalink();?> <?php the_title();?>&via=CarmenJorda&lang=es" target="_blank">
			<div class="ico-twit">
			</div>
		</a>
		<span>
			Compartir
		</span>
	</div>


<?php
}



?>