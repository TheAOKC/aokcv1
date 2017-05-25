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
define('DB_NAME', 'theaokc');

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
define('AUTH_KEY',         '6[^|pLCYDm2BEwA1<8!DvweOdEa84Yf^=#H*6kxJm:yaafoS#)Pl3,*!-4p4NMOQ');
define('SECURE_AUTH_KEY',  '%97DWJ4k7<#g3FiZ~Yq_{?6PuUU4m/sd=u2iaZ3 JucW!,wyPs@Q!;{N`H2DSx$_');
define('LOGGED_IN_KEY',    '.q_`+Y=#*pQ[>8-z<mV3$hm}#hB2aSlfOYRH.#GQpBAa.YZmY#uV^5`uk([v[H!r');
define('NONCE_KEY',        ';XjJIjZtB|hZPVi^`,#:Ez1 8T3@9L-VV{k^Gdd Xt37)ps^.Y(g)}Gfb~c7%v5<');
define('AUTH_SALT',        'g4Zb*o}exr.$MT}a[oYfcVHR9Y4c&i8=|-A3UAlSg-9d!IxA<%&`K@|XL595Cd_F');
define('SECURE_AUTH_SALT', '$6`)l_D[d1-t]mR.UcX>)[q?,iR%h4~%SG+8-`6ndzn&ZnUpGp,OT7#+koMcA-T[');
define('LOGGED_IN_SALT',   'P7$~dCm8C;Jq>Z)H-vS>:^cH{MJX(*_^Dy T}3kU+o:6qe`/KL]7H9^( ?2US~ew');
define('NONCE_SALT',       'y@ug&.JnUOLsscDn74dK;(T>)?vB<2uZ@y!?MRXw>uOa+;.Wey46}WA%q}mOj`iC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aokcv1_';

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
