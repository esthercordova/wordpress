<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'F{0}}d.az%+2m{/q]m|#?|6FV=wkm+(R/w;F$w%eBO`iK8/Dt1Bp^|uzoRk(-F:}');
define('SECURE_AUTH_KEY',  ')~CIYH~lRxRN_nLMwv/B?K|d|-E<!UAo[Afm^`[+||WH%i^19/BjEM#_ri]4Q$a%');
define('LOGGED_IN_KEY',    'l,ef_oxB]S+LOCCcOsX27@2t}S#)-liBW1w2.-+J5/$Emtu3 FkZ$sr/<{gZsMl1');
define('NONCE_KEY',        '+.;DWD@]8Pk6/?d|YWLi3Z|<EBP:Epehl9oJ=91p2w#;9{CwVgWF0f9crzEyvs{N');
define('AUTH_SALT',        '3m-x-G_&:LxA$WDwcCcW/Q0g<1%|{BZByaAnS4?wc<@_^<y6f+T-8sTzWN)c{1VC');
define('SECURE_AUTH_SALT', '0>WZZ8-A)Q=PRU+rqT/z<~%Sut{]z/9p,q-6yyLAg<N5BU(Gll3s-_zfgSV|H|p?');
define('LOGGED_IN_SALT',   'fH>/Vw7NhA+CKVe[IzV+cb,^R]8ipjBJ2|Sw9dAJgV|8/z}]@6a3;{+s_gyP%w2;');
define('NONCE_SALT',       '`t[q+~,@/k1=|m)e:_pjH||d*/&G}*ggGKhNe.[KM[Bmf*GINK]l2VoO/auTU|K,');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
