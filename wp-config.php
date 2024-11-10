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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smart-service-db' );

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
define( 'AUTH_KEY',         '+dDmc.EI#F]=!v<,<Su,)1I5=gj2gg`FLOt`b]k1`LnOK*yo:uO+2tN3U)7h8&yT' );
define( 'SECURE_AUTH_KEY',  '*>9@u.s^+W{#IehNBVNX|QRfC`v5EK)6w6z9Ky*C?}S*zoNO)jA@fb??GE/k82JY' );
define( 'LOGGED_IN_KEY',    ')AxjpcEiJ_ppXBSZh,vR{m^e!1GK|&9*<#iy $trPu.*3h^0W1|(Saax&F.N3Xb}' );
define( 'NONCE_KEY',        'WM@eZx]&ipKc])wrV4!, JhV2:%zE70?67~XY)C,nfu}/<jWAh*~sM?f6_Alzxpz' );
define( 'AUTH_SALT',        'qg+.ck%k]&{r`s(9g]Bn54Me}${&HHTq/4s~0oO<|-j06B )hs2_8W xi@WEBI2Q' );
define( 'SECURE_AUTH_SALT', 'jwLR:IHb{9~2yNCyE].jNwE#F67X0&?osr}B&<XfvRSwX/b-xh?{&R=~dAQf@hw~' );
define( 'LOGGED_IN_SALT',   'b6GnBCOWwCD- u*5;KkQ2,JBk|o-TAglh[|n}Sc4Qr)KXdcz~nXO Ysi{*D{#PiC' );
define( 'NONCE_SALT',       'c9_?$Z0K[AA8H&H2YD$}Uy7d1d!A`i=(Th_zl9X@~>%C~zdi{.9#%X*_ h><|B*C' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
