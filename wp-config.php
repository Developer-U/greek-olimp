<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define('WPCACHEHOME', '/home/c/cr14463/greekolimp/public_html/wp-content/plugins/wp-super-cache/');
define('DB_NAME', "cr14463_greekolimp");

/** Database username */
define('DB_USER', "cr14463_greekolimp");

/** Database password */
define('DB_PASSWORD', "7mw?29z8G");

/** Database hostname */
define('DB_HOST', "localhost");

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '$U6:SVV65Z0]WZcK;r)9n%:iYz+:3/<xyj*QCf@?20<nc|Baqx,:mleu_q4y( en');
define('SECURE_AUTH_KEY', 'h;+5g #.K|:z.(Xsx31pc@Z<#A?H+g[aBuLMt_Rq$*!1lZ20A*Oy}V0Z=uG|j5/o');
define('LOGGED_IN_KEY', '^oSe|T:<!H=8%rw4a7xtjC]>{3AE&61W]RQ?9Q(e/:)6xcp0fm!ma$W9#pLEYGRF');
define('NONCE_KEY', '=juFNsBl(~9FCd7IVe*QlT?k< |&rdUK(Q6VXfvr0zsaWoN9d>Pj8ST,>|5D(RWs');
define('AUTH_SALT', '63`MP+=>yo6sZ 9[XnLs{_5{E^:1%FtQz]F+pgwMuD]Q=TI$lRh$kT/cj5!t`{3O');
define('SECURE_AUTH_SALT', 'Vlqt/|2C]&i*NxLPG%^&qmK^G92]f|`Au -(#K-2#/4?Co C;t&kzrT)Z%=2i=/b');
define('LOGGED_IN_SALT', 'gbaoxTrW6-_Cj;b,9UiyHr87(a9VT>< oXz3iT~l)#*+Ts.4uhal;w6sx%mj7S;4');
define('NONCE_SALT', 'dVbf:+=7{,(C~?U6u8)o&}gi[!#F@)4.<<x}<YCKYM4MyZMHq;@,[ilT!HrE2_n;');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
