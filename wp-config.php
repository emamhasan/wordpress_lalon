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
define('DB_NAME', 'wordpress_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}F5,wIl.Vo$p](:QiR-a)Pl^L~#N[ XER8TJt<Y:(/.|Q:srRt;4/Edeh!1J=:N|');
define('SECURE_AUTH_KEY',  '%-i|,6>.U^hH#BhT]sd0N{|KqHNB[$TH7Tg|A)M_23MM/#qVmx]avm)o~=ja$ydJ');
define('LOGGED_IN_KEY',    'l82@)-Ss/h$~DZ,b*rv0[|h46l?~hQ<_@fiCm$*I++%b7rU/wsqfS$hg6^Fz<LiR');
define('NONCE_KEY',        '${8,S^Rwd_53+kP67G{BR7q[&0%E_TDTB3eoPt|:c!J9R5P22cz-u7oELhFr;>g|');
define('AUTH_SALT',        'SQnJ)r?[{[@3&xZ|% !ETmag}rN$xL<jqQ6kIm8|;(~C+3q=_N]w+}2QI5{YL~nk');
define('SECURE_AUTH_SALT', '<8|xB*G7l @8U?K8uz0V$a9Q&0.y!&qNbK[!+^aGcK-[9f&kYc`AX]_#%,f|w-=5');
define('LOGGED_IN_SALT',   'PQmcdGCm/)K NlM # T:1-v,xL!:Uws__-ZWGm4tHB{^i(^bvQpTQYiSNGEs[F#_');
define('NONCE_SALT',       '-9ae@hbAI3#=hQ$@v1Wf(])p.4$n31<$FqPCfrr+OBC?WLGhREW?=7n!wupSUM#b');

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
