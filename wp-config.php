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
 * * mySQL settings
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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress-passwd');

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

define('AUTH_KEY',         ';;i7FXLh3.oj((P+)1kxC[8+9)cm&)d]u.pM%@Rg^]jK6|C8W)qTg}S-ib2gE[1i');
define('SECURE_AUTH_KEY',  'U`LN4WJt{g!FiqFlQ! N=_#g}(STte3>TI,_Y0PC>XbMhmr{mFrxC)a)3M_m7.J|');
define('LOGGED_IN_KEY',    '8d%Xl>UF0u1U<F{8wLP:hiZHp+!l+50.s&8[2JG_m907hS8WgUF`!Nol7FYNNow{');
define('NONCE_KEY',        'E$iAWyxoB>eJ?&#;|P/KIhd--2DJsL0=#@-VzpzNk$m1_r|aI;`Sj|[WR.gj*/W[');
define('AUTH_SALT',        '/0FsSg#tJ=uIyqmvz{oZ@+,GciTN#+Zm}og5=Ka~<iN0I|?%k<)wQ1-WNv=Gd1v=');
define('SECURE_AUTH_SALT', '|9kAWsMG}bf>+ZoLN@-yX3E:Zf:B~~H3@*kz(oBsZi+:MU(fNkM57gu:):a6d(gb');
define('LOGGED_IN_SALT',   'kE/<vG8OQLH%a!Z/Y@{>ir7&h0xkT{cG`,9F87~=5xyah?;-R7nA A}yseM)y.c}');
define('NONCE_SALT',       ';r788(*`Y_4@.Eh2+oCv{|IdC4lZ{5.|(q:b|OZ@`9,OL(1N}zE}[]iydQ!oQ5[v');

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
// Final Sewook test
