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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'sCt9Ioq5enBzJP67TavvKKy/i7ZQF0k7OcyTtLTVuXV4GXG5aUg7Ra971CwdwkA5sjqkEn7QZgGypXYHz/OMEQ==');
define('SECURE_AUTH_KEY',  'YjorVXt1+ePVWehGGda4mCuYbJEkQknpSr+DDCJr8pcpU83OYYQabQvIRR0NWSXAGEf6GdF8zoMXZLFnNoRgjg==');
define('LOGGED_IN_KEY',    'BTXoqtQAEFj1JuK45lUlWv7AWTqAEPgmruRd0nHroQffzwLsc0EwJURPxRGdD91pXpNa1n80yn/e/jIFJCimdg==');
define('NONCE_KEY',        'HbZU4EAifmwtgwmMkfZ7IwUHIskz1NEqwhB17Hi6hNEKNA3rhGcsUhGrbZ5KgbmI25n51HYbaxMJ8ZWZrYAbEA==');
define('AUTH_SALT',        'LFdGrHy72LjLQdL5WUNBoDic5/tGfb+6L1GVffbi2UapXay54T8Ml/WKFTRoax89WksGP7ILAOfBJaeKSgCNVQ==');
define('SECURE_AUTH_SALT', 'OTfeBfdF5zko4REmN65GsZTYAItdS8xF6Milvi2aShotU38/8uF+jEm2ziiKo1xhehtrsUEsKQmFEWHbANrB7A==');
define('LOGGED_IN_SALT',   'fqRkViOj0qZFnpETUGoQAg0V4NZb8Fk6LIavuxGtAc+D7FaXN6GgKf+eJvAJTznYqNE3XtE0cIisKBrTq16ngQ==');
define('NONCE_SALT',       'JXBkHeQy5MzSQs1zCWEhuaLplR2MBX6YAwz4nzd+g3Ocl/MuSEJkDqYF37fQFmK3W2ub8RnMB6oZO9BQkrVtKA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
