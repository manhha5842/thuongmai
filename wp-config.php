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
define( 'DB_NAME', 'thuongmai' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Wi7^V|FBW!:61^S(u,g{nmYbK~LKUOurw.1UbNkQ9?&fV*CMBn|B_Pg.2h+:9knF' );
define( 'SECURE_AUTH_KEY',  ')%*!T:):q;l;uh- LVw4j=wBRBH+itl[QCpR,:#i!oO&L`!_/Hz$FF~Dq$0vQ:Ij' );
define( 'LOGGED_IN_KEY',    'C)BlXd#P#0(~EE-vciV$?+Kky^&e+{PI{*%ar=8]_5|>NH#R!(d}sy`DB:q|uyM)' );
define( 'NONCE_KEY',        'o_}zF+LPOtV3a~f2E~w)I8<s#vUDj35~lns9G0plZ8ZRhp<5qA9i&96B~O`Kq|XU' );
define( 'AUTH_SALT',        '&:Q0H,;c2ocIObRh5RjQZ{_q1qDNfSH9<*[$!=ltMoURF.8~7jxwVo3Ep$mrO:|?' );
define( 'SECURE_AUTH_SALT', 'i{ySJQ)gO7HI+plC7vpc7Bl,w#XF!G|3zHQn?:FN`JD  ~ihfh[l2v`XdSgP*e l' );
define( 'LOGGED_IN_SALT',   '5%VcAJMT(AKGLJgtc[gmH{b6>X-rf::=Ml=`w29}B/].L}F{%1uPQ{8~J%fcNf0P' );
define( 'NONCE_SALT',       'TY@$7o@H4URLs3%m0pFax}Q;1B_K$,W/&.E2u6 *k#qe*0p/xsZTE5]j{?+Zomr`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
