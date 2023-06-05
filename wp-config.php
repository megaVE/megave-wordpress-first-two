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
define( 'DB_NAME', 'mamp_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'sY<06MYR+?A[rPMy=9?|vo11w#A`AfvbM!@U((3GRcZ(K:C,nX#ho|[F-?-7XC~b' );
define( 'SECURE_AUTH_KEY',  '31C*}D(@xsZ<1 B@_/c*x+sC,[K4I1lkxd7.M%0;:$eMj#nrbm@mUt`>0a;B$A+F' );
define( 'LOGGED_IN_KEY',    'd&cM OB}d5N_pxMgac?zhSGqiKb^k*=nV|pKm-90cUJia+)bP}/@equ/q{AD45B5' );
define( 'NONCE_KEY',        '*hc}[G/gIdcSM9!wSNFIT;9W?bQ=MBm^1txS~wBw`u?I%#8c6eA0=8f%~>3)6kxR' );
define( 'AUTH_SALT',        'qDu8ui3i]F,/%a>w+x2JB&bZn.>MM&5BdDCp]L#F~k]  P%OL@tzsl`Kzm #.GDP' );
define( 'SECURE_AUTH_SALT', '<0oVDPunHsvk(I1*}w-5 %d~[@BObL+QLMr<l<mb?z$bkt}9B[q@$%]+RJztvq47' );
define( 'LOGGED_IN_SALT',   'Y41:WE*STq4iK|KHfx] C86YU8/unJ*.z]<ORAScL0z:%e9 xHOj8Z.hfh7GMz)s' );
define( 'NONCE_SALT',       '%(bwT^Oz$mFpK1{tY?i%g8En2(|U7Y[ q-_g<=:p*2>03bN4lu]r((e5H[iAphU(' );

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
