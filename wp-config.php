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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'francis');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c*rcxouk XQ+D5o.$=kt{^%+dhhM5v0zcCL^u`Q_/k&aJmWaD|Cj&DWsEbVHk.2|');
define('SECURE_AUTH_KEY',  '$Nw~9SNhZ5kfZDT<=N=%7A;2fxV1rseqMoy>pqwiF8bw.#NE=!(!,s4DZ=tkT*xr');
define('LOGGED_IN_KEY',    'Y![bJ6G|d/abR.dH`u|7KA7tP_JdKm/L;amU!M6/Y0[9SHpu.?6fw)zhy?9:3WaV');
define('NONCE_KEY',        'o$i>HF]XX9U`?8q}xN.gGBJl{$vFeGL,&]^vCX@z6_F]Bxz; pS3Bs|GvgA7-|6o');
define('AUTH_SALT',        ']e;4lKi3H.sE9U>4*Rr-]~?9~>EZvxO@QavoV*kCz_14.RB5xEM0_M:!]-f0VmQz');
define('SECURE_AUTH_SALT', '3Zk6jlLz}}j1?SKU|bU,#iX>YOk&`U;~!>#WYA/wGZK#W<N%$rd8GT2du?gW.U_|');
define('LOGGED_IN_SALT',   'd:ixQ(GK}X(JZA,q!Y3QiKFL1AAdJ_(>Tv^[^BqD7,&V;BbaiM)e`C:.lo5BMHMc');
define('NONCE_SALT',       'Hi8(mAl@Fj0UHf<~~J8rJ>?$nGzODp{^i`:;9][qmW1m`,Gv(g%X+  |6?ZF -tI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
