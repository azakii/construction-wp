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
define('DB_NAME', 'azaki_ahgar');

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
define('AUTH_KEY',         '2yCNJ|EXPciWw&+[}6ODLkv!rL&0b$Ug$*D-<i9W`>Q>(0IQ/>+w7t9C!fB>:%2)');
define('SECURE_AUTH_KEY',  'BtScvZ+cxe[vcd(ffUyKo>+PB4nC#L/^8AW>N) >wCabsn`Ciw+]ml]50A`qpwIP');
define('LOGGED_IN_KEY',    'skNFkipC<kJvc42D}Y=d.>=!vIe#hW^y)+G]|I?iD%/:ajyh,i5(RbkZveUF+5+w');
define('NONCE_KEY',        '5pB^,kiJd!2!QG);*WI9N2HCRa3&gt`G [pN@jo S`vX{B_OT~Ij?4K-ND&~-~n-');
define('AUTH_SALT',        '9%VA36lczs7N;gS_ bJ,~:Is_%[?S4::H Ae-}H[o{WPD]mb*8uLc-|1(-ca}||J');
define('SECURE_AUTH_SALT', ',=DXFW#Ucr)#oZ{z+F>giuAa|&/Fn{.SHkuY]xJ#N0)7o5VqXX1%$}KXPUH3F9E,');
define('LOGGED_IN_SALT',   'ivwP+5;A2wez,gcN(7h$WSy2W<o[Kf;0Ej2`0cL?L/3tAJ!>]|qMlf0^C Zg|T*!');
define('NONCE_SALT',       '`LY&*,~qtD_8FLH5z<vW~zp8*A#E9YDDbL%eLxz<;Y_#%W0l{,U#xA(HHw4hAG,W');

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

/** Change the directory of upload. */
define('UPLOADS', 'cdn/uploads');
