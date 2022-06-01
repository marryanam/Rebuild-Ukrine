<?php
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
define( 'DB_NAME', 'rebuild_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R`i5ftxf%8f^7gXQ*gx}ZEjg!]tx8Um6*k)R7I!J=xo0KK;W,*ELNe{6!kiYb[T?' );
define( 'SECURE_AUTH_KEY',  '!@?@e.1lQ`)/n|84Z5D[b<i*=it*:sJf]|[8>3tCnI`.)MEPN`.u|G]c}UL?Z2E?' );
define( 'LOGGED_IN_KEY',    'ZU%[]Eh}(82oH9m+6b&5)41f0OSoDsuZ!>aV-t[KIyuy3B+sJ}[T^/MY5$0t&MU/' );
define( 'NONCE_KEY',        'Xwp|I~%)}J[N7T.jH.N*[@%lg#y6%_]ig*}~P-;@cUIRopmCPLdw+eq<Q*Nj7D_X' );
define( 'AUTH_SALT',        ';5ck1$$q,<f)P*(E+zM<,Pz|N$7JjXKsl/#5+o>8xTq-q:ggd#dA0T#mi8,F~}1U' );
define( 'SECURE_AUTH_SALT', 'X$j@5#ZOa9e/L=C]zJVr8K)g4jkbJctr0b~l[P{|58ubPXdk):1<]oDXU+er(@O)' );
define( 'LOGGED_IN_SALT',   '?W01/Wd: <M}T&q-=VoTKV)InJV}OHRK/(|ry9HKQ.`EM$4,_#y0AOtYf8[v|RLY' );
define( 'NONCE_SALT',       '50|Fru7?8Z4D)y =nQ6F]bp&d[+^=rIwt=yA~(9kiX{QzDxC*1.0-@^/wo  D4pr' );

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
