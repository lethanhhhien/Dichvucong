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
define('DB_NAME', 'Test');

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
define('AUTH_KEY',         's7;7o_t/^by~eQbN|HyG,>r<3X};XddCevM?l|.ErtiD+33lK0I}]M6Xh[ @wNK]');
define('SECURE_AUTH_KEY',  '2K^Weoibc<22zm1JAU@3Aje$@<sL Q?=M5>2s$W.m%<4T2Ie3~Avk@XTI0m=]?9?');
define('LOGGED_IN_KEY',    'CV]wlQ^CG/=v%zN8`_r.^kc4w]zp3;tQjC*+M<G32&0/7XY6H?n>*Y_#%Y+L$B6s');
define('NONCE_KEY',        '6tQ1aRd5Td(/X@Y46^nL#aG*+I>(-C&h>1]Lvn*l{{;[gL!ZG9.7S~AThy_u4d{W');
define('AUTH_SALT',        'u4q|4oKG*$L>e$/l!uuxQ?m,7h7oFq-dSNU,@HA?fOc}& /8>7:3J9*J/SOGtQmp');
define('SECURE_AUTH_SALT', 's(60KvyQFF_b?o#k786Q%Dts:zhg&g~1n K]++C)cf2pRTFzwqNDO`>/.C.Sq,lF');
define('LOGGED_IN_SALT',   'IPz/N**><Rl}BqXv$Zm4O%TOJvni3>Qwg5*g1>03sBA-cN`h;*TrIULdz>`|y%ZN');
define('NONCE_SALT',       '&iWknZ%sFz@RxRs8k%6r>`A(/rGK*Owx5*uOpqEvGd?,AlIMFg@&N<1h5GaMKW!E');

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
