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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IB1/Oq*8gTrqV[YNu-JI^+GcM[4_iRu>{*`r-f=*k?|c!q;ov(D7WMgwavkO?^aw' );
define( 'SECURE_AUTH_KEY',  'm2-u5Xmn h%Pgv1cmkqda&h,8h%eK]33:)g?ZlM}TJkmj]quny~1ctarr,T*zKOa' );
define( 'LOGGED_IN_KEY',    'IaIe/o9oBx9x uRv#zp*#Q:#[duX1F8Z3gY~hRro<CnY^3_Y0gl7}Rzc7S{C{j|N' );
define( 'NONCE_KEY',        '4`mYZ^Q& @s/Ex(uLOde>c)QLTctFZT#U%Bf$H920cBo:1`ReLSh|+[s`&$T/?A)' );
define( 'AUTH_SALT',        '%ve1ZJB>Kod&e5 RU:Jyyk9Re*N#E=g5+:o5}|*-czMh=62>8u8AD0PiH[D_/)NL' );
define( 'SECURE_AUTH_SALT', 'sB?$V9!pT(hFgMPP4gT/#hk+h6N}e[HP<Im5z<m6g.]t/Q4Rz`~{T=+JBWMg2#sv' );
define( 'LOGGED_IN_SALT',   'iK74 A?%i@&=iQuHMbUFU+_b$epOrBg?Z?[h>MC3{p*R0I?3,q _(w|#;|8mkjlt' );
define( 'NONCE_SALT',       'nL,$J7TgkM=t *IQTh} ]^w*(K&O0HZH/&er3.W:cp{O2~ A =y9+>PQwFo;?,Z8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
