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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'A1w8J4rvBgxl6ZcdrLkGYBSe1K7FYyys1U6T0pywvwM7AXTImwm88xWlM3eEM+D5SgbQgbW7jwMgbjL/vYvD4w==');
define('SECURE_AUTH_KEY',  'wTWhpZ1UI1g0x1zslb2ONGrPpYaGnfWITTn9KklewujRzwKwo6VT2lpZ6IS5xmKxFStUngtxn3QVBtPVKsVk5A==');
define('LOGGED_IN_KEY',    'OuwtjVeXJc4BjZEI05KVC8U3SZv2tuuz4FLGiQWpz+bT3+CxzlUmMeZ3ZunGtANcWGKP/yU1blROROpiY75jyQ==');
define('NONCE_KEY',        'aelGr4j0TF/r1IwnRX2hsT2lBhLJa5u8QCNPRTcqoConLgTHa1Nl9RKVmHqd8LYk9xUiUDFiuaWRx0spJ71AGg==');
define('AUTH_SALT',        'KsEHomCCjX+uXJEs+jJbj8Sttqpdkl8bjpFDOaqovTLVKHdGRm12Q0YbOrqsfl7o+e78+lWFZzrvU1ZhbVVuXQ==');
define('SECURE_AUTH_SALT', 'oxT2jy3Ugbw1p31FmJhWk7F9oxTwObRnuFrlYU6fT73qeaHAq5v75ibhsHgvPHH0hRQZnCbLT2G99lgMU5D3RA==');
define('LOGGED_IN_SALT',   'kKVQ6NuTWOX2M5EJuS8kFtVEfiWRvEs2jSvG4SJ6YeHvrZ5GwE5W95Urp6/QhvghLbVu9GuAg0nTDAStEed/HA==');
define('NONCE_SALT',       'RIskG4cxJ3GC+r3XW/RfZq9tXgGR8QFkI25db/OWYN2EnDvGvK1a4xU455jPzej+53O1A3W5HfGLr41NrOCa6Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
