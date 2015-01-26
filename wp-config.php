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
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';wZhz/(jkjF?S*2|gNe- r%G~&szv+a;?8SO`UiB.Xh`LK^2FL+F@$)1Q!^l1X|[');
define('SECURE_AUTH_KEY',  'dk;64^.Y|[y%(eQ1o-UMy6>g5lA:J_RJs-`zmtbDu(Cl,+3-W^84fextDqSNqm57');
define('LOGGED_IN_KEY',    'rZql--jR/+D{/wGM_6I|JE5i^C-%4_+|ihDQotJO]o xxE7Zv_HY%lCX2%52r-jY');
define('NONCE_KEY',        'yu-FS*hC/q_CG]0-j>n)nO#9cQdOj@%8sG(_-P Y(TUFK:H:J{IfD2`#mu*Y2S>t');
define('AUTH_SALT',        'SOV>T8Ar?<^4)K_&?(^-D!Tbw|nz<-&w_JvO2%FX+pbWe1Dr <xaX~C=YG{W4$FP');
define('SECURE_AUTH_SALT', '|V%m>d=kNm_]YVX>-I|<;q[JHxYn)od4!%*6VhT]|/Tt68fPV+ISqw-gFaYmA5@t');
define('LOGGED_IN_SALT',   '^S}`C`[O&fc]I;^>VJP|,+KwwTZ|5:-fPh;>WUwQ?qDy$mi70a{qXG:GSx[8OJyd');
define('NONCE_SALT',       'L5K0uuyvvX-[pT%&6V=^*k]ui!EV!KKE<0$MQ=}[%!0jtzGk[fF!?>1O~A9{@jOp');

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
