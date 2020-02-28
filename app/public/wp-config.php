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
define('AUTH_KEY',         'LPj0L4upKsvsMn0oXYxHbHLOVOvBCSzRTNuFk2L7LuKS8Vx1z9tcRBwGtlFuNQC9D6/KDCEMHOI8/vRVdhS5Ww==');
define('SECURE_AUTH_KEY',  'Fzpx7h5bTBXc5+vQInXv+Za0AAmDH2QvuqRblkpRsNsWGM+Itj4uBQ39Rwl4V9OUJDLyW8ChisVA9SyVfBHIfw==');
define('LOGGED_IN_KEY',    'd53rOaFWa5VU5/h3la8yVwar2wFyuBOLXu4MNv0VEkXN/NdPN42H0X0DT7nLXHhiTYQKE+VWE8qZXeCVQTYBog==');
define('NONCE_KEY',        'OHIxmLjZ5E9/6YO/VVGOXQcPPKOLqUyFKtAwoZRGjqIk9ndaXgcreGO6PSRGbgSN4mAhsx+knLW6XGWANThDDg==');
define('AUTH_SALT',        '4rXcvNmaRgKm8WPvEs2SI3kiAYd6Qx5SIJnSsgzJhfOlIXFJ0187LpIP/cc16bulshOV8dlbGDmHOcVQP28shw==');
define('SECURE_AUTH_SALT', '6mjaowYosablnbfu2wOJdgknMv+RRSf8ns4OqVIBlbJwmQ/AXzkdWqvi8ugo08OBPZRXY3VRtJ6YV8981NGf2Q==');
define('LOGGED_IN_SALT',   'u6KrA+uHCJbYwxlsVKuUYzebcFAAz+ITJytqYUQzcto74nIUQFks7TtnmjS1de06X2I8uA04YRW8V8iPeRTOCg==');
define('NONCE_SALT',       'Nf2hE72VqjienVtZb3D8R6rh5oa7WK8OimBfHX/lYywm9HtMCUCatixBptai5G2q5rUhURllK7jGIR8RMm2apA==');

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
