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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_aboutme' );

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
define( 'AUTH_KEY',         'm2:koS<597@ALg.OCzD)WFjG#IX1u{q?`h{iY8Va1!`aiG[btvV9}>),=9-SAr^e' );
define( 'SECURE_AUTH_KEY',  'okP#O .;LAf@9S~Bz^C`OF0gc3SkaQ-]S <^))!ot{HP^dtdB16%&]}d{ljT[wmM' );
define( 'LOGGED_IN_KEY',    '7c/~hYU>JYGxMBghmaEN}jI%*Co,k{oT^kM;(JSLw~qSWlZ|X%E5,T<)IsDoF>mZ' );
define( 'NONCE_KEY',        '1P3A_DvAMykI;HZ.`uCT0Xhk0x[tn52r.aSJlY>rXJ_M2O}$Yh;K1bx0L=&j$Ev(' );
define( 'AUTH_SALT',        'WhcjO8j}mn@Y+11V-^catOSynhErAjHZ-#awE!ie_#s`[hDY*CK_ZgaL+oU8YVRP' );
define( 'SECURE_AUTH_SALT', 'q[pwcuIf#]LbS5R<IXJn`KyZe3K 8PFn4fl-6ucYJ%8+)6K%c0>tECy!SAF:>AWa' );
define( 'LOGGED_IN_SALT',   'tEPI|$*((1P~~H2l>uvI,s6s9y*F/&Bl3+ihLZ7Y@jBPf/A`DX@8*0Vd=:~@YgH1' );
define( 'NONCE_SALT',       'A;@1iopUoT`E=,E}Eb1j!D>Y?&-CJVi(M~5J2yVsg<a1>#NP* 8&FNCy@H$^=dj[' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
