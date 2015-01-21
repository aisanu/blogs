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

/** MySQL database username */

/** MySQL database password */

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
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'EBN$e4/V1 }0p}ZN=90i?`8)njUiR7Dn7.^qRYhB1t|grP_@601x{ u+s|A{rh$e');
define('SECURE_AUTH_KEY',  'Wb[-8i{8}*d#a~=vtB]B6>QcY3=d-}H!,o=2K!$+WWW}?U{##BkU3v=^}1A)5.5^');
define('LOGGED_IN_KEY',    'mMv}Q-K!|d02Mb;Zf G]Ma!g|[.RnC8:#n*ikaFDa|xP*d=;t+,ky0f&,`~-S!6^');
define('NONCE_KEY',        'Q+.Pm1wE Bx{!<{v#gjamPj#JE-/BglaUgLKNY|A#rv9|+&TyF5(3[aN@%cyP~%w');
define('AUTH_SALT',        '9v:$nP]Q()N8v:>h-Ne=-]7uJCEgXmskxeNs`Tqb#~MJ!QRx(y1h0>u-Hvj4U2Q`');
define('SECURE_AUTH_SALT', '~^L5?_*HYTpn7>&}p6;S-t0Q242R[ O*I=T`0c=#[xh?#;*L~%OFzJ|yL7HYp_?N');
define('LOGGED_IN_SALT',   '*#CERx$.cGkjR2dzhq+2sI91$+]z!L7r_|h&s-Xd.SmR<{2ANU5z5!?RS+4eI,Cj');
define('NONCE_SALT',       'W!Lse79V8+XsPRF^R2y62iIBog(|qQ?&u#tvwai.M-xGhwZ~PFULvH%t-tFlf2Y(');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'ISxVBDo7n2');
require_once(ABSPATH . 'wp-settings.php');
