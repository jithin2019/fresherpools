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
define( 'DB_NAME', 'freskhol_wp476' );

/** MySQL database username */
define( 'DB_USER', 'freskhol_wp476' );

/** MySQL database password */
define( 'DB_PASSWORD', '8STRJ!p3(5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7ebbaqmp2q3fgy34ngydk3ql6mdebwtc4mfczjn7qrv8rtcx9jbzrfhh3lxausti' );
define( 'SECURE_AUTH_KEY',  'e1d60wut7yhtmci6gxh4ozubrkjjf6l5dlrxny3dzuniqiaviguoljpvdwnhrefo' );
define( 'LOGGED_IN_KEY',    'aqrutracssdkv91rtcc1hsprq0ulntzuyw8qkev83gnnkj95iimsqv34fg4kyutq' );
define( 'NONCE_KEY',        'poyh5wje3ezwzx6newkhnhitlohveqynue9z5bge0pywfymwmi5ysrcx5c2kpb5l' );
define( 'AUTH_SALT',        'gh8krua80d3evu8ssl1bftemah0eiqc8brnjzbgafayr9g4fxb6xctgg8mgqrjnb' );
define( 'SECURE_AUTH_SALT', '1z2bznpzwis0b6iydo80x2c371sxlvgrzkk56lg1tqvyfqvzh67u0515xmjjvln0' );
define( 'LOGGED_IN_SALT',   't87404vrd27q1dujtoax42lrftplgmiffvnvjnxjdjuzvbfv3mfxv0ywmc0euz6d' );
define( 'NONCE_SALT',       'bjg1cebqpt2wl4qcwx6gaphmxhhrxfelkr6gj3hghcpbhzv1eo1mrrwdxd4d223c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpta_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
