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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'renaissa' );

/** Database username */
define( 'DB_USER', 'renaissa' );

/** Database password */
define( 'DB_PASSWORD', 'Renaissa@123' );

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
define( 'AUTH_KEY',         'NO15$@qWbnFcF6m:f7i?.7T N[qUbjPfn]umK+WbbdD%3}iPa[ 4<^^G($W|Fecp' );
define( 'SECURE_AUTH_KEY',  'M+F]2pqsz=(Mwv{GA#U!XAfL:ri~|RCXS^aGqiV.=/=-(DRP2aJw{7Z3V[i6:*@A' );
define( 'LOGGED_IN_KEY',    '?j%QWqP.es3B(}MdI>OPo<ZnKY<6kftZ<(cF4yIL8(r> pV!E(dkAow8vs1T].oA' );
define( 'NONCE_KEY',        's4/n{V<t.S0@9Zm@GiyzL?kwurAlF!X`;=&sO=>>=|yCwMrXqag^b9q@wQqE {g9' );
define( 'AUTH_SALT',        'h1/w6U}hhD9iLzOS;u&7)CyGM%34I3w9u_W`SjZAo0s]@up&I>|Q#MedOHmzi),|' );
define( 'SECURE_AUTH_SALT', 'Ii^j#i7ju-::<!ILcc&U8(=Ei~}[3a(K9E42]rWuXB` u3^6I.jSw49A`8fw_`Nx' );
define( 'LOGGED_IN_SALT',   'R,|E^l<G._U`jZWQ2#8FKWc:384a+SmK5I8daJcP_:v/eD3I2u|`Yg4_Rg1q3riR' );
define( 'NONCE_SALT',       'IW8RVQz0<Li4w|%O<UBth;my$pIK?1jGc0^c.)t@vN[0CKxel}c=u=vmK<>#;+[!' );

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