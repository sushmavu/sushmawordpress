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
define( 'DB_NAME', 'sushma' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.csms5ltfbphe.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '`uF.IvP$2:J+%J{]&EjRU7o9r>YFF@X& 4@|Y}9QuZ^q2}+JNhz%cZTYw+8oD/w9');
define('SECURE_AUTH_KEY',  '!]Wrd`pL*(ow>#?uj]%r7MiV9E#||-)l0mO.l>v^qdwFfu^l|*k+&KG[-W<LXp;5');
define('LOGGED_IN_KEY',    '=_H+;GIK%Py4_,xtnwn@=|KwiYc+(W.#*$Xs4n~oN_KN0W!+Z2RIv|v+>|xA<[|Z');
define('NONCE_KEY',        'cq*giUmusCFb~dadzxmL)i^1^(Cw25>+;}X=|WLrB*+H<+V%;s;215FM7c0^9Djv');
define('AUTH_SALT',        'hhgUmoyssn+76vE`x7XkOpj%@@,&^C+/=t@~H{ze#d#k4;|1CAT6VzW]Ej^>p}>D');
define('SECURE_AUTH_SALT', '(8edUlg]13)nF}T<1Ll1He+@0t[]E#3c^;2fCImJ3cGs@EcmopFLkKN[n!9VSnMc');
define('LOGGED_IN_SALT',   '4<qBI)1X%g;vmF/9sOS+)-3g*x(<X)GbbIfIq`w)i334kw+)rQKS-_7%84|nL]A8');
define('NONCE_SALT',       'K# IFi]M}{5Jb[?Hgo9r#@Y*26_KT[ET)Qbo[:np/6g2g)T$Tmd@|<.Kwe&B6.dP');

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
