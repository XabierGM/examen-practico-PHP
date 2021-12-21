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
define( 'DB_NAME', 'examen-practico' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'K4lSgTHPBqheY2j01vhMYX7wlwDWh3rwJytk9K1VrZ95hEEiOy69L40EgTWITZK3' );
define( 'SECURE_AUTH_KEY',  'a6YRfZChT4qOUjvA2YqhDKUSw7WXvg4TdLtlpBmJqp3NOammhzoVhLVD48LMUAJW' );
define( 'LOGGED_IN_KEY',    'kWX2gdOk3rSy2Pm4ZbrZqAbZ1e2NAnYgczkISUZJjw7FG62DfBKJlY9s24NesggI' );
define( 'NONCE_KEY',        'PUHXGyhGL3DRCMMnVRxLQ3VvkQH2EIdBIIqLHwJ3eATO0pjdxZfKraWbGKEnzT3p' );
define( 'AUTH_SALT',        'j46PGeTPsY1yruY7p95a7B6aulBEgQOdPnkj8die9hbobZJHSw7hCZ3y71SJYNrt' );
define( 'SECURE_AUTH_SALT', 'raApPdc9XIcQ6OxSMXWa9uqdu5RYUILgPL1buG5PaU4gi6AvU5j183EHwbXXM1jP' );
define( 'LOGGED_IN_SALT',   'CchATfj7W7UQNmhdreLcHa4SlFSW2M8sFHWCzdpgnLNfvUp8TQGBSF1SUthycej2' );
define( 'NONCE_SALT',       '7lGrUWVfC3hyC5tVVvjBXKcyv0LADUH5LmP0ZTXshs5PytPAenx04u8ekJwUB9H6' );

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
