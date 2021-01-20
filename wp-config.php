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
define( 'DB_NAME', 'reboque' );

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
define( 'AUTH_KEY',         '?Bw`6Y4Mq8!G`/;u??]!BgZ!EGl6Kn]ew/lw[0gd*&#BjTN7gn2,s!OJTAjROks0' );
define( 'SECURE_AUTH_KEY',  '?C_fBY8hk1TcRtRCD`evhr3%c=Lx96[ldUFT;,!D*?rZG!.Rf-`MOV$3RN&kyby@' );
define( 'LOGGED_IN_KEY',    '8XK84aG/LE1vGKAx=*BAH!H_)J9xu])i{JnVfBh^L`^h6AZ-zrDqyngWmz#/KQfY' );
define( 'NONCE_KEY',        'll6f}FY*Tsmlw,~G4 p@wOp`bOVn)jKf:0}@R2f8]RHIkM]&&$:xv }YB}(d+=9V' );
define( 'AUTH_SALT',        '$G_I3,pO1/AQgD41ZT}JyxO4W|BF/yOS-D_58zw,hOhXyp+xXyfxztb.1 ,`E1.c' );
define( 'SECURE_AUTH_SALT', '8L*Wo{[dD:&D@a-UFP0^5Z?2_n.(FHUJN.?V_QslLS} ^!AuE;O5DZ{0vK}ID)?.' );
define( 'LOGGED_IN_SALT',   ',A1%z}Dq3`x+M4BM{DzuL]]u|&O}.Js#ya4( uPhtC,X]n&<3u6i1<p42)(W0>|T' );
define( 'NONCE_SALT',       '!~$l;QWETG/)_k;=3Kz`f91wuFj0IwJAb-yg:69)xU9n~8Sj4|!=LV{?;GMsl;#!' );

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
