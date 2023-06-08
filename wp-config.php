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
define( 'DB_NAME', 'wordpress-test' );

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
define( 'AUTH_KEY',         'j.HV,:G.Da64F)e<LvHLSGaLIV4qJurf@kSH^X|c_WuT?lS:!=Lk$z[Aku$(SHTg' );
define( 'SECURE_AUTH_KEY',  'Ri+yiMAT8Vn9mR^@3TR^>`<#x:A6OP!behoE58j(k&[>(+5=Xo>h6$ktV/TjW0)F' );
define( 'LOGGED_IN_KEY',    'oEmf%|(v.F{OzP{M0*gZ~4]Sb]wN8lrK1GEN/nD@ H@X|R_.^+4YklC^09HwgYLr' );
define( 'NONCE_KEY',        '{|W&c<^Yn;JNW)d0!f*z7j{3FM/rfwFs6p+oYF.N>no4iR<&Lti2z,a{&*^p,U`J' );
define( 'AUTH_SALT',        '~{%>[pv$x8l :Y{p&h#R&J|567:!=68] W5(nw6#*&`xgnjb-u -{,9e+~X[nFq3' );
define( 'SECURE_AUTH_SALT', '8Fvl#kg`r{_Koqt0~B+]NS.<edRwiWO*9kz,J[Z_b)3LI+*a DqlD5t&cUgjgIEY' );
define( 'LOGGED_IN_SALT',   'm-J s:bsc>5ip%(m0~lig=z}QQ-i6?x[d:k8c7K;]8`^TXt5[!!U?t6d4n`!53wU' );
define( 'NONCE_SALT',       'Jd|gDf[}$Q$S ljW*zpM}uRsZYfwAr5jq<i@`zZlrtZ[6n@3yT4[ On8h;G^M)kO' );

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
