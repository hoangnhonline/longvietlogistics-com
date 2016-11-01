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
define('DB_NAME', 'thietken_longviet');

/** MySQL database username */
define('DB_USER', 'thietken_lviet');

/** MySQL database password */
define('DB_PASSWORD', 'longviet@2014@');//longviet@2014@

/** MySQL hostname */
define('DB_HOST', 'mysql.onehost.vn');

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
define('AUTH_KEY',         'qhFdvw=8Y;I`]c<jHQ$qED vV+rI}b7t6C|r2qyf0`44[Su.v^o<L)&f9h&L#}kG');
define('SECURE_AUTH_KEY',  'b*ZT2T79E%J>J`iH4w<ANh5uE&R[!LXMj6$WY&[#jST*(!M7$u}t+s0,*S-!bNom');
define('LOGGED_IN_KEY',    'Q)3|_w=1K:Fi(+&z!;Ds`/|vQSpkXCZ[E^JvEdM) Lk95)bQ.WESD;*#pYd~VQ=(');
define('NONCE_KEY',        'a!vuk+W{@DCCIocC(7|^iL0*j+@q41;7OZtP>9:p--5VM~Y2z-Ka$_.V~qj1a[Bm');
define('AUTH_SALT',        'qDffrgDJ^g;j`wNTt|jYdjA}F^C0=#&<;`|Y85eCgzyEWM3=N6EGZSn}M-3&0w[j');
define('SECURE_AUTH_SALT', 'p98W/5&h|dCkUa&ZjC)4P4PX%h]|hJ7.~[N3)_,P5i1D:o;b-O0VvH~ ?*jImSS ');
define('LOGGED_IN_SALT',   '=O /Do3_UkQ[<]b-2Lb~>IG`&bV{DUPcIWOalir5IAP7w>UP`UL_yp$tB`?IYO(G');
define('NONCE_SALT',       'x&H!l%S^~tl)^%2Ym(~d#Q|{ky_%{*S{:CEVo.goNu&QjY-vo`hZ|-J<Aak6|lQb');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');