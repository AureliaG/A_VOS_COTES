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
define('DB_NAME', 'A_vos_cotes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'M^_3eu$nACWqrBD1qo4u,REVTvK%R:?e-gts)k7=Vv6XZb{ ,inzv6:+!~A>W5{`');
define('SECURE_AUTH_KEY',  'X{eAoH<ja(taQ:i=M4k=~Q1=8Gm@!Npo4OG)N>;{-o2>kkJPu)At8$7aCT[FsEyr');
define('LOGGED_IN_KEY',    'p7`}t|5)Yw(Cu?LUIFOfB^owezvi0E40XH& LJ?YinU6*Ac$d5@^}UsLqiB]ThbB');
define('NONCE_KEY',        'I^BZ9>}W+nTHrsq*,/=1bDnw{(?L-C7Z?m>Op@E&M67~(C&V7_ eXSo3C}&X?j(m');
define('AUTH_SALT',        'O)Am88m#xIV<pGg+6fR1(PDa?r*[6F.>M`2:i|KMZb-StDA5THfN%)Gk^|2]k9us');
define('SECURE_AUTH_SALT', 'ZN:5J 93C(,?KB58C7{-(P!c])hDRRQM T zZ+]p(EVrDZ~;z#6nQh ;iwR}l;{l');
define('LOGGED_IN_SALT',   '0(/{JSbWb@C!g|v:Bj3(VM)t{$uToWZ)srr{XBojlL%x&-(L|^}[.Qj1v?izqe`u');
define('NONCE_SALT',       'N4)9}UY]rd@}}UimdrrHc>%iw*s#OSGF~@}f(hXr9I1.|D{@)0ONr`Tzr!L a[5=');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
