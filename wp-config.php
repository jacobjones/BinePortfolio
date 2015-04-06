<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress665');

/** MySQL database username */
define('DB_USER', 'wordpressuser665');

/** MySQL database password */
define('DB_PASSWORD', '.3x#N#3k[7H-');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'djF`l-wW54zwMs*KyaJu[Y7?^|_g2X o{Pg3Md66jSKXgU_X8Nf5AT`~I*)nr-_4');
define('SECURE_AUTH_KEY',  'x!;55!/`b_@NeUT~#q2[FyPxZG?ks [b&kRPOC6aJ(Vb-G`HZ|52{ F{}8!N~|5d');
define('LOGGED_IN_KEY',    '}w%F^k u0?kv]OY:we6Y[621:#:tvLP#PQ+C*k,3OZ~8N>!MK}3dNt]y<wOj23{C');
define('NONCE_KEY',        'NY+KULnu|@9wds%~.|R3a>|WSBvY!!ugG`1krjdZG1:_<_I3zdD[~yj*#An>V<ar');
define('AUTH_SALT',        'E>-BYtjO[_4p_@6}+:iT4&fL9c:<UX1*+xUDgPv!~m8(ih-N)b/;&X#xQ-sIwMnT');
define('SECURE_AUTH_SALT', '3/2_fXT`:Le.ORc0_i{,@dCq)F.Y1{H@HB3Au5|(![|ynAzO7FG>SNo)g+si7h]Y');
define('LOGGED_IN_SALT',   'BiJCuSc6k@tsCF4%rS:ZkZcvg%<(#1`,vN4w2,1+Df)5_1+u{-v6-?]uhC7Lb99n');
define('NONCE_SALT',       '~1C-`f>vc:b.C|SvESOk)|S:dvsQ tEm1x#icB<|A|Us<9<!q)Tg0Cw:N~!t5:I)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
