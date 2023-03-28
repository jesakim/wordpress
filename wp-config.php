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
define( 'DB_NAME', 'woocommercetest' );

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
define( 'AUTH_KEY',         '3anMRHMqdUgapF2lC056jLNEoAlbqceWBjXWuSQVuneFHABQE8vRWeivTUUgMgiL' );
define( 'SECURE_AUTH_KEY',  '89N89wlbuB4BCWqxwLMhp9gBZvSDtJxkNKU9mAlhvmrStwYODkWX9rrfedfM2KqL' );
define( 'LOGGED_IN_KEY',    'S50uCkAaGI5LS18FPeqBAYF2ceGErOorNFdB3B178C6Yoqope89il1xLQ2gXzjSW' );
define( 'NONCE_KEY',        '1pGs9dYWOHe1JG9j8z2xQkik6eT6mPT4xRsKNPPwFJkEZ4hC5Wl9jjQcyaUkoqAy' );
define( 'AUTH_SALT',        '2fbds0P5NIdsgIs65GXmF405sOKMUfpu3B6lmf5zdL1Clmxs7cCxyx6zx2Gk0m9i' );
define( 'SECURE_AUTH_SALT', 'f5JoaXKt6Gyur4bBHfcpm3xXQciXbSUh2gW4jislMWN1bh52KzMOgWt4Yta53E2N' );
define( 'LOGGED_IN_SALT',   'uJDDgqv6qih8nC9KNc1OcTwGoKDIUI6MqpZgEh4flt8XrXsHlMAxSHxUFmhCBEhW' );
define( 'NONCE_SALT',       'RHTaYuDxYxA8o32nHN2ICeRQBP5MrlVctuRxz2pCVrwdnGmRGoZb9UmakXSjUx6A' );

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
