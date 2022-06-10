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
define( 'DB_NAME', 'skater2_db' );

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
define( 'AUTH_KEY',         'T.kx-8-?>C/)kv(n~T$um/&SVwO0)VRvDT[^YsSo>!+!*2.We$,4DeuzkH^hlg~k' );
define( 'SECURE_AUTH_KEY',  'BCY&AVM%s:F{DN;n&L<yr_[-0eaIG-%=]lo|fF NoP3@;qz]H4I;qywybyB]AcsT' );
define( 'LOGGED_IN_KEY',    'QTEhdJPqTT:Y>~bz7ctV|ysWu-9bN@Zh#rVQ]<%Hqo~Az<q-/J`F2F8*Q%e?}x_-' );
define( 'NONCE_KEY',        '?Mh-g`p8J!>AY3vh7JiTttaHtxeC6},(&VaF3h9|*cf:)_gvLVFz/+{Q@;tM.E6d' );
define( 'AUTH_SALT',        '9M!B:aJxNU]jQLp 1h=8g3KeBAu`[mTEmX>H2]{=U=D8M%0b29h`mKfp!}2@^%1}' );
define( 'SECURE_AUTH_SALT', '=;7)<)T?e}^FS%DH1j:Bk*4+.|lQTt )pcJ#gk0p`z3<qmK-%i]uK?n+R|ap&8U-' );
define( 'LOGGED_IN_SALT',   'O]QS.@vz=c8ovQDm]*pdNfrT|1b:olUCf6Lv/:gzQ{iC#]>Eg7+}yoX[nx6HUVo-' );
define( 'NONCE_SALT',       'A.l,X~*f2FiGvnM]`h4}kECJg8lWS`l*]oA:K>-p&@<t%Sh[8>EY^n`:wuW<[/`o' );

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
