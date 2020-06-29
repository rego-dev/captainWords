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
define( 'DB_NAME', 'captainword_db' );

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
define( 'AUTH_KEY',         'g+]<hok^5TrL~YNEve{J}$`?{/[PG|bj&nCH7BS5eFzN*3V;F8sSOG$QV3B5#tOn' );
define( 'SECURE_AUTH_KEY',  '@7vQ gm,87h>o^F=VceP>OSP)Ro/@V8,M@wD6NeuEwR>{jeIDS:B|(A79^NJ(:_m' );
define( 'LOGGED_IN_KEY',    'Hf&UEHBbBV^Tp9LvTy|U5=Pd$QMV>[+{9&4Stdx[i45%8B_rXa]tY(=_O$v`rm/Q' );
define( 'NONCE_KEY',        ',d%ib{Bv> <b^E#5T+,(x=7#y;He]k*Xm61GKRVRpW~y6Jh-fpEO7PeDI]s_xOzX' );
define( 'AUTH_SALT',        '.#.KNgC-S,Y92{Hk+VzS3vdGdakYZiD?~q~`:nC?3#Z1cLNn3{2%:pHSoISW.L_q' );
define( 'SECURE_AUTH_SALT', 'WdgQclzjQ$pjw@-ur`#]^`3MsD5_;1DjLTOF&V7y2lFr`xkrb?H=Whi;IqoPKJkz' );
define( 'LOGGED_IN_SALT',   '<8j]{NT>H&PmAp0VZzhS&rlS;X(l!.dy4Id9=%+^0nR~;.w3B&t|,c4^kHSa|rxv' );
define( 'NONCE_SALT',       ':Fjv{R2H29iZNd<nyt@9/iA#>3xbJ4Xd,gv+a8ubmxwmf?MM|9D#W4eSmKzqmgij' );

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
