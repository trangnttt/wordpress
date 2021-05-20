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
define( 'DB_NAME', 'shop_wp' );

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
define( 'AUTH_KEY',         '+Ze7NlN^en+/222K8VSR!FrpyaG}PQ;:m%khWx+G|Gwt{+QpR:yp;D^@V5Jt _7m' );
define( 'SECURE_AUTH_KEY',  '_s6Z.M*Z4CO)*iA>G[SZWwo0/E<=*LF*_>~e2Fre_e3]8w3TK*LQ MT,vgDDj`Ey' );
define( 'LOGGED_IN_KEY',    '^$O}ppw`#Yt2?C)PV;7^Q<2F3`:M2J)fg)_E1?,=}:qL;M_p^D}Dgr-<6)ln*A)?' );
define( 'NONCE_KEY',        '/hge{kj.bDn6)%b9WjdqDg2]Qf>.r[j!*JE@|rBAA!jstISe}_M!)hCb0 [RKZ7t' );
define( 'AUTH_SALT',        '8@^s|cQ9GWd5E%R>wN:.CiVjFVAHMlPUI_%P`E0qBs*iZci)!l(M>49dyX.|<#xf' );
define( 'SECURE_AUTH_SALT', 'S]]|oL+W6?jKycxh;w;b51bI:=M885WLvmrSy^4CeiT2|#C`e/]Kd7N|cy<-oMnj' );
define( 'LOGGED_IN_SALT',   'tklUw`rVCRNOdS8piS0suX(6 m&-.Y|Ob@)T7jiUsQf:u,[ uw.O@>g_pIesGtN{' );
define( 'NONCE_SALT',       '=)U{:faw`h3;R`z/R.j.OdI@EBu=MO4uyu[L)CHr~v[L>%RZu]%97D,-!=[I~Bc@' );

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
