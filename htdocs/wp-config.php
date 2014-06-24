<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '8-NS!!|7d7Czqlm&70l+?;]s3jDG7DjZa-EFfu@Bd<!H[>OjQL1h@44_Ad] -3 t');
define('SECURE_AUTH_KEY',  'I8(VT$N?|zjahsMdFXz#rc&oBNv5G10v-fCc]Qd|M)u#N/8wZ,G+&rEFy*?G(-MK');
define('LOGGED_IN_KEY',    '?i.`/%&+-iJosCK`7%?QQ?n!+7UdVI.^n[r&F/*JNwGC8=rH4z<mdK:q=I_4.oia');
define('NONCE_KEY',        '-S}ie=-%Lm-L[~9<Q-|;FpD8U1@ZSfylA{S+}N_BxW#A;+|ya=ziR-n7ez!Tk1R)');
define('AUTH_SALT',        'pes9Rxk?OIM=ZdOgL~}e(}bQ=/KTdSIcr[`Q+(qa-Aj#lk(~T|q[!gDV}=YXJYh(');
define('SECURE_AUTH_SALT', '3H4 ;}X&`K`Q4YZnznj[+tGkPQ:fN`iyMe{|-Ur -&Ycoy/[}~[R.+W3lbXr5H(z');
define('LOGGED_IN_SALT',   '}nRbxAPy3xicS0wjMSMM+N)r4wk?HFsU*@b6;>yYQK(Pwg2>hO Ys_r-FaWwKlZD');
define('NONCE_SALT',       'so>]3b-5dr2!|yfGXOos$soH @9-+wn-w>]:uC}Z4sQnT{ul(QmLu6#$~T2JbG8M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
