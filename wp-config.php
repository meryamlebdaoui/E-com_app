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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-comm' );

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
define( 'AUTH_KEY',         '~`F{t5:*]S@k8dD^$#Z#NKJiq_xaUuSe {RzvtNG]M`XaqH.{_YIXE[,]:Ew4C),' );
define( 'SECURE_AUTH_KEY',  'XnnuR8|v)^4={Q?-V[2_}>w2L5-Y5uaz>-@k{849W#]tR,CBL.6#:S7}V_0+yVHh' );
define( 'LOGGED_IN_KEY',    'c}B=kLdbY7t6q3y1L$13tNT6jg&nF9D92#:{yhj8@ul}B<L-f>.zMg^)*r6:(}ra' );
define( 'NONCE_KEY',        '2b5$?z^M%xK`9pVPT%(JwCNV}D[4-r@ou14R,vqIW^AnE~k{Km+*b@h3i<)&X W,' );
define( 'AUTH_SALT',        'Ww[pt22~=%l:usf_7xm56,eVH__86hMw3<+Mb2Z3`=I[Ro_^37i^z3QP^z=x@aG7' );
define( 'SECURE_AUTH_SALT', 'f]!E.#Lil[(j+=1sH!!|!M}z9Q(3.Fgd92G8m4HBM~tb6.aR@s_;pN-LF/H#%b0`' );
define( 'LOGGED_IN_SALT',   '= F6>4.RP^0aJQ=V])ex(Ep6}_LOD_*E> 5(S#A4y>Bh>dO<Us,hdo`4%pHI*eVl' );
define( 'NONCE_SALT',       'z}>E!s`=4,u*MkNyPBE`9wN&~bZP!-oEB?m)rFKbqA<]F}Walg*r4f(U bA+s#!]' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
