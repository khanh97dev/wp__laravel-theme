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
define( 'DB_NAME', 'wp__laravel_theme' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', "http://localhost:8000" );
    define( 'WP_HOME',    "http://localhost:8000" );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q4fZx9DD4hlrMtEIOfczN4mdrGUnsAUwGoDF2YHZl29qEWc8PkmehvxEQ2FzQK2N' );
define( 'SECURE_AUTH_KEY',  '2iYLg2HPh8PyxrHLrFndzyYYumQYFa5Nplp34eelR4wo0yciJHyZKE04nPMvZzaJ' );
define( 'LOGGED_IN_KEY',    'rnYb1FwYeFlGsjAFO4N2BGEsHlSFBJSs5RaP8NN7mjivAlORWPunFZjHGsMvHMnx' );
define( 'NONCE_KEY',        'ierwVIkQSKYyn2vH4JpCxaY4574TrVnx6HAkjzSqUcQ3q6OYlZSWq3qWbJPLloCu' );
define( 'AUTH_SALT',        '5rcI4triqwOfLiXuoAUubU9X8BFXmIxahyANItzwqnlqrh5RStXymmatb8ErCx5c' );
define( 'SECURE_AUTH_SALT', 'hgLTLilHIt0hVDG130axSTwPvZd9Dl4XgdrvFwYiZy0PhcAqwP8O5KxXDz0buPWI' );
define( 'LOGGED_IN_SALT',   'pBhRhaJtQsjwMkHEktKs8f09nZqzxmyz1pFEqKMHyFouSOuCmEkE35QolIMzjWFk' );
define( 'NONCE_SALT',       'KKcjAA2Il4dV2xmFLFdZpITrqW65DOJfD1lpXyWX8hganMvFLp6OoUZiLTKtW76l' );

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
