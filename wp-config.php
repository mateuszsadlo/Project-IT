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
define('DB_NAME', 'henetplue');

/** MySQL database username */
define('DB_USER', 'henetplue');

/** MySQL database password */
define('DB_PASSWORD', 'Szafirek12!@');

/** MySQL hostname */
define('DB_HOST', 'sql.henetplue.nazwa.pl');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Q<5byx[&68QP/>8M]!4Y-&gY`,)GJym5&.z<E-~E$w70{>,Agyg]2&i^}Jw>Yu1m');
define('SECURE_AUTH_KEY',  'HVk;#m8}`8ebA{v-ngu6i[OUY{]DB+a}{=T>w9+ABfaGz9%[uYZQivvcYX[,bg55');
define('LOGGED_IN_KEY',    'J>[<z,Q7qbs4b:@x,!k~-?)!k1q5YFPZm64 Q[4.xtl`i^uopK!H>H.jQxL!i%]f');
define('NONCE_KEY',        '7:7ts>pfV!?_7d^qrU-sTwfFi.{%`bxu4:Q>G;#RX@L%oNCc8PrQYdlt88r~!wj<');
define('AUTH_SALT',        '#.jIIv<c,j?$exUzx=tpyBEDOrx2Qh|L2L.I$S6#kh>8D`;.:w(mUw~Ss5q?1 ea');
define('SECURE_AUTH_SALT', 'er$ju6k;A]r9c-AxkRD?qUi@x!>$tsWGR-~iIhP<CAK.X!mW_x,Iv>h5Rp:kGFf+');
define('LOGGED_IN_SALT',   ';XE>n`@G_Y-Y{bE(6AZ<O4Xt%_;iR89v{?j#BJIZA9_tS~Yf8/7d(b^zb%VQ9,8r');
define('NONCE_SALT',       '=AQ}`~FJ2C0o6rg@Q,iDr /r:#V$_X{ }T<*NRY=0]bKYAg@24y!8o iB?l(R~->');

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
