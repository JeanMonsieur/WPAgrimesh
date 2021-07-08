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
define('DB_NAME', "AgrimeshDevDB");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'q8md5irozgd7oyk64tocywardnbsroxln0ovu6zmmozbclmuzhwc5ezsrlvnx9po');
define('SECURE_AUTH_KEY',  'ueie5ilnpst9lxtjsnrvohsbwwvutimch4pnwwrpglr2r3jxit4mvvwgrrrbamix');
define('LOGGED_IN_KEY',    '6p1raligbwwpdtimizwl2hsyw0w1m5tqhuzpo7ncnxgdegca4rvd1cfsilxnywjo');
define('NONCE_KEY',        'sxqw5bj1e2qasilma07zid9xnhtis5lteggogaotidiabhmysmotpzsf649yhre7');
define('AUTH_SALT',        'qgrnfxwmiqsxgtinzhgdmlvldirg6nfjl2dfen1ph9fqqqpusuybenypkofotxgx');
define('SECURE_AUTH_SALT', 'fugwvvit577frf7ghi9fmyy4izeaos73ivmggkxjqgu8bvtgbvajhpjvfbqsqa70');
define('LOGGED_IN_SALT',   'k3kyns6jlxszkmuqganc8ayikodhdp0gsedjbdxltuj7lykx2leqzf8mj3glz0qi');
define('NONCE_SALT',       'xvb1wv1jfldgcuauxfbiwdvbmscnomdualixpbmgt0whiekhaqfqwjbzwjpv9dof');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jfr_';

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

define( 'WP_MEMORY_LIMIT', '128MB' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
