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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'dmhrVZWv95ZWAdbx');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ')vjj=<_=;:z*iTZ+r&y2/xqO0&sTMxM1RX<7MZ:8Pk%)W^Nq+E jot&q19bxh)+,');
define('SECURE_AUTH_KEY',  'g#t@I/iY[vva{s,f=B%Dz.Sh?}/?J%=HfuBRs4^8E;n$4BaW aMVp5K[,dmEpYmB');
define('LOGGED_IN_KEY',    'R~t;Gb}=bm=o+jOmabJY17ia{!)o2b3|r#O,]TA!;qRMpU^h[(`RGdDwv]F)Pa !');
define('NONCE_KEY',        'FSn=cU&4Oc300PI{06xTx5l<DO-cZ2nb_33pxg^-uMpe5oc5~!w4EyHiR!)yc9w|');
define('AUTH_SALT',        '*bRoOZcz070{m/is.[z`*:@iP$f,@IU1xQ) 7^%JWi$!HhG$W$IMT,E^rJH 0#jw');
define('SECURE_AUTH_SALT', '.IyQqe@WnR3IC ]}=@1T}MzZ_OcsC@B1A*#V?wMpa$zEO?Q9j&ycQ,gNGRcDBP^M');
define('LOGGED_IN_SALT',   '/qcw`F_]7gvS9Ax>Aoq,GnIhGHF=ZH24w#P8fKrY95Yg]xw=hl-&h{Rc07s%.;t6');
define('NONCE_SALT',       '9=56m|k51y!RdU(T% iUM8_P~Av XO|j}l(mV/c3;/ls<-*&7`#BC*o545J_ti^#');

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
