<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hopi');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', 'http://localhost/cms-wordpress');
define('WP_SITEURL', 'http://localhost/cms-wordpress');


/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-{dkkI9eQ~UY5ix*5WiPL|81%)u?o9pm@;7U}5nbe;)X_LW]n37qD_LEb6!>M9a!');
define('SECURE_AUTH_KEY', ':p h<Iv,}pD5gp$8.J|Ukec!I.fVfioq;K>fEHh]mC!%AZ1,MBoxA&k%?9gblj4$');
define('LOGGED_IN_KEY', '$lWs ]`8tlW{G*@rxdLDi7W]A%XX@*3U@i.$N}&l-ab]NnIlr4oodZ:~m>h.v^3B');
define('NONCE_KEY', 'TDu[:if1CqL>lB9UBL;=u#MgTu=&{Bqi0 Gg5%#U@%l%11xOZ&b%{HL*#rUx_[[j');
define('AUTH_SALT', 'GL->JIdFV3o9uw#Cl^L$k2,+%u!DszPX)M<!ygJ/g KAW^j0u:zE^s``(y5^k!&o');
define('SECURE_AUTH_SALT', '=L}@)Obd^)Y-KAI%YNkE<KavP<Kx#cu[ja(z?vQp{hq2A^i]`dSefD</YlwN5L,h');
define('LOGGED_IN_SALT', '(jsx(V4t@XYXb6gg=(~a7qVM)&E.[%3lA&nK[b=KKgr98lUy}< fzB_l#7_cOh(O');
define('NONCE_SALT', '!3d15F2IIS8_zQM>#F,JNbgOtjmw5SCo.{#Y>.SLxq/[[6y_%!+M?!_RD2b?ZH`$');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);  // Ghi lỗi vào file debug.log
define('WP_DEBUG_DISPLAY', false);  // Không hiển thị lỗi trên trang

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
