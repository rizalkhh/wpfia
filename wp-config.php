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
define( 'DB_NAME', 'database_bababa' );

/** Database username */
define( 'DB_USER', 'adminbababa' );

/** Database password */
define( 'DB_PASSWORD', 'adminbababa' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '@IDtVQ?b>;h?R-J[38zbXh7Hd>83 I_F!|H$jr;f6q?N1}%S1S}ggW%,z}U{Go0,' );
define( 'SECURE_AUTH_KEY',  'X[OIPCFrP6!`r1]e%5e){,^8fTb;gk&rW><.gm;diD& WO)byHB;anV.&O)c;Aol' );
define( 'LOGGED_IN_KEY',    '^b|>GMwt>RY#`T1RD_)7z)8WwE{?r|K:=UT|]vJC3d($n~JFsCv+X$DqgwA&ZiuL' );
define( 'NONCE_KEY',        '.mX>]mQRp=1.M; G[YxVxC?JJ<[=mUHf9Z>0tR_Hk|kYso.h%{~hRzq>c@oenY;#' );
define( 'AUTH_SALT',        '`UTLE-K0%XFR04Tw%6`*rD2=m2,%Jx+;>*!jj/MpGUDIWCuUUY=VJFdp!` h|<7u' );
define( 'SECURE_AUTH_SALT', '7)gC~@[$x/i@Li_$8X}0z^F!m Oa98l_Mq>*fs#m~s*1e%=laou|5!Pdu0%f};R`' );
define( 'LOGGED_IN_SALT',   'PS.=VyRp$RN?^fGp_v5<SNDzV%kNzZ.LV<#|qDQkO`WnlC!X&[+k4nRk3#_jX,_;' );
define( 'NONCE_SALT',       '8Gsr%t1we)f45XmVaei=9yhI$BI*{0tn`c$Yg|C-v39o4C8*y;~!|=x=:k!T2](9' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
