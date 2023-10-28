<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'bassamc' );

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
define( 'AUTH_KEY',         'g)wuQY$CSGc62|c6bc^]s2{dU3 5ypMDFcuv5zp`2ss.,DZM*H=s./5Aty{b?rU%' );
define( 'SECURE_AUTH_KEY',  'b >Sk.ri$V6y]zLNt!K]<ov)s}!<QmNM8BYd7v;k,ls_Nx`-MRz$ae,#+!H2S/~{' );
define( 'LOGGED_IN_KEY',    '=d#0*w>Yno%+tm.M}3Ok@X`pqxm%v15v;cVBkZO7y^QzXeZcF^fH{TT#wOMqN>_3' );
define( 'NONCE_KEY',        'F1:-4|8C6T[Ub+{{1|Iu4?@#HA_;p,T/CNJe$a9RC(_@>|Jb+>rlt[gI9>g#f[DD' );
define( 'AUTH_SALT',        'tA*I*KuC=z99J8lB [p[W0YCZ9Z@)FH8->8~W6( 30(*njV7j4cOYu1HgT1t{MZh' );
define( 'SECURE_AUTH_SALT', 'Wh}<5-W?(Q(;Eog)=*[C;-7zD2d_c5$H6Q[W%R4pjXz5[6gkdfWu<X]+vSUMw%Yq' );
define( 'LOGGED_IN_SALT',   'Jc.T68?*Z&v:1ag!U6V9^^NGbP<cNq?!k>Vwtfw:Vpa}^$cVJ%{gBVXJ34GeGvl.' );
define( 'NONCE_SALT',       '_]Ke8V-^.d4[oQ=qi<}6CUOsD6xOB*ca}Z8w`%Pt^[!1txrd8e__i/J%GrY. y4)' );

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
