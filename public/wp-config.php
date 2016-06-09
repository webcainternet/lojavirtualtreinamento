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
define('DB_NAME', 'lojavirtualtreinamento');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'MD(}uuBQKn|nHIns2.;[%S)jWO7fS#!^+[Z_#JJ)_~hx4@dx@;.(-I5[.^27J:Zp');
define('SECURE_AUTH_KEY',  '^ Mr)f)^[mgRo X~ rEx~FUe|areON{(IGSD/P!BnEL)YyT>F~~:|?arrr^!<FYW');
define('LOGGED_IN_KEY',    'Z&a8#6r%&P>Q$#yfVgu!iX2k/Dp$i<t|PI9/(TryFkPU@r-^48sBjTms_3VHBKWV');
define('NONCE_KEY',        'Ha&=)EDmV++E+h5#4YMFC(X~?X!-.R5|-kU}DH:TV:XAm1I`1*U0dbl ytn<bK.x');
define('AUTH_SALT',        'Y+t!pgQ*6B{>7$3M4Yc&(ffhZ+viJ)M43R-j.@X41zmu](C%AM7(V031AM`o!e3O');
define('SECURE_AUTH_SALT', '_-$I@hI+>zV9$CR/,n(4Qoi1g(7MO%J:zpoCCt!Z}Y yUMD{AGn}b]q,FedY/&sf');
define('LOGGED_IN_SALT',   '/qs=lilNJxS6l-)jyR[{c)_<9$_g?gBGJpJB$Sc@NZR,Hsp$CHEi9R2>Uv0o*45|');
define('NONCE_SALT',       'A@lg.Gx$/5C=Sp{W(@TJA=u@_g-5A0pn$j5|`[?!@^Q{{78R{4wj{P55*zz*q<J2');

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
