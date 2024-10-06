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
define( 'DB_NAME', 'db_indag_tasik' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'asepsurya1998' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '8g/%s_ xzDONbg5%J]_QCc.?EJN@OFZ*!-VrJ1Bh7x/{nVvm<9S%Hk3-(? v*/J4' );
define( 'SECURE_AUTH_KEY',  '+Xzcg-@Rajf;{>s2L9mk1jN&v1){~34Kr7^r8)&/7*Lsx57=F?E8mLDc`E~HtJnM' );
define( 'LOGGED_IN_KEY',    '2D;uy!c9[*.#<SBTL|eFt@.]8[[f}Z{PhR#@>{_!FHcSvu03]YZXJwFn5~8<^( n' );
define( 'NONCE_KEY',        '&=r!<YLo4o3,V4KajL3:6CD6S74!20;d?9AEOVb|QvGE/BM=/Z/;i|((qH|>$k1G' );
define( 'AUTH_SALT',        '*5Ll%oexJiU$s(t@xb%)Avzj).)5m9-2byS(KRnQD-QXYIj2}*G]iS$eR8A8AL<i' );
define( 'SECURE_AUTH_SALT', '2O?,0hrNU4epLLV(:0Np6,9[(rZJ=jf^nJ*D-i,-Qcg_7kM4bw`hyKC>,#hn)Z0Y' );
define( 'LOGGED_IN_SALT',   'ec_dttOB^K;cVw#? +8TNz54jamHKH/dexjD1#PpY /Ftp,3w4X)L@Xm0stEA>$%' );
define( 'NONCE_SALT',       '^[rh.@lb)H3-n_.0+5ED.?T4x4XO20L[&{>V1LqxIzv8x[+9F/8e9[*[;#(Jl.sV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'indag_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
