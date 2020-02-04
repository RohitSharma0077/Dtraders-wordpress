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
define( 'DB_NAME', 'Rwordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Toor@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', 'http://localhost/wordpress/');
define('WP_SITEURL', 'http://localhost/wordpress/');

define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/M/$v{ r%`t4A0:VaIkk7$`tu.icr4g<eV }~qN9$2Fo*nT0x<jTet-V^ArO&Wc7' );
define( 'SECURE_AUTH_KEY',  'S&[lM:859DuaPoq{soup8T[hEp7p0!n&&.W`TKX}mp45e!U5a0>zQ?r65MNzbu3s' );
define( 'LOGGED_IN_KEY',    'W!z2XqMD2u>^4%Ni>|FDX-KpZ7.b(v>X_+jH@fdYE9:V<OB07)nZFe)6<Ny9vDYG' );
define( 'NONCE_KEY',        '<e^dX/d_-}<0ST6j8nleaOHHW[,mwJIVy=![Z,Fw}kQ*46(@3Sw3?PrH[CHdE)0Y' );
define( 'AUTH_SALT',        'vm.%VYP(&|ag77krX3rC]c(4&+>F_IVF.,wGjDauy{8b&AvLHRqlf_vMm=Z!P/iU' );
define( 'SECURE_AUTH_SALT', 'Pb8vwbpSZ#@,>o#b}k09cI#=Ua@{<p:6I+E<:6*!^vC6D9Nq#s`Q/b_~^BW/YK.t' );
define( 'LOGGED_IN_SALT',   'nu[aWP9+1^{/M/%Wjy{rhgZicR@Kz^.Vcq,FE3%cW$[*n&c*@CJ$gELU2p**,y/V' );
define( 'NONCE_SALT',       '6bethW4(4&lK+)Oo]j:gywC7@FZ#Ov#|c[b{]wc&@m6,7zoRa4aI^_.E4s0T^]Iy' );


// define('FS_METHOD', 'direct');
// define('FTP_BASE', '/usr/home/username/public_html/my-site.example.com/wordpress/');
// define('FTP_CONTENT_DIR', '/usr/home/username/public_html/my-site.example.com/wordpress/wp-content/');
// define('FTP_PLUGIN_DIR ', '/usr/home/username/public_html/my-site.example.com/wordpress/wp-content/plugins/');
// // define('FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub');
// // define('FTP_PRIKEY', '/home/username/.ssh/id_rsa');
// define('FTP_USER', 'my-ftp-username');
// define('FTP_PASS', 'my-ftp-password');
// define('FTP_HOST', 'ftp.my-site.example.com');
// // define('FTP_SSL', false);


define('FS_METHOD','direct');


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

