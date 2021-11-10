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
define( 'AUTH_KEY',         'qS-0=.tA#{%lYDfj)P,gDs<XU//g/U0%,vwXOLQ<Oiye&xisP*777%QSTL+(C.Aa' );
define( 'SECURE_AUTH_KEY',  'OC():3A7y{5gjN#i)`d1)w3R!5{nk?5=iR%iEe}LF{3]R;W<,VaB^J#B%aE{:|&7' );
define( 'LOGGED_IN_KEY',    'E!9]FVKw^A?X,L.(3[&35w?*5W=*y/MA$ceV KeYdw~e#4*|/s38O7xAV1{<GGHX' );
define( 'NONCE_KEY',        'bciamJE;sm]+zdh8C:Yu :,5buu>RGJ<x^|q-XdtKw)|l0*F^{G92r%c:|u}raa:' );
define( 'AUTH_SALT',        'K1h4|J2#H6Qjj[$OA(-|eDtMyFa5sKl7~CV2:WiyY;B^k}4crOQ!5m_X+ss^|HX=' );
define( 'SECURE_AUTH_SALT', 'Olqgx:>J=r7x#TUGf2:|,?]31eP)p6s+KA*i%ykh*dpYj;&ec>Y{Ind^0S}wh}?6' );
define( 'LOGGED_IN_SALT',   '*CA6!f0D_leLO$+Yn.}GS_*! gU{-oZ:pNrZZR-2y{oI@%cV@s^Qq(R-@09i3$?_' );
define( 'NONCE_SALT',       'DzL)sIm;kqQkQM,t4(L[?7H]$h=(OO}M~#YiC~5qy8 ~^iU/0SVA7k48SlUnnl_s' );

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
