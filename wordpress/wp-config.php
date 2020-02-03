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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K03u=^ngv}@6sHCN/$~MsR5(xIWmD2?FSj9!.n0[!3_R40]E:(:oi]M>un#u,liK' );
define( 'SECURE_AUTH_KEY',  'W.C0FF>BI6#?a9e,JW vCpN]Q70=jcgXXis_rh3nyCT58 *ieWS:2j [MAk4yKGH' );
define( 'LOGGED_IN_KEY',    'v,e,txYUNdZ>r{wG-1y(WRWma0MA@G@_&CY83IP8ra?L(bS{=#I}*1N b%_KqP.c' );
define( 'NONCE_KEY',        '6K5zFo7:UkdMs75e0.7dZL ls0aE,N.U^bS4@<GXo &H^Cj`dhS*evZd7w696VKe' );
define( 'AUTH_SALT',        '6I2&P-`2quDMn&h|=4APH?_F;:11xArA wS0fx_YK+$oljx?it]!Q5qz.pVe(jZ ' );
define( 'SECURE_AUTH_SALT', '#3>>G)Ea0TIujb~x@ec_6e6  ;by8bLwq~z(+vyN0{+@@:a?-81U>kv|MG]9Z4J4' );
define( 'LOGGED_IN_SALT',   ';2`Q~sTk?_odfz(2&v);kRU^@=c=)4Kn,Zbg$^ Yy{VKm@z.#%K}F~QL^HSHw3t#' );
define( 'NONCE_SALT',       '6U-|6dC73qXU,#!QZD7DwA}l=@o#gq:_Z%V&;Uk;RE__i%%`@5T).QJ$)02tgkS>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
