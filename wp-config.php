<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql8585177' );
/** Database username */
define( 'DB_USER', 'sql8585177' );
/** Database password */
define( 'DB_PASSWORD', 'VB94fDYrjb' );
/** Database hostname */
define( 'DB_HOST', 'sql8.freesqldatabase.com' );
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
define( 'AUTH_KEY',         'cyV19((, H[KJ?8c-30:CRm*bI}x~6#[xL0!O&E6dY Dgr&-%GRJrj}M}sP*SRVx' );
define( 'SECURE_AUTH_KEY',  '/hi^N1A-1<ZQ~ >T+8K5yQ:+DnpX-KG$6:-vXtyI&xv|N2C<rIFbW8TRg|y3Hd<=' );
define( 'LOGGED_IN_KEY',    '=>rum=oXI@l6rK{Ml<*iCdofvwzMtJYFX_fhtn9mT.~2%P%Y(GxXjzDHVYu1<E2R' );
define( 'NONCE_KEY',        'y3e/|n=uLzaN/P$mGV]P2c{PmclqwK3r:I9TLwC hWLF=[n:a5vf2h?@=X]ek0E}' );
define( 'AUTH_SALT',        'Z`iQ$nES.bV/bX`iOd-h[$Fx9@J-A7qU}j#M&e}>a_>;RP;,?ie]zqVkB<#wTR#Q' );
define( 'SECURE_AUTH_SALT', '>|Zym|MXY$ o@kd8=h$(lBn)]$/w|!YvffRYLlIg( ~R&DW!AqUqhw1]rCC u14a' );
define( 'LOGGED_IN_SALT',   'B$Wq>k8voDU3@2K:~uT%u~a&oQp|!jL j}3eXDWs{EA+H?%FhM._#1Hb)nQjOR/I' );
define( 'NONCE_SALT',       'qmAz?XDQ[fvlHPU^=Q/}#_Vxv3LRFuaQ~e>5|h__fe8e|wOD}h:5+T?~H|,V[0rq' );
define('JWT_AUTH_SECRET_KEY', '4XfI]MIG6NruO+~l&;8txFx>c|zmkf>b4),OnL;4Ba~wi:&)q*ilC*YQK;x|<La&');
define('JWT_AUTH_CORS_ENABLE', true);


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
