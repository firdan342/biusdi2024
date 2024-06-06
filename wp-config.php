<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'bisdi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Wt2]U(D5.yx6Xy_>1]MUUZ$PJ@Jw3r3K]Z^dbV2 X9^m]4y:@$zW0n(1}{ULyn@k' );
define( 'SECURE_AUTH_KEY',  '@~>LcJjH(?a<&?{U/,0QLG{+)F./cD@5aK;$q!gI<hJRek0h=pHLS;sRr%NZ%*0w' );
define( 'LOGGED_IN_KEY',    '#RG[5KSpM?#<KYF5ve>m+?j081%767`WNhiQX~iLJmn)uH4w*N.YS,bRY,e0n:)6' );
define( 'NONCE_KEY',        '1f,I|$rrcY+dxjPi>C/^8|(%Wo|l~/3UW9I0#LYMy>rs&X4+T.FC2+Dk*~ib@vK{' );
define( 'AUTH_SALT',        '^8:!,X^f[4l0)wXT~KbL|,XiC*k$5D,qTgn.%>2[a14DsES0bEhT[/?fO_UV?9X/' );
define( 'SECURE_AUTH_SALT', 'OC1Wkk#7yM9v>JI`sfnK9lC*xw?78]#kTV@13}V*H{A<*5VtIv[v8ye>$SM.OlGQ' );
define( 'LOGGED_IN_SALT',   '#8dKJX{fwNI_bA /aTgT$D#=6dT;aEC/Y~Ip*VB^V3Y0UR5Y<dxy.!]@u#5h`eAo' );
define( 'NONCE_SALT',       'RB yq@JlOlq)TxPU7N_K<aO(uP>#=y{,C!Wdk>&NyO,pPhUU&;kA[mKs0w:p(Qv9' );

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
