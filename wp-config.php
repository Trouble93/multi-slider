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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "yappie");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'W>@G8oB>),k8vE0:PJ;`vr:maw=(?7M:YK%Lgk*O+(blWlY0plOfq|</z:>=]QmS');
define('SECURE_AUTH_KEY',  'bc;JW|b-luSs{$6!><[aXkN.:Tf,p=fgSaQb#].0xY|%mn3oHmW/h%a1u%:81z&5');
define('LOGGED_IN_KEY',    'Qa||OaVe8-r] a,LIn>Vw]F 3w/a$98(As.[kPnX|+<O-wR YSal?i>Lte5`xloM');
define('NONCE_KEY',        ',v>m|<x[z}Uo &Y0l-m~|?}=>>|^1Eg-#eM|I+prb:R05/z) y>c8XQk7Z(#%7jc');
define('AUTH_SALT',        'ac~$08vYO-0T=,PTT,O *K++U?7%r% U@QzX8AxNx7`>&CVD(Zj%tX_$?)I)Y,yD');
define('SECURE_AUTH_SALT', '%^rQ-cKD4feMkiNl]&h*6DsTCn+Dm_!@Ns$4i-oWG*^]I?02/<r,[iW=y[<S9tRc');
define('LOGGED_IN_SALT',   'P/lCDGr3zJhYF#,98f3Ew`G-A@%i9MI6~s{Irg2{}%-b,T@_9{#=#xG{<<yLf{TU');
define('NONCE_SALT',       '>q3%nKNhh7yQg^X+P*K(5t&%YIC=S`xz]#69$;9:`LTf=FA;k-0dlQSFq.wk-@DR');

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
// define('WP_DEBUG', true);

define( 'WP_SITEURL', 'http://yappie.loc/' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');
