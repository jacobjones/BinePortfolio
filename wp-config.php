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
define('DB_NAME', 'wordpress212');

/** MySQL database username */
define('DB_USER', 'wordpressuser212');

/** MySQL database password */
define('DB_PASSWORD', 'p?]b?|LeM?Sa');

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
define('AUTH_KEY',         '/W/fBXxrI3%FWv=_,(~iR)i]@:&i9LNs=K/3|c#Um7Fc!%#;:*mG2Xo&n]_KIwJ,');
define('SECURE_AUTH_KEY',  'D`9~- u,7HhE,H|4+/L06A3H(HyX%_SR^zBU>meTZ,IxQKI>I2}A|gHr8gS1^{QN');
define('LOGGED_IN_KEY',    ';E(E+]wM2IbRtw9PqSv>/l`y)E/RM&ccP+l#aY{&i{/@q&-.I^!,Z<?H)PhRglf5');
define('NONCE_KEY',        'lvNF;yKbO0vMyafndXPAa,_QK78)2=LmjC?KpLm#U+<o}Q8nTfx_y2Vw[EMcC0m/');
define('AUTH_SALT',        'Fb%/h /|6C0(iOU,l3QF50TK#<r^j{kf!*q%NW>@u;c^OE;5/P[e==L1?+GL4%:7');
define('SECURE_AUTH_SALT', 'CBj8|e(y+b{t- RHwKoR+e1=%hepuc,S%W/1,2IHHLA|:6f/!-?|AS;cF[c?[_ ;');
define('LOGGED_IN_SALT',   ')q+PH+,%/!Xa=Upg|E8Z:pMb c-wNIx|j~ *)%[PNr6VI;-VxRzLU-!lf>JmjjnD');
define('NONCE_SALT',       'GZFK+]&/RsYt3HkqNLoS #P/,>??Kx=MJmR-ZuxB=eBTW+?g{+}F~_pAHU58t=*J');

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
