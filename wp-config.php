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
define( 'AUTH_KEY',         '|C=p[2.rpDsEv9T)Z7|YI~XoslVQ,$IdEHtu!VWR1Jzma*Ln A@Z5+XLJvqEn:mM' );
define( 'SECURE_AUTH_KEY',  'd1ZNdR|TIA)[+/L{I|+4]Z+Mk]F;t[-kWk{WeM0&$mG`PDY4/!lJXlX0nqxi`cp<' );
define( 'LOGGED_IN_KEY',    '`[Sb;|3X)PP>Rx3J20BH7Ul-Pa;s*O,;O .adwjM!::n1r_`<.qorbKOAU!N%#==' );
define( 'NONCE_KEY',        'UQW+8[gmsgNLD`vI(i(/nxcPlM96(4JJ&+A01QWr0?7hvNe32dxt(^bFK42p4vr/' );
define( 'AUTH_SALT',        'SXZbufeVL=[s,ZacrJ+cY2EZ(7DZ{Uj<k BH9#O<W|q2;*P*ZKw-euqe}s^.}1_/' );
define( 'SECURE_AUTH_SALT', 'v#0GHgg);;ZIbhY_m1sld]<Nm8)pyD-qUf|rV}C}[X2vudFUvG:!ogS_~v%QwgvS' );
define( 'LOGGED_IN_SALT',   'Eh*<+O6?W& 0|s=QjMv+2*#1N~qHq=qq7[@juZn41hWtbc.}X3O>4ej!!.gw|2Et' );
define( 'NONCE_SALT',       'CAlzRGH7^#b+yqiz$4!W`05YKwhCkgN,hN(8dc|njBRYcEm7:~VmsqyuP5pAF)o_' );

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
