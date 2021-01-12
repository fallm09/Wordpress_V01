<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simplon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '([6Sy)DS*W7csB/ML^3XF>7NBC  @h3;G%4gX#]t>H(hAGp{3,sZtl]AmmP-&DBe' );
define( 'SECURE_AUTH_KEY',  '6R=>5n^FaYzQ<*7x>0VP40D:337rG?[GwfSzZV,O93BvLT19MR/4PUOxafb#pf{(' );
define( 'LOGGED_IN_KEY',    'tc]I5Zo:},3oFhQFaa=Tn25>(fKtryMZ Z1;|s$:v_z<2GTfRg<)$^2>&:e&Oo;y' );
define( 'NONCE_KEY',        '[bI-;?N*ReMHpyQSC!& f:i?=7gy/-T5#I_W38:0j]|WknIc(&:H:H:mn6I}D|UV' );
define( 'AUTH_SALT',        '<GR7ASn|H{umRD?x_FxmWgfnb-gUQ8f76x|irIcOb>Y[~6L4rUGRcR|o:CN[ki5>' );
define( 'SECURE_AUTH_SALT', '$wx#8rqE+^qZrgq6)y_$uwC;_T;!Ty[{9dqg/!#E~}FMo.;s{wr#-?(s5[Fz=|BR' );
define( 'LOGGED_IN_SALT',   '1;pA=%&w0s`,%9}I;fSABm6XM>c?R3dl$L&e^uRlB|</osXD1uHL%&a[HP|%/h[l' );
define( 'NONCE_SALT',       '~)ptd=)K7gQr~c|Wr{lMsb_:;UR:hb;~;rR-gJNU*#mhv:9::@w iq36LRu1Cu9{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
