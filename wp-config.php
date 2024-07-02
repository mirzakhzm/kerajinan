<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'webcitra' );

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
define( 'AUTH_KEY',         '/ddo]]OG#4ogX#85 y(*6K_|hO-np}6q$MFNv#S<PUNiL)SHRI|WF=s14U}qtT}D' );
define( 'SECURE_AUTH_KEY',  'O_e$-gc,F!w5$O@:+2v+BYG>=CG{BxdDNO{yCc>3[pguQtof#A[O_LfIY`8uM&EG' );
define( 'LOGGED_IN_KEY',    '90TaY;D}K*5mWD6z;kvH!vH3.3gPY?hv1XdG>q2:kpW[gDR_*a_+~M*C//Hn=@WN' );
define( 'NONCE_KEY',        'rW[]IXjW$F1V5A*I^Xw{F}2Fvp4cIAGc9s9I+XB$I%AL&,Mzu10A<I^){-L]&n0`' );
define( 'AUTH_SALT',        ',`8:J3=N#3x<*h%;U/K9[hu+-=oyKU9Q^cIic>=[!%vtDh|<C>fq?X.Igz,xJ@}c' );
define( 'SECURE_AUTH_SALT', '%fWIn//sPX%^Rj0g>jD3BmY%FltkJz`BXs2)YyC%2mD}`/vDiz*Pln2,Q V%, _}' );
define( 'LOGGED_IN_SALT',   '[M+^y*f80SY|+`1{1y&5/ATx<qUlN{Dr2vpGBPg{#KOVsb41,5K-/J6|0!OWXGUW' );
define( 'NONCE_SALT',       '}`FyD}Q#0P-SxndP1C#E^+ia20CzD5~nn0zop|S1kzs<=y0U>J1%,JONF_T3>ZfO' );

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
