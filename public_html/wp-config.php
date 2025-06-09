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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u414800457_AoqJG' );

/** Database username */
define( 'DB_USER', 'u414800457_xUaiw' );

/** Database password */
define( 'DB_PASSWORD', 'Du4DHa0olk' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '].LyJ/j2.w0(y;abTh;Q94C75N1d67m`nRt9%8#evFvYpU>0u4A87L0oD^:]PjHz' );
define( 'SECURE_AUTH_KEY',   '+Q0e|qQ+*VPW04H&A]t_E!TupU_Yv{4tIpeeb5k5:_?iAZSHVF48B/iri%3iZ>cF' );
define( 'LOGGED_IN_KEY',     'mH1Z~oG*?BQ]HN<qaVTHpKoNgU<@o&?}{1?=13-24y] |^-{NZO=O#aKp;#,L_89' );
define( 'NONCE_KEY',         'FXo8_bE<307Y5u:6=<n1{e(?FY4~s*~#mXc3[2g5AKp},|OM qom`Q}y[w~^~INr' );
define( 'AUTH_SALT',         '$n^r2;^DkIRUNDslhBL#0tvGY/TXTtrTLFKg8g66Ug)!Wo.&*K|8LOFT*$Y,X&8$' );
define( 'SECURE_AUTH_SALT',  'XTMF!.OuR9h^!1&bsx_x&{4i{=0.P%-%fo5+!4[:)Gj`]3X`3<tjJc,{yOM%-:SG' );
define( 'LOGGED_IN_SALT',    'akVDy.}Hu^JcbJf*84~$ixR@[1 ab(_+*Fv=,o3*6(^$Y[::|5G<=cJlDNWSvHit' );
define( 'NONCE_SALT',        '<_RRG6i,0@m@vw~l%N&#W0z{VSKP)(g?^fd?r&5Nc]KW0w8*#}Ysx`<`JT?ra,`y' );
define( 'WP_CACHE_KEY_SALT', '5~OkFF%g?orl><14goI:L.vXt/iSu=MHf?.)`;._#1OyNT}`Ce%o8C7iYf<t42]w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'acaf63f8ac4d8a4c7dbed894605414eb' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
