<?php

define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', true);
define('DISALLOW_FILE_MODS', true);

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
//define('WP_CACHE', true); //Added by WP-Cache Manager
//define( 'WPCACHEHOME', '/home/suffixcm/public_html/hifidemoroom/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
//define('MMAFF', 'hostgator' ); //Added by QuickInstall

define( 'DB_NAME', 'hifidemoroom_websitemain' );

/** MySQL database username */
define( 'DB_USER', 'hifidemoroom_websitemainuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'i+5@CZmfxznB' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'Ovin)Kur!/4Wuy1o\`cx5\`tGljyOFkQpIl=2tFM~)l1JJ1KS?$Mli4V\`<:dxaT8D0M6jJqqULU5*ZC<pnlp');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'Fg(4S|FsXg@9jSZXke:da(sveGYcSxiXb|9RB5iTg^)MdE2sfd)pHe=_IqE<6^|^n^\`e3S$*');
define('NONCE_KEY',        '(*^j<H\`xZjrkGc:QktMrPh~8c(l7oCF)($MOTi__@L=H9c$t440_v7Po?GJUF)l@EBySrXr6mG#ihY>iq');
define('AUTH_SALT',        'qz(#1Z~vas6q:1^)PfLO;0EOJn1)JiXvn-DVNh@^x~qN:o34j!I|C^ak_Z0(1bXoXcIc7ospf3O?:o6');
define('SECURE_AUTH_SALT', 'y_d|qs#rcEkAt3w~IxLv;!QUNgD9y#h|m$F>Rf9YI_>~X?b(6\`jt((Gibny:~4$rT');
define('LOGGED_IN_SALT',   ':|ZeR#fyJh9TX$O~KoaCb5)7wrT~:7T7pcI/k*9zSxsHc|jbuQuNK/EruV?|_9-0XH(DhAXv');
define('NONCE_SALT',       '#hotfCW~o:b!yeGPxgO*qjx8WGSDZD$^pyvuuZ|KPs9(mtq8GXz-<3iS)U#N$>JZD<_:<Jp|6/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
