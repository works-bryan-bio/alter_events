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
define('DB_NAME', 'altereventsdev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'p@ssw0rd');

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
define('AUTH_KEY',         ':7*c]mtT9lQoWGwVaB#n}j9DF~ADM$g-i!PzwSP64;KADUF?j}A~1s!r|SzOQHV!');
define('SECURE_AUTH_KEY',  'pZvlb.Mbcl!ZmkAEL^_;;__dIzp|zfRH.!wCTY![ba#EOg51^8AgCxt-g=%: x#?');
define('LOGGED_IN_KEY',    'dQ/GiPt )>-4d|3<*I*l#!yLdY+.iXW.*;kno+MK:kxKQc$=}11yV%Cn8.^RCga#');
define('NONCE_KEY',        '=^~|}z$HDaSqh<<3M80Mcq9l@Fy|L3DuDNK/T#Hx4)M`}-a|urR^-e/`[3<k5$@t');
define('AUTH_SALT',        '0+b.]c|s)/m+^=|#J(|I2Gm`H)Hk`JoVL3 {)Gla,;mucqLOA(Gf>uyqfN7V%kg%');
define('SECURE_AUTH_SALT', '&vr-J$CTauzhwhx{d#l)xsz#Hi|vm&:q6+RWMaCpdVoa=`80hJ$*v#[Ffy[N%cSZ');
define('LOGGED_IN_SALT',   'k{9~b,]Hg{PARj{Z}Y[O:B_z82E_fKv48Ea}bEwml#bT]m82Hkx=k7IE,A@+Kuwz');
define('NONCE_SALT',       'XoAG6bk=8svl_p9GJ8[z7jC,-h40%RFHX+wPD>NS9WR!_[C`?b6Oi?d95!,#/L[A');

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
