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
define('AUTH_KEY',         'buyS]7:OZz3X&:xOd<4#1e?vZli-Rx6m9+|GgO t#5WE^E+$1;$60/q30^rl1Ew[');
define('SECURE_AUTH_KEY',  'iyX?rucjJ.r#Er43+:d!PP$Xc?JC<}H[RK+7|b|+6&wcFmg:gco/j4Y(X.)qnOvJ');
define('LOGGED_IN_KEY',    'kD(OAG0FFk^iH$C7~hcFQ%)>wuBlw3%[*f2+tnRbCzB!j}MM.+~Axr5WIg{~l7:L');
define('NONCE_KEY',        'dS0c:(VI0AJIZPMu|:P.$!kSl>q`0-=LZ6k(8eA]po?qjG?:~:STg(!AAt^,*_`9');
define('AUTH_SALT',        '1{R]&6CDm=-_f^J/$sPh0):x2Qk@Ouohm%+;/RerMMSrJ7UAzq[dbp,e~VYgv^r+');
define('SECURE_AUTH_SALT', 'PMeDq[K:Q59-%-edP[qvR?>cE2Q,4A.:6X@}gmGto+~NQ)E$9C:9vIojGE6xKLqN');
define('LOGGED_IN_SALT',   'R$9U^Ef$G&9y3ZF}1Deb=%R}{iV{uZGqR((eZ~JGg -Az])gV=Jwzp/|{dr3-_?u');
define('NONCE_SALT',       'vpD.|sOgqsR&(u4v$;U+PD/+9M{pB%u`*?a6bi(J_9W+Z<!OeGc2QB6?=1,0c;SE');

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
