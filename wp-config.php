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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yfMIUhlV0O6pOTUKcbGBev6B0fToVRUA+JaA+UtmnGBddCbRJUrGfKvtCbcIgjo+vqqp6XYEvyPcunMNy5zc6Q==');
define('SECURE_AUTH_KEY',  '5hbPDTA+52t0m0aRuUN+qlBXfqvSKh8L/4Kwb6SKUYEG8ThL79HJsItvKmEe4PKIjF2lLkNsvOkNejML9aaHNA==');
define('LOGGED_IN_KEY',    'DX98ixbkqttZS3FKLdNaHDXZ46uFqxqhjEfz4Rk0pjZ6mVtqxDhtTbQwSbgfKGJTxBkw8O+2nG7VmMZN58hxgw==');
define('NONCE_KEY',        'ZJq5PNaL/+Jn90/+iJZH6JZS3R7J/s2PQoH3kaJWbcxyA6rKQCVMBxMz5UX3rWGLZmB5vRNSrktOH+tidIt0UQ==');
define('AUTH_SALT',        'J7VGEsvJJKLxIwDN/2nK/xZl6LNouVbKjCKwBtUv5N50dVPQ5uWZlC5oIEylMhHwMLgZ6rWEllvVkGhNdFqeRw==');
define('SECURE_AUTH_SALT', '2zl8RwprsZ6i3YWJEQYzuYPgq54oosVI/T9+hJYA4X+gTfPUiC6VVXzaYa+w8NTfL7Dep6IS+AmeNU0uA1otuw==');
define('LOGGED_IN_SALT',   'h+LO3m6hnasA/iES5rMqQrj/Vs6Mkew6ij0sWV1pkBCRMDiYTtfQk0ui3iHe3QEW+brVlcN1GSlgbldHMTku4Q==');
define('NONCE_SALT',       'r/YQtwv6eMM17hHvdUG9ZK9kY2D92LwezD9KkQtjKznYOJw1G70KsYmo8EE1PJg+UDHo+eTgfjTcBYKK1EOSPA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
