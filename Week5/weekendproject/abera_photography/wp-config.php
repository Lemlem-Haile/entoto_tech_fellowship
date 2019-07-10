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
define( 'DB_NAME', 'abera_photography' );

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
define( 'AUTH_KEY',         'pEeh0DHR+U}fKTdpJE;vC_ibnaa odCVqvSq@XMfaDBaOpRJMD3<L:BI:j#3$@<V' );
define( 'SECURE_AUTH_KEY',  'WzT:h;w H!dD5,Eu3 aQ3Y4;4ec4sq9DY!fKC:AV>B!YUB/HGc.!kC8l0v]p@:_a' );
define( 'LOGGED_IN_KEY',    'L:Z^bI*6ktw08%T68|TKaR8~i.Of.^3m%y6]s3Aaa6m@?99r!n]u@aP) }P1U/]u' );
define( 'NONCE_KEY',        '+0/X*UT+plqisd=AR9YE7kJ3TTaDb&vkYB :PVXhz=y><HF$%`&}`RpB*<]~?}*f' );
define( 'AUTH_SALT',        'i*vre3awS,~l.#oa6&k13@AOg=_(x?btrLwM>b7%~/Bz;IQ:mWu%t,e2-P%WfnV~' );
define( 'SECURE_AUTH_SALT', 'B&.N0nM7>E[_i6e3p5C]% C(Z<$}9mgU!)FR7GHZ }!s _H[L+,BYxQ^.]qZ/J-!' );
define( 'LOGGED_IN_SALT',   '--&P!ZtCXem0A)$@:zFum_U{mU&CBl8`jNvx`*1>XoS<zn(!^zu+(7F|n2DeM6^@' );
define( 'NONCE_SALT',       'V]=h6NTu.v6M~Un|Rv)^p<63p#=>kVO7&G`t#4>(1)M_SsDjy&u`@nG$@`[/b. c' );

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
