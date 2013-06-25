<?php

define('WP_CACHE', true);

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



	define('DB_NAME', 'new-cpi');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
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
define('AUTH_KEY',         '9D;_s8_dx`:%CW.zsU>*#di)7-Qncq+gCJj+~0+:Nye()34Y[?l0;MO:LY1q(%D?');
define('SECURE_AUTH_KEY',  'AmU;$I5YVF]^[ps`s0qbjKlEYid^lC-W8[!A7`xg~Rf:;&en?Y rKqIW`fGzbVy_');
define('LOGGED_IN_KEY',    'Tw$X`Xc}%`B|X/J< W1k>UkO8 2MyTtx>3R|2YtYZu]S+E !*q$uW+q(!])[J*:r');
define('NONCE_KEY',        'GO/+-YT=X$oIjo}2(buhO]a]<~(to;o*1lFxJN4}2*^s_1daX^b?0UlZTS,WI>_X');
define('AUTH_SALT',        '6H MTU?.09U2i;zb9f{.dx-4TN3[Fk+.Zq2 YiG d,*Q=1B.+5kE%6@G&H#!;q+B');
define('SECURE_AUTH_SALT', 'JBO]+f4#DR)o0$]n`hFw_[f;U|5@/anm<$Ge! ~(uUy/eEa32KJ9TA`w%Ab+}*Qp');
define('LOGGED_IN_SALT',   '.dkl^}LQQ.So+w42|&/09VW61i]0!T#](1&bCCv.qyV2 vC{5`5Yy?C=l!8JD#Y$');
define('NONCE_SALT',       'DbSLCB!.03s]v^AX@z+/TBr%eyz`v2)un~p5?dtF(SMs%$WSnEpRd,S|N}wr@WDV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
