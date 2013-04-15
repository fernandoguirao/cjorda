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
define('AUTH_KEY', '=I4zN&,@4#S04/ha+Wm_POhkl4`CD#FDAC~:~iiLQp4z#3doD,a0D@,p&|v^4%N_'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'j]}L**<N$R!1|[O[%PCxcL%OA`}7|_JzGFO6?LzHz>G*!~L[<C, aoa!QHZB6%sc'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'xCh1,;c][^us(BCn3/(UK4h|>a.LL^(dl?Vz+ A1-YBN%ey/1g4vzwg~$=>92&38'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '(+TY:Xcoi,lw8dY-AQ}tGri/njC8tSG_*ArIzLx]{4^DG0~}?B)oPik0|R`WA`K+'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'liloh=<iG]RE8=+%Af/H.(@[TKE-#SlZ|?[ q]5wKdj[<Y<NDYfD90!x!XUs2-#N'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'g}J;xAXwgdaZKyWoA2iw=}vy<-@l!->HH![|^R@4<#2kG^XKTogK5td|n.~xL]n<'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'fU%n|)*v#.CkN=fRLH>;gePuR,]_Te7wx$cK66s%SFKv2jc_H#aE:U4:Tj.b^zl{'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'vGI6;{f*<`3;f5*u01v(F8tpk,6c,jjh4cFIf:y^yY,~!$v2<2YN&wKe[Td-Liu+'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_en_';

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
require_once(ABSPATH . 'wp-settings.php');

