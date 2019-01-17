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
define('DB_NAME', 'henetplue_3');

/** MySQL database username */
define('DB_USER', 'henetplue_3');

/** MySQL database password */
define('DB_PASSWORD', 'sobq3eDBEBOd8ZIy');

/** MySQL hostname */
define('DB_HOST', 'sql.henetplue.nazwa.pl:3306:');

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
define('AUTH_KEY',         '62N%k9YG@0cT!%yXhJ4n#!Q1jf@4H)njJisdj*0GF))JupOzA!PMr4NZmC)A4r5Z');
define('SECURE_AUTH_KEY',  'SyB%9&Qy9@crLl#d6B2IOcBN#KrxrRa!c*luVUBhLj2W%B(DWIyh&RnSNEwu8Ew(');
define('LOGGED_IN_KEY',    'xZEvsEdG^o(a4OH&45ON2rlnO6Po*9IrKFVvF0OV82AN23u(s!3zxcfLbnkCWL%e');
define('NONCE_KEY',        '9%2@)l5mTOq2m8YKzCqOBK@OYAp70yrByR0lyOoyJuIF(@)sE^ZU07%3dDnE(hp1');
define('AUTH_SALT',        'xZ5uI1zz8ApIZK8#ESpt8o&9m!!0fx&32V)40HbmxBue08#ijCbe4dIJf(C(RyP9');
define('SECURE_AUTH_SALT', 'INyJYTV2HfbBE*Kz)gdcGHZ5Bf1tLhzrS6TYXRV(aLRz5s&9nIri8ZOylGGzhmrA');
define('LOGGED_IN_SALT',   'STMVmVkZO2(Fnpj!nL2zVcaU0QfgKH&B0v4opF*iv@hyUewjiA(E2jIyv^s6TdIb');
define('NONCE_SALT',       '6inTFaf7N(Uz25oEpAkgbdQ!i50oEkI91SRKZWm7H0uBV6!nyvG5ggVRjcFoZ!kO');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
