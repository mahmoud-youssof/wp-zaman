<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zamandb' );

/** Database username */
define( 'DB_USER', 'zaman_user' );

/** Database password */
define( 'DB_PASSWORD', 'nj,v6H4#O5u\\$' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`k3SN0<&Ar;[_!a0,Xz:6OE&PQB>L(]6%Xy={]E%cJXActoYa:uW*kABHM2<T<Gw' );
define( 'SECURE_AUTH_KEY',  '>7 =mgh5GMk`CX0yh*YPzdqwIhuM8X 0SDr*6kr~g#8hm[j=~@cTo0M2k]cNA{XB' );
define( 'LOGGED_IN_KEY',    'm1LX&1i%4ANea6C?=-F!CwtBLeB%V4#{mc#t1J?h]uM]0r`6r2BfdXw.irIIa/_i' );
define( 'NONCE_KEY',        'gy)5&KYNw0e02:Zg*Yd4[-?vOaW<TJ!<XX,T`}V0mMu<#<<Q9_a(JG^Q]]a8a+::' );
define( 'AUTH_SALT',        'SRP7`%FRkLjXpuPB|zz_SRk+ye&Zv4j55)1+)HRO|CieaM?z]~{)X;.tY).E -f(' );
define( 'SECURE_AUTH_SALT', '+alZIgb!)|8g6}dBSPf,)FyEG,j+a>ikv!~kELkldMk(7U<EW!d,uh[{r}Oh9$g{' );
define( 'LOGGED_IN_SALT',   'EWVnSXtCw?y]${v_4MplaGXHfj9s:t+6HO`#OU3#R@O2ud@;}1nGWQC,gBzZK$3G' );
define( 'NONCE_SALT',       '/aNYwJ,fMV`VG]@pI~S_L@w[qTm8Kg,%L?Vvw:S[YwuHU@9V2UY>mBml45],7lR!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);