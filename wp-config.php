<?php
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

define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . "/wp");

// ** MySQL settings - You can get this info from your web host ** //

define('DB_NAME', '');
define('DB_PASSWORD', '');
define('DB_USER', '');
define('DB_HOST', '');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_POST_REVISIONS', 1);

define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', '/wp-content');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V|8aqRe!&L86iGlxM7c,c?dI!*xqKO5P-0-z81yj1-:VS5 1/yLsyZmhht q%|Hj');
define('SECURE_AUTH_KEY',  'Ku!CxwH 5`Lm:QgICqX%JSl1HgPSWTp0Y2wn2nf}=y|+<km__0h&[ /]V d4*2.V');
define('LOGGED_IN_KEY',    '),2R/&3*[/[%.#lj~2Adj)qKRmV}BvwDFBBrL,4.tti^AAO`U4Vii|xD0|x+W-.t');
define('NONCE_KEY',        '0#o7fz1ULhu:UW}jpM-(BiRslP{W~<)i9.XDHUvVumqE,=(M:](;m6RdGN>9;7Ez');
define('AUTH_SALT',        'R>%v&MJP3AW(~8Vw2R-|kp*DQjoOZuH4Xjid6z+@ELXdbwpBU@[.s#|e[0bCX{*h');
define('SECURE_AUTH_SALT', 'j5MaL63Ll(aJ#6o_?Fz!7a8aFpHgshJcw=nV1F<w|xP`>Jf+P5e#|46W29$&B0[]');
define('LOGGED_IN_SALT',   'a?N`8=V;xyR!+,:T/-MPbXUp?P{:ks%7Ki+|oT $A{L!5SvOvf+VoZ4,Re)Ut_F4');
define('NONCE_SALT',       '/>N!aKSVWR:k7|A` FR(`h:i %H%_)@Qd.C.EBWZN2$7/drlB-4-lA1Ai/5}[(+3');

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
