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
define('DB_NAME', 'redentity');

/** MySQL database username */
define('DB_USER', 'group');

/** MySQL database password */
define('DB_PASSWORD', 'YXpCNTDjU5jPvbL6');

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
define('AUTH_KEY',         'U`>tZJO,UHTZ@FLc~b- cCM6V)>;FEuo_|fJ,Z1[p1M>o5{x$W_, zr$`}z97,UP');
define('SECURE_AUTH_KEY',  'nVmVNIj`w#J[l&Qs<p#g]4m&a4*D|{.{%1)b+4Y~h.B$5-JjJ[=03x=3C/n}_49+');
define('LOGGED_IN_KEY',    'NSo|4XSR|<o1.%LVC|+/[6d_^#=.tTS:)q#QFLmp9S+Lc7f@>SA+qf@R0TZwdY|a');
define('NONCE_KEY',        '-0?Rqq:u]9QCx*$d+EcRa2wc?1tJ[2GZ=6`_-qM,ThHTvuhhSE5x-.u-yYuW@UB<');
define('AUTH_SALT',        'YFx:qoS,ad-U){0t:^j.kq_gf~9<IH(?[Z-mg,O7F(da /6(DmXuJH{6|)<B_Q;K');
define('SECURE_AUTH_SALT', 'p|]1B8h^d5dZ]x+I-F[p#=j&a cVlO9|/nuyL_|ETeE%a!YM43B]R,0_a}Bf>0~+');
define('LOGGED_IN_SALT',   '!3b=E-?N>~v,Th[&).WIU ck^hnaI(q,3DKxPXL!N,M`nc(w[uQ|0&/}pJVkjOn0');
define('NONCE_SALT',       ')S-t[;L+rZtVW!{c|&Hh|bX-fi%&VNH&FVW9lfi!vy-vsP^.+:PrPU*s2-0yDj)W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'redentity_';

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
