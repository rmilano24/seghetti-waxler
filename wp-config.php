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
define('DB_NAME', 'seghetti');

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
define('AUTH_KEY',         'I#6,KF20n%|t80MkNd%W ^/2[j5TQj`AvtrSebdG 5}7-,)nW=~rI-j,/!}?ih>k');
define('SECURE_AUTH_KEY',  '.Ja3y]%Cdbpv!j71Us5~z%z5F.wq;jIyp,sQ+Q4L`64I[]UNX*>as_ V>fs_7,!L');
define('LOGGED_IN_KEY',    'jVIE:`#/n5/k/,rzAEnmW05UT{CSF#wuny(w$WWz5wy|&<v^Dr$RUujD?Th0b@Jo');
define('NONCE_KEY',        'gTANcptbk+r7I6N@.xX}oi4ceicW`ZPtdP/{EOv3%`S~9m:jEN!iJ8j]:b_A6kb,');
define('AUTH_SALT',        'zMBt4a9Vjm~bY*oe%OiCrIsdd*i(NBEt*Qq%h[7/>p:;}tMEBz.}W1~z kyU6fIe');
define('SECURE_AUTH_SALT', '!bCo@,aP_+-4tG-ihbIwohLW4|Syt7Lo]7zc~jn>@l>MgLggb&F[1LoR{1)B;njE');
define('LOGGED_IN_SALT',   '|SqZzc73FXSxkGi#gP8r=/]=t2vR/Ck|!ddmNqcGa($`o;_I][[9~:?s={wvPQc&');
define('NONCE_SALT',       ';&w|8tr}~6l?O@&IKg`w$B)FpY!l-n=S-_0m4Z=1W]jP~a5{R {c&&v2_8ekI,M-');

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
