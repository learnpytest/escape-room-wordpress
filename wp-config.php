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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'vc~UmmNYwhhJ,k#gFS8PkrrO4MjNU GmycAf;VZkex||7u]_?pf4PED)LRZUrmmI' );
define( 'SECURE_AUTH_KEY',  ':0 kSE<YeFo=THREA.RTYaR!}`v~fB*Ml?6]R%kveI.rZ{esnwG$,Z @y7%6`I*<' );
define( 'LOGGED_IN_KEY',    'dG};w7hV?d+xMs-cQVDNrd{ADq::LxL A*##Wl.UJDqOtO9Q1m}AV:,h]aUiy/@!' );
define( 'NONCE_KEY',        'OCT*0Xze#chU{]kf{q7iW56//p$RG,Gwpe1jPOppVMaz BF<^|B$5q|F<[e,uBt)' );
define( 'AUTH_SALT',        'T>E66{z.W^e|x0hM<K^O|t1n^4WkE3QI :mplcn_*knC!#YvNU{PW/e/_o]9(/ B' );
define( 'SECURE_AUTH_SALT', 'kc~M|Z,yf5|:u<Y?ss|[rrO1]4uL-R2P(6ox6eDKn=W8IXRMuu/O1I~?d8]q >[w' );
define( 'LOGGED_IN_SALT',   'k%Z~GS%=my.g&{&N}.*xk:C,lJy:nQFHe,FwioUW:zFvy)Ow }7<J5.LK.6Pl|]8' );
define( 'NONCE_SALT',       '%yeBg?:W}kIjfQIVYjqHkNsU}1,b+g^2XXPL]Xnw#J|R*raV)Ek%2I]4aSPI,^Tf' );

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
