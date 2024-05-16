<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blocq_lnc');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'tUCF[YZ?i,gS|$qKXN]Y4vZ|1T7R:<Can0V(02s6(NJ/HuhvsvcdW[#/)^0u*dg<');
define('SECURE_AUTH_KEY',  's[a5<*gXG|2Rzy5rqKbmaH%)iRr@jEw,K&ehMUUzN~nRxVB^bu>q{[)#BflW=<a,');
define('LOGGED_IN_KEY',    '6e#i-+PQ;i)F=eqqscX]hs%Ql?`Ms$R]*Nb-6.x&BZO.E6;KNeUV+aV;e3^-16dF');
define('NONCE_KEY',        'G!^[%)fU%AXB@0}fgY7EaLF2_Tu-)?=?x4W=%Nm7mt$*L+nPAuC5T/nl(Dg8igi4');
define('AUTH_SALT',        'jS1xL?*v*$o4Hz87}F-*,ppXGHC|xtCjRt]mh_Gjl>4G=0:?{:DJG,zz/TVXQ6`<');
define('SECURE_AUTH_SALT', 'VE%441KSurfH?+1O/a6g6y?QE{it(.~OM,TAxQYEMYD=vX*^|gKY*jfq(yGCtjav');
define('LOGGED_IN_SALT',   'kO0hh~xxsj&vmbyqUWmo]zZM4-QtVh<JM1i=}H+;Xx2GY5XYK}g3vw8B^tanV|#@');
define('NONCE_SALT',       '|S)- q8&*|{UWSqsErlNa}.qOBu}]S,@6U&gxX1?PDQZTVJWuKBZkbjC4g#f@s96');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
