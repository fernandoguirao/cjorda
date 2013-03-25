<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'cjorda');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '(WFk;~l!KlB!X6a< [S`--RV7K:]`/9A<lfD+4cl(?y9D3o`M||I0=+8z^ml|..J'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'P:|oF6O:D:Tg:J$f>WTyLlF0Rwl<>OFYz,ow-v@&yQhp:NKSv!<.W8NO0(Y56 |='); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'z-cC| //1mbd/f#b~n^k5sb8 IJ(JU^4s1|Id.>FBp+`WHu;Z#+=C{}~;x5**}RH'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'ny>i}f}`+^y0kTGOFuI.~tWJzI%NG{-~wl{ V[?,a,dUs}|!c)j]tD@dY?A0n:He'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'ilVaEY1z<;+4hx3%m|Rz,=y+9Y,T-%-%S-Rdb(&rOi oA4INAN#zC0#60mW{3?M,'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'yazjiOFm{q9F[A-zJ^HX`- -H5pJPJI$yDw=+K}:8x1=o|K3yuGzEVzLWN|d>n/9'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '.*Iel-XIq@]Q[.|H}!evdt_sD-C}7W8q|jtfZ6ul+LiSXaW8:JaSoYwYkO-83uf!'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'kfb=Kt1HW,jGzT/7$~=!8N{Z |MmU3Q/x8i<dIU]</jK09#|t/B0aS<v-}xfC|VU'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('CONCATENATE_SCRIPTS', false);
require_once(ABSPATH . 'wp-settings.php');

