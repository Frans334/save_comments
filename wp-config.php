<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'posts' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'q]|pS#$>)>[t_q7QaYLTD]!D&nV4vd&x`c`wNPokwOSHT8+Uv2fQVar5hy~&fuU8' );
define( 'SECURE_AUTH_KEY',  '6m)XIBW)O.R=M/KJgX~!x(3T&%!NhJF6sGynckJIvx0G_t{Ymzj[.~HH(./{6;Pz' );
define( 'LOGGED_IN_KEY',    'YENq[Xt:.a:`GF(:r;d[xV=k|(TQj*{/F:16kkfT.a6;OGD#1Rhl.@ vpZb*J1ob' );
define( 'NONCE_KEY',        'd0-pHw6cV.q4M+kh`oJ|Xz`wP 1E9M5ISuVXmh$*?Ne[W$G:Aq1,&{<V#C@nx4`w' );
define( 'AUTH_SALT',        '.1Bg<B+^A-NjIy5GIP[0aMO@5NeC=s5O0a0+7ZbWIh_EwO-KBcopmAT~DfdnG57.' );
define( 'SECURE_AUTH_SALT', '&c}j m}WRZR7abZu;$`[l>/-_IM)K.B.))bMTm]$iMv>=C`NWpnef~syk,1>G>Qq' );
define( 'LOGGED_IN_SALT',   '=-JoaYZ~,w$YM#>C+YlW`75fjAIm3h,yTOqxu2L.DHU5^3:Xrvga8ez/lSSVZAUg' );
define( 'NONCE_SALT',       'BC/kta;):vAL@-@Mt~<x@/G/I{g!s$vj]Ia<7pAN9N)Yb4,D`=wh!22npEmc)pN[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
