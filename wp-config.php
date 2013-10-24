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
define('DB_NAME', 'theme1318');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Carlos01');

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
define('AUTH_KEY', 'Yf*,^>[<CAsaI3/&J?A?ljgTj5WtTX8Y!^md|}WXks96Bh>ELrfI+%pg|%*W>I-.'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '6b|R@q[sE5Q~)vw.Ok^f#/XX/_ra1NZ%mtv&A=kz?nJfi-KMLS9687[AfX#|6w-A'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'tpI(?Vq5;e]oU#9M53@$1oQq*[tz05:0qA G#:>v,nh`;a^!y<Z3A5a[fxRM>kkm'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '8c(,j)x_d AlOhgFQ3A@>ercEXa-Cq0Z3ot97RW1m]/%h,[uK-r.U[-QVFm2eh;V'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'CI_$2>bUO*PSUrjdZHx7!_aWD?rscFpbICRFJ$*oGNC7|TT<9%F=d|Dk;|Neg3$-'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '`sI $:v!lcRRD9ZMO{v$i|aIQyWI#q+Lp:d*xMUmL<}z1U&9Az4mA&M]Ls6L#KJy'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'JE=-^,`58;D#2Vyk%nMMAG}oHuk+$[D:KKL-v72Ss_{MJ58|zeC_~>Y0!{itTl@/'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'Re7#f[+}%nDGRO!|Pr~)7LWr1OuIIFlqgTs~-3{fKddh2r.v-teqPs3{F~+{pj3D'); // Cambia esto por tu frase aleatoria.

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
require_once(ABSPATH . 'wp-settings.php');


