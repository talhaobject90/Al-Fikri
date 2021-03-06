<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
 

define('DB_NAME', 'al');
 

/** MySQL database username */
define('DB_USER', 'adminmKr4gQ8');

/** MySQL database password */
define('DB_PASSWORD', 'tZgcgye6vE7b');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3^r{pEg#:=.crr`6sm~+E0xw|D|oTYHOiv7/g|o&La}PMip8U5Y6w+Cu|,rC%2De');
define('SECURE_AUTH_KEY',  '$/v2S-KJS<Q%^,tkeyxgc]c,tEi-:;A*31@.n$at>5jsqbq78k|eYAPL T*OXP|-');
define('LOGGED_IN_KEY',    ':+@` ILI,7T2]rLWaMNr3U#{f]am E$eZLthw3z(c[mlRtqxNw% z&!8RY4.rxOp');
define('NONCE_KEY',        'Q^2fn0I{~oMD9|m-!c^Rn!9[Z(y10nO45$9N;qDU8]E)%,^qBtEtUS?|R;zMH?Gi');
define('AUTH_SALT',        '7{THi,I*EHNTxLsC|ar#yMWno>S=Rq0]]a9k^AdHFk$@`M,LD+O)QY|kDuw/Jx,3');
define('SECURE_AUTH_SALT', 'Z|Tk{I[gT#ECYA3j~8-SZ]C2m5JOZly?.QWR,]GnyfPU.Ra Qd(wfKUP[6]K4gt/');
define('LOGGED_IN_SALT',   'a;OSpp0Qr+c:tQQR~Z?et=|`?o,iJbp^+2k_`@<M&P6F[*ry7,k#pZuua,`7%J?7');
define('NONCE_SALT',       'xP^*)fK-/hG>ULK0M~Q 2%!|fv)hJ>|OKF-l#sOt!g8%_w2+)7vMrW3F4h=k8.HP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
