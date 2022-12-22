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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pet-understrap' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'LWOJ7illRDwkbpk1ysUI7zLOexaMXLsrNrXKXSJlony9ZZryyV91SiYVRK8s0Xkt' );
define( 'SECURE_AUTH_KEY',  'gGvhDeRUUuPFDIFaQFrgqsC1LNLDNJByhW8zNkGkUlnofjOmDKnlCmvgEfm3fCjw' );
define( 'LOGGED_IN_KEY',    '3lme1i1CKg7hnZEZKveineVvtUpbd3pYggBwyacym6dvV32p03ILn6dsOOlqyDp9' );
define( 'NONCE_KEY',        'Y0UwmAloQilSXmNVVnNb5obh1IWCUly2j175hHGnOCEtGBD4mzhxHCmqcxrMhhrS' );
define( 'AUTH_SALT',        'vPNEOzFDnPaWtTkDu2iKV5i8oQh7du6gD4vrQcbetNkR2DWEoCGLHfENW9XIZVxL' );
define( 'SECURE_AUTH_SALT', 'Mj3YkGgsM7i0bFvp3oExUNRH8wnrowWvrGMaz9Yf4HaoH5dsVF9Yemp1SsG3fEbx' );
define( 'LOGGED_IN_SALT',   'dRhPdU9NW1Q6dl1vtsJXVOYFcAvJVOeFYVrw07p42brBIWbUd3X6iX7j5G2X5Wck' );
define( 'NONCE_SALT',       'VpnSynzPnsTz4bZ3Uv96gOWQUNzEWc4QlO3YL8IUxETRTCHySOJKpys9AdB4YETM' );

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
