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

@include_once($_SERVER['DOCUMENT_ROOT'].'/server.php');
define('ENV_DB', 'onezinec_toto201801');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', defined('ENV_DB') ? ENV_DB : 'wordpress');

/** MySQL database username */
define('DB_USER', defined('ENV_DBUSER') ? ENV_DBUSER : 'root');

/** MySQL database password */
define('DB_PASSWORD', defined('ENV_DBPASSWORD') ? ENV_DBPASSWORD : '');

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
define('AUTH_KEY',         'ia7/|.,/m/q&.Ht<|st34+Wk:Z#i O%qH|YlX?%o/&P85fH` 56U$k/[@yX|GA3#');
define('SECURE_AUTH_KEY',  ';,|.XPdq[;?oOxt?[Yd.-6BkjiP?Yyh1}q:Mg$poWp9,[c!]U1*pt8$3D+om]2Sx');
define('LOGGED_IN_KEY',    'd~?^GJ0f/TFWLdHT}@{kH <efkx~0knZuF6LRNXPc1Evuq.xq%iBmlY{>dj%lk{8');
define('NONCE_KEY',        'I?fc2]O ^I#8DA!E5M)BeXkp*:2AI#4(g&( Ln$*~bTbJ]{H?,^dkN:4*j8L<wa<');
define('AUTH_SALT',        'HnI*QOYvJ$a(0OviBA[WG*F<%Ch-x[gl|`_?>A&g-Hu>!9^L_ y#~&R %GBtoNQs');
define('SECURE_AUTH_SALT', 'Q?5m^]VB!XOKx&{,i=J0>aHy1|nC}42v=dV!BAVMvHEc/PKsm8O;H*xd%BFe@.kG');
define('LOGGED_IN_SALT',   'dm77VkuJfe@WN)g>^CI[?Q&g#6O=ZFaN_L5n$HW]w@R%jG4yCk[1e&|u$4e9^f;4');
define('NONCE_SALT',       'XEn2kc?{ee7hXXz-W>bor8g+{|-X1{7hrb6XJ:0FHr0V4q60%%Y9iB !AZY]}[dW');

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
