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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coursWordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'lC<{FS3Mf=uo1,jjTNHGyD6k+x{-&=+^.0vR8O/;EbAXvg-,z En[FfaIc.eM]&j' );
define( 'SECURE_AUTH_KEY',  'I%DoDE8XjF@Xz6-(.,@.R74QLCE~#3yH|wa#3;:HgiA_^=T7cH->;!^A;rg%qW6>' );
define( 'LOGGED_IN_KEY',    '91e7n#Wua1L`x/?lleJ8tLQievZTnYf0LgnI:^8L`X-we?t0$r(}+M[X*sBw2Hrm' );
define( 'NONCE_KEY',        '%Ojbx$T{:tl*irsNs[lW;=Bv%slc|0AMk||0g:uZ,y7[[f)K*3YS.>:p]]V DC[!' );
define( 'AUTH_SALT',        '/[4uC0BhVR5Sb(dTqB=kaMhK^q6Wyl[U|)ub<+Qw>u-;*0<J6,Jl3)zz(E?;.L()' );
define( 'SECURE_AUTH_SALT', '4(y%62u^ceX7tV5`6)ce?o2lbQ:VpQlHWVgOD#ltKy~zc+Ty<>h``?Vc;L[0%Egr' );
define( 'LOGGED_IN_SALT',   ';sOt[Bgj-7pl,=Hs*[^Cf,](}V!_hZGr4ZR0rbk8Vq;au%A>}|@N=5_v.><vAzmf' );
define( 'NONCE_SALT',       ',[azvhTORl `iHkRW@OXEV`Co-PiK24Ba9u+FCz@ PchUgeSyp_3C2X$damQ(;N`' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
