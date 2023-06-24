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
define( 'DB_NAME', 'webmasterstudio' );

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
define( 'AUTH_KEY',         '%&$.R3+[[De;8dvW?!aq4KxqB!fV1Y7C(p(J5!$A9sN|r}c#^x(R47%/pb.0HY?F' );
define( 'SECURE_AUTH_KEY',  '0`;M5z)/G8U!4GTtY@}|k?LzJRxp~N:fCi{/C]ryK.JyFKwGZLW%eMMEEeb$3-v`' );
define( 'LOGGED_IN_KEY',    'Z9[PRuR[{eAMT_%{q?qh^nVxr.pHWXKYFVm)%~Io<X66!^Eh5e}VH%Ri@bDq`%V`' );
define( 'NONCE_KEY',        'GJ`VM^,yJ mNXs3d&=~!:DI3)c%+ycqsQWWH(}.#NL?M-@U((ReC`u1k%A$k+^.I' );
define( 'AUTH_SALT',        'TG[*h;vHG;w`_,4M@q{,os6+~,[<CAUT]wEC]UN8IVz9cI^{gS}r8%b|,^f%x^4_' );
define( 'SECURE_AUTH_SALT', 'C9?a}Nl~ETHQ+HsV<#;1#)_.8co,S:I+gmT1%De%>2CzuOQo&HB}t/c#1zhM242@' );
define( 'LOGGED_IN_SALT',   'p{jpK,pb P>l0PwhOH=<vbAW2{nhA2XCsJcZI7y:b[D4z59vJ3B<)]V1Pu0Le6*l' );
define( 'NONCE_SALT',       'ndwQubzm:k{`[J|;jQ_hH-?ICm6=Q<Q^^qos=5|h@S(~=8ZKi#q~E/%/N-X3.@(l' );

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
