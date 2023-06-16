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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u966383008_y2VDX' );

/** Database username */
define( 'DB_USER', 'u966383008_3WcQT' );

/** Database password */
define( 'DB_PASSWORD', '9sMT7Lag3J' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'A`CY{rHXY!bAxt3] eeGZh 9*g_H@BK;(TOT0,yP3`pnWakt^`A5pn!vSHT[;x~C' );
define( 'SECURE_AUTH_KEY',   'm*IkUI#KQ4X}z9?h*=F;hx[%GifSv[e+1eB+6A$I-_EtObBHoDX1SGw>nccmC}:8' );
define( 'LOGGED_IN_KEY',     '^t<w:U:(`Hv?-O(JOpA0)*q `Y&Bnnp/QZ/*q*2c7Js1iPy(^f=L9fz<siTK$|$L' );
define( 'NONCE_KEY',         'ByFKy#J,/ZPRxFtVi!rZTH@rL.TH-v4kLsm,l7H:Jp70#J&GwpAG,C_7Ws:s0?p%' );
define( 'AUTH_SALT',         'oNC+E|oH(l^h0leJxxhsq~&y4OD,byQe]md[E6BZ(dRX.5)C2YyUXI(5y]gGPUT%' );
define( 'SECURE_AUTH_SALT',  '$S*CvC+k)eA#k{?%|/wB<)C4f0v|YE:qCR>rrSsr<hF)7%{g#:Q9$?[}kh:e@4eq' );
define( 'LOGGED_IN_SALT',    'vUz+nr9Bg.3%/^DQ]PgZ2j$>y9q!@2@$.U@IB_*21a%*Rv[V>:8}>IQI&A@S&zn{' );
define( 'NONCE_SALT',        '9[5$!{%o:/8,d(o&K+f *8wHM]<8tgMqYA=Db>lnFpT EZ59@&Hqji#]dfk*OYFL' );
define( 'WP_CACHE_KEY_SALT', ' VL8G*.]Q5lsB7@zEk?<?rFBh$yi^E^ukteK)UZ9[X2]EA{8P9`P.^ =5~wQ1wi7' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
