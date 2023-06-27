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
define('DB_NAME', 'p508851_rbt365');

/** MySQL database username */
define('DB_USER',       'p508851_rbt365');

/** MySQL database password */
define('DB_PASSWORD',       'zzz123456');

/** MySQL hostname */
define('DB_HOST', 'p508851.mysql.ihc.ru');

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
define('AUTH_KEY',       '&&^L0hTp4zXT31X1JIjczZ6bA8piIjmWaEE*fUcJHJS48^Hoi(re)S7PKfG!4in1');
define('SECURE_AUTH_KEY',       ')z9CclJQ!#noAqZnkX4RK*Rz*3y@dGo(Dq)!@NV3IiDR*u7dLE4JRR!2OAp!#0z#');
define('LOGGED_IN_KEY',       'chpQbsPBss1Q4deq%#G&pV(b0l4orQNhf1O9UrjD!EHkYgHM#YRFaV05ojPJy^K3');
define('NONCE_KEY',       'fc9L5(EA6)iLoF0snS27@ui8dknxwDJ)R%T4XgPpIhW@&%JaQfkhzUzUwhGPo0eS');
define('AUTH_SALT',       'Qh*AhMIoX*PqmyYCTHen3Z9BqK6Up1fSHmgVWqY3^bez@(7(i4yGP#%Rnnb6)uuE');
define('SECURE_AUTH_SALT',       'Q0oqk10BtHuGDzLFLU0oQCCiTz7ahf#KjrYVtekajW%%LBLFOXr7@IwSjFaASIC1');
define('LOGGED_IN_SALT',       'TTi(3Tbkc@)PJWH^A1ZwR%TJC9(406oN*uy))5dfzw(IhU9l7D0jhN^CJWwZS9ap');
define('NONCE_SALT',       'yKz1QOGJMLNus3Ze1aJdbcO8j1B7MYPijaLxPj5hxR@NM6cLzFPKqkxQ#%skzis0');
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
