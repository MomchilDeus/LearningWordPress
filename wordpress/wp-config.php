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
define('DB_NAME', 'learningWordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123StrongPassword!!');

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
define('AUTH_KEY',         'T4S^p?61eK)EHija(@xBaUEz)b/ci8~OcNBOpmXI:m~Z@S6v>.ZqL4w=GiXb-$xj');
define('SECURE_AUTH_KEY',  'M+<XEebQZV+age?o+}ooS3yWn)[UYb~Y# px1|.M~(+=RMoy42Cpx6m^D5E7wHCB');
define('LOGGED_IN_KEY',    'TCw|b(g<}e?|(1A02zpNBIW&!lga4TxZ n8gb^L%6R.S6Dv2{X jbdFo&@P]u}wc');
define('NONCE_KEY',        'FH[VIhaN:hB;d5}JjVX%R@^NNfz!~@C0rfd<6H}!Fk*;4?[l(AEogEKJg8B$LB9r');
define('AUTH_SALT',        '8A1*YaoD`-FaKm/$c/@(,^&E{)/6 @~~>E`y1m;ZaHkJ!W|7}!c,S+U&*`Qg<wFN');
define('SECURE_AUTH_SALT', '*a6{|h5=k fwin?le:8FSh?@1P{.IMuaeUk`*wO`#-,[`oSZ*Cc,iTTgR>1_~G49');
define('LOGGED_IN_SALT',   '|dRAB^xB-Q- r%MTV@{MLxv#QcKC=UXaA6db&^]5Pdgls`,X5J=O#6be}ok:.cDz');
define('NONCE_SALT',       'o4$;tOj,F,qS=#[s.K|OmYv4Qq-;G*Fbn&K:KB7{b-rLo)2oUsjpe3]3V/~;ydUz');

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
