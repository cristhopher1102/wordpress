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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!kMF#My1izX:Qb&:7G!IxS=9K/?$~NWDxGY+W`mdw+@OptrFa-.e73dz{pZq-(dX' );
define( 'SECURE_AUTH_KEY',  '7D! Mbk~2|b<os^s-u[3@?^.{b.`K*OHjuqMMr/1pLMGJW:gK[,/oX-U7_?t#H[-' );
define( 'LOGGED_IN_KEY',    '2WCo,GytEBO2r7J=>bLf Y!:5|Xa=wIX$Wp,zH6AKo0eOGrn(lAz6;E|qJBD?M H' );
define( 'NONCE_KEY',        '?,NJh_7OFp;V]MOZ)a~/b]8G$A3JED(dJ_pB-6(KVabZ]SmT=E^d(O$jD8eRgOph' );
define( 'AUTH_SALT',        's{x=k8 uH~`:ye6qXt) IOz~;^/T0K]ArZoho9L?.rx{?f95m?6M_9=F=+/BWr<e' );
define( 'SECURE_AUTH_SALT', 'ri2kS/`U/EB?`Uvs6@;P$;z:Jh.wAMV9^7zC!oh]b8;%_PgV@pm0nAN/|Z-f4b;x' );
define( 'LOGGED_IN_SALT',   '8+[h)L[?$~XK](kCB/mK!A66js4m% :f94ZoF*4. %>IIoJr~;5kO *=*u5<v%Ex' );
define( 'NONCE_SALT',       '.k&i?Q6I|)gq xkbi.?:_uQ#r3}2C;Mn%r#NW#3pKL|#oc42zO!G0t9&m:C(UK-S' );

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
