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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '_e/LRCNN<:O>Z9V3-miIjN{zlwc!8f/Wia6rErO ak>;4yESS`U1;O@_F(3gRk7-' );
define( 'SECURE_AUTH_KEY',  'Y/QDsIE+]D7_aJ+?Zp$p^Ly<8u7^bV`OFuV$d%[kIV..Y6AtHZ59gP8Tg:6.Lk`h' );
define( 'LOGGED_IN_KEY',    '<_h$8&RXwH(s48M>E;0 ]bFl<[,IYAkR1}Q8<(2eSH[M|N]A=NK ^=fkclb)WdD1' );
define( 'NONCE_KEY',        'c3:Y-D?8]T+Gp(P|HjR52x+(uHyejaKO|bWc<ibA4`$^-IP+V4rKc(7HMO{0c2(M' );
define( 'AUTH_SALT',        'dQA1woo8Q=^gliDY^owbWA/hO5LAN~x74H.jgQSHnBI0&>&~~=T]EpE2/TBfdsuo' );
define( 'SECURE_AUTH_SALT', '8{98@5qipCg~qeg*XBBhube=@~ nI#zjLe_tGgp5-@HC7E&M_@*s&{FT>v4XC{wV' );
define( 'LOGGED_IN_SALT',   'zS|7$d2QO[KP!,Y)?IC*;4,n8?6i<4/W?.zU*nz2$zwI8jVgz}||9VM?l2)<wpGu' );
define( 'NONCE_SALT',       ' xfcolV_Sv3aG&=qe{[z5XeLItsC2$1rc}+)3B?1Y8a9;EfWU5?VM2.ScAzP&WeG' );

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
