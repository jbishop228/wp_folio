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
define('DB_NAME', 'wp_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&B;_h%)`g0MwAz&FotAQ= 5%q$q 0qN@0S}0GEP,Q@Swv~-4M.PAIKV]-uBM;@$=');
define('SECURE_AUTH_KEY',  'c%1llU*H0O)>ni;<2#03+<8?j+bpTLk!_r 6a0K+ap`@h?J$_uvftTI{1U^I>x#K');
define('LOGGED_IN_KEY',    ']se-0vR>4Y^q9^}o_6lXglr@(A$bZd|a>t-B~]o?-)<u0-}qHA5XTnnI}iKRD3+l');
define('NONCE_KEY',        '|4mHx$MI;isa7Oc?<K-|qWP>,+6|k:6OLN?%L8k9[L{OLTUfMjq+  ;)+LHwgX+]');
define('AUTH_SALT',        'OnUdm&ma)g|dq%;qk:/!`6wg}El,g4tW|iPK|NowTh,<j@Q^L(V #_jSD_?ttd*=');
define('SECURE_AUTH_SALT', '(?ArRRBDntga5F@KYO-/,nMD.,:ts|,*,x(_sQx-{7^DczHME7_5_3l#/YQDgBZr');
define('LOGGED_IN_SALT',   'JpFhRVYb|$>)))4PrS|ZtMGGa@>j3YOl9(RKK>IRn#Pg2GXa8EvzbX;sF|ItV)y8');
define('NONCE_SALT',       'yKS%Y-ozi-=%^8M*5v8@q`-crLBPwMq.UQVtS>_}e&HfiHg`[E_}|Fd({g#ua2tL');

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
