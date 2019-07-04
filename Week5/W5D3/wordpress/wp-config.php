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
define( 'DB_NAME', 'W5D3' );

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
define( 'AUTH_KEY',         '$oOxbt6viDTw/s=/+W<|CTtpCDHF)QW:yjv)tPk>vCo<XR6UZn?NVw)5k|RoGuD3' );
define( 'SECURE_AUTH_KEY',  '[o{-Bd#1wOS>&:t^ uOf3.1 dl(t~I+uq~@r:{2m*Lq?*y&;OQUO2eV1V(N?=e0#' );
define( 'LOGGED_IN_KEY',    'D.vM<NARB2[o(%@LA(l[~1hAXk/PH|E!Dr[SP3$]r)pGbMYTD5qwpD}DE M!QD;_' );
define( 'NONCE_KEY',        ',K`ZQqs4|I@ne``(4MeopES6BJy&h:!wd48n:<GV2&`HtR2_HV~kIZVjt0o/q0SU' );
define( 'AUTH_SALT',        'SCg1Lv(7]OR^~:_.01r^N@k[2HE5G|P8.o6xik6HBr+=;6&RS`uKe(;`gK^^hzq+' );
define( 'SECURE_AUTH_SALT', 'fu0zx5OeBMNK3O@?h.vM3mn?Pr~XeQ]kp%^dB8SJaiY&%kMD9.6sDgFCbbrXT{ep' );
define( 'LOGGED_IN_SALT',   'V9?;%?M/:}1 z.s1r ~=h2O5xBDIbo-,f,qbYfua]]XJAlJQ<SKGhC*N1p;*h.Hq' );
define( 'NONCE_SALT',       '*W5ma)vcXN8fTPI@(Y1DpPDzq5U$2K%JNH-+sm,zoBbs!]AF=9y!BCy( rh4lAFT' );

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
