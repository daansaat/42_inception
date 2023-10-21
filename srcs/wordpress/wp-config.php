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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'dsaat' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '$UF[*=Fc{kI3g=AsR,:x=GZTg@|=Ce5M$k6}}U3:APXF`1Ot>?A)o$FVIFBmH-p3' );
define( 'SECURE_AUTH_KEY',  '10{h~`;2;Htm~X:j>/Ne?-X!Ad8:Z~@H)rpjjp:w<2-=[9s/d$l=Ul2N-WVBpGUR' );
define( 'LOGGED_IN_KEY',    'qk;q_^j@rQ?bn^N]VDPzvlrsTJ|2DwD[t,(|^J0qcqSOTRt(*^*`g]1iae}n<v,.' );
define( 'NONCE_KEY',        'ZhUO;[&d&}1@mzYQr 2*k@{1j@G&jm3AHP*c>Z,%x!s82&}nafh1adfo0!6;`(d_' );
define( 'AUTH_SALT',        'j&oy}2g]W%+!j0A_?&QCaR_-n+)4wBr%FfC3G$akhnk<64SAsg1hoOTZYH71UXDY' );
define( 'SECURE_AUTH_SALT', 'moGW=W9&jB*r&mvC{zNtJ?28py]tRkmmE^;W>{Da$;ZY9;N@R]{B04<YB!)cB,Uc' );
define( 'LOGGED_IN_SALT',   '!:0V1h0hcEa/RB#xDao*Wt$tj*cJnA`3GNav9%T--j{|m*t,;C$y||#(5qFt9eib' );
define( 'NONCE_SALT',       'pJr4c(`[#4Zm9:Q9OCt8K# PzK{pfF>U8rxtVD#.6V6!|D8A,Eg<Bd[<VaJ`-V^N' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
