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
define('DB_NAME', 'schatz');

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
define('AUTH_KEY',         'vf#6e3IG5]@n r})4^s4co[vbm<ef=@nzSrWc){z!h&~Zp1WBPpH =&CMmeeGXvZ');
define('SECURE_AUTH_KEY',  '%tfEiD5{8^q6AkK(8^bit+Y(HniRD+<AL:E $?~A(G<]}Gt[%RYi8u1i%TDLeF;e');
define('LOGGED_IN_KEY',    'kH:sB8-**-)zu>^~NNMC{%&~:O*x{q3=!>OD(4t-UG7E,*$@g}8)%r?GV#B:}Muw');
define('NONCE_KEY',        '{5Ks-9wucrPdb@(r`cX20ERx8Bd90dcEpIJp-h9J1)h-{/;Qj0X%qDX%HX$@#14S');
define('AUTH_SALT',        'RK?[Wh%kPLX&=d3_b$DZ6v&-@u{wGuAB,3^/.c;yyKOUX|,tG:Q(%YY<ut9/3Z2g');
define('SECURE_AUTH_SALT', '^a+T=eA9{*tG#0oFJ^`/uPJ7j20QZQz_Kdf^(,mh.rRKR|op8G(yy<~3ei#gs>8m');
define('LOGGED_IN_SALT',   'pbq:yLM?/W}/vKMq]H)y6%a2A%>&$lMP[HV-4%8XI:%Zqkh337>W12L&%D$Wu.}Z');
define('NONCE_SALT',       '5ECM;)?+0l9k[lDxA,*54|4+sU]]Hk<*}x1JG%Z]tPyIc3I_^R`ssM/I$r?+#K&Q');

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
