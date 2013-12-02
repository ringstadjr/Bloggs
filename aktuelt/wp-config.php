<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kbnn_no');

/** MySQL database username */
define('DB_USER', 'kbnn_no');

/** MySQL database password */
define('DB_PASSWORD', 'wFy86bGZEyMv5R9F');

/** MySQL hostname */
define('DB_HOST', 'pmy.shared01.siteman.no');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/* Substitute in built apliances */
define('AUTH_KEY',         '7277dfb87ae7d4bbb5da29997d9585f0c8a7ad8a5f8373e1427d11ae0657e3d9');
define('SECURE_AUTH_KEY',  '0ff9e38d46240a502a3a43d068c91fa808606a48dd796eec2bddb36f9dea95da');
define('LOGGED_IN_KEY',    'd4b6a3c3b515a2a2bcbb8e6e32a0197b656c54068aa576fc41a9e4276d977e60');
define('NONCE_KEY',        '0f7279569ffa10651e8b2cc75518b969c4e3eabb209371e46f872bca0dc3f79c');
define('AUTH_SALT',        '7b0c0ed46913c0bd61ddb3a526861bda3f83da657a8811e180f56ff0a692d071');
define('SECURE_AUTH_SALT', '7eedbb0a000f021f5a3383e0ee4fbf3fc47a8555195068e5f663df51bc09c4ed');
define('LOGGED_IN_SALT',   'fa7ff20d516b7545a2bfae0c4acb753fd198815904f39a94dd03a305e00fccb9');
define('NONCE_SALT',       '2c8501a2420a6b8011c61177cd6690519ab228d07429a87b4610d3cdc7eb41e0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aktuelt_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://kbnn.no.shared01.siteman.no/aktuelt');
define('WP_HOME', 'http://kbnn.no.shared01.siteman.no/aktuelt');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
