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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         ']0MvR&1/][,6}-#(E`xseo57~4Js3h+i_{y,a.Y5(Uhq;{5erbW~Lp0^l7 &<Uiq');
define('SECURE_AUTH_KEY',  'tts,htDVh-o`F[*Zo!ekw%mIjlaBY-o KAb:a]SScPLAEz](9lK!pomr29S:Xp;1');
define('LOGGED_IN_KEY',    '(v{7T!B_i,GF-p%b,h@m-R},tBRpL=<q-,tje/E5G<n)gNnWyW:t+A<F$w5P)Bv)');
define('NONCE_KEY',        'B8-so(;7`.Ew8vC /+x)H*]Be71m a+npUSWPj*=L6M5Ik~vr*i@{eIfRa>.Sb2*');
define('AUTH_SALT',        '%u{[[$HKlc+Ab.g<L=eMEngk6z=%hV*.y.sLH;_f|08v;uQ~)ddWo*n[!;udbAFx');
define('SECURE_AUTH_SALT', '4-+K!eC^l;^@Dt7Ypv(-F9i7;FUd22q0(JQ&AUJyQp<ixyvDr:oQVO@XzCSnWJgL');
define('LOGGED_IN_SALT',   '=jwTt-b*/3G(|+0J2;cUFk?mUSgUbL_N,6OR<=!`[kk0DpdUuow(rfo@r7Z*S6(o');
define('NONCE_SALT',       '4:%J8ZHj`fh/vih^V#PV7kreWji{N*=b3pLLv- #_>YEt|I6P3YJS!W]3%WO?@t<');

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
