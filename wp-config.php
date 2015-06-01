<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-database');

/** MySQL database username */
define('DB_USER', 'wp-main');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'i|TCO~,6jP#%7&n+TLnbFn+ /h3|_^hx8U&4%NmF};FfZ{V[^;|y+#/E aoOh#E-');
define('SECURE_AUTH_KEY',  'cLm[v:$hLxH}bC]&VG8Y1UzKzAIHAc+-J2yKlOPfhz?l.Kh$g=14v.<OH*bXbRu&');
define('LOGGED_IN_KEY',    'bGe|-@#V5jA%lr]WpW>[o}q32gQ!-g#:J%(%yZI|*r_]ll;ezQH~+K]|j[|c0rVh');
define('NONCE_KEY',        '=ERJsbzpwg{^_XU(`RIHzK+8Esb~aF0+h}|A%x_s4Mj&X^j}I-tgye/Ttt;*,K~U');
define('AUTH_SALT',        ']`H5KoKQ+zF|+6>Jpp6CkGWYih+bh!rwE,(3X6Bj9S-TM[.pm$y_IN/c]Vi/,Gb2');
define('SECURE_AUTH_SALT', 'LzAk;0rESxj&1Bx1cD:^.rPX|e;r#/&2iHHS_a-K%L*z&Hu~Q`m4T?CDEu$1+{iZ');
define('LOGGED_IN_SALT',   '|5A4I#YQ:T;tFR`jr-Hr_&wG>3{X)cg6C<ZYQ=,X4)8p=-7QjWwHCG|FiKOb9>GR');
define('NONCE_SALT',       'rBW|$|j3fUtl}S!5ez%6>S1|VDb,D+cJl^si1 ,,ih^7l&R| (V5Ey[|#qp_-6 D');

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
define('WP_DEBUG', true);

define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');

define( 'WP_POST_REVISIONS', 10 );

define('WP_CACHE', true); // Added by W3 Total Cache

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
