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
define( 'DB_NAME', 'lemlem_injera' );

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
define( 'AUTH_KEY',         '[b(*oy-Nv[zvG=<dbn !1/+).exQBr$2-nn;O!s_BWUEdj.P}C]OFYkHkMZ/SlsN' );
define( 'SECURE_AUTH_KEY',  'f.4xvY*h{MO<y DR/rdk~5`]kdbtThCuNhylKBv$z2*}kH~2f>mzMVFsgV0$JG(F' );
define( 'LOGGED_IN_KEY',    'f_,mVQSm2VcL>#z?d|,&p@n(MV7Yh/gUM,1_1wAgLJEhzUZ0M5bHxx@-:WpI.D&?' );
define( 'NONCE_KEY',        'V%|O2WjSEWJmAwu!~uR]?JOn}o%C_>8*>@x*r6DEA(s4,Uu2#VIe7$3m>r|,-?f|' );
define( 'AUTH_SALT',        'hSCRsyNo[p;gm>T)]${4_#}^1Tp.rGk$r?><!V=3dv.T8svF4&G_DX*_@lu~Oh6}' );
define( 'SECURE_AUTH_SALT', 'm,xtkIGSS5)x/1!Ic^^]5)i`*CYq.5dvO<P`&D-qqt rJWiPXu}FO$K`|gGUO,+S' );
define( 'LOGGED_IN_SALT',   '-kFMGwGsczmV;3kf4hz(i3+G+V&!(1zZn[~tnc^okeSv[Izm0q+k@@^ib=4fIT$A' );
define( 'NONCE_SALT',       'EqIr@NVs?:Cb5jARS`#5BRvvMEKB9BA)C*gQPTdH?Pe7W;~[@V=82*/z,OAz/{x.' );

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
