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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressprojects_db' );

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
define( 'AUTH_KEY',         '$e9z)=4ERp+{5qi,:5a548lAOBhGjnz*T0Idd$CN>FtOev3 n}5@?/,w&ZFOyD^0' );
define( 'SECURE_AUTH_KEY',  '@(U.b<(A&%S0i::my?s67}#F&}WQko#Q`Vy_.vLoVd@c,^QwgY^@<fxsoV[8x.-t' );
define( 'LOGGED_IN_KEY',    'A(*r:$;7S8Hgxz.,=phS@tu!>tX9mN6I[g-_lEcmG&dX+,d77?D4%RWkiva!?O[2' );
define( 'NONCE_KEY',        'Am7u,pReJN{+45R4j@_;Q]+bErh_bm_]8/{gQj.3 ZvhTE:H2Su>6+7h:?LQ+psM' );
define( 'AUTH_SALT',        'Z[enjW=.WKRPr+w86ni,h>nQ[_JTCr0tQ<z;Uod @;H,@u)WE&;o*una6]0,:d)q' );
define( 'SECURE_AUTH_SALT', 'dONpdaSiTg+N<R~pt@an.MLjI.y[GB!@vG%QN#<eQ:>O.C,G~n=?J(351bQzDXzr' );
define( 'LOGGED_IN_SALT',   'QN.<tK/lx{SKoj_:Dun)Zn{8(vI:+6u?pQ<lb$+>Rfvtm5#js>[zA3aco;a./W%I' );
define( 'NONCE_SALT',       'z:1jCR_$5Xl>{SRXsoVdSp,b8]f4q`qZS=F0t Ur]{7#^}k41=ScmY8Hdp:n`iPv' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
