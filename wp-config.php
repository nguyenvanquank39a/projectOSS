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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'I}cMB+VW~tBU#*E#3-NA*clSt:IAt%(2F#SWS1:P9O)Ksf<g81cQu*Clf,lrI;Pi' );
define( 'SECURE_AUTH_KEY',  '7DpVl {P7}Aj`||CO<;/$9{K>kz4hODopW?Fu?D1F3Cm&drg_Uvz^,I+YqE2qL4?' );
define( 'LOGGED_IN_KEY',    ';g>O1UcD<(f85+MeM8]cRYESK=rAN2IJh,W>~RU6-|=}zWu-R(.^%!MDohoyDT2?' );
define( 'NONCE_KEY',        '}<_RXW.veC{jEQE+0l|?B@G./G4<DCybSO21?arP*DM9 3sgRTJ[]uaLml1:!dOB' );
define( 'AUTH_SALT',        'm3CT9$]H}iy<*;<Sw|Y<ra6!v;6abBK-=3~,vR}$*!NL/H4#|sW@1:w;}2,pNDhG' );
define( 'SECURE_AUTH_SALT', 'JC]7+h;:0_XTiRxAy@8;cD,tif0?]=L9=Gpx*:PN&O%Che]k{{9h ftXCfMlXr0X' );
define( 'LOGGED_IN_SALT',   '*HnO2a8,B#LZ7;w:[pC 7)DJZlDV]X9^WIbl<a|HRy`q?U-B9f=-8m#~5-Hu&|PG' );
define( 'NONCE_SALT',       '07,hep&CY2=D)zB:&X:*l$gj]R&)!Gd!M,*]wv&]plye/*%OW_7WnH)dxjlG-Gn(' );

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
