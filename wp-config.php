<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kEKO/o?-j rEDB$,[{z,eF>H!tMn$ybu/8LRyi<b~_-J^rV<V3hp7GV5vD^kR6<6' );
define( 'SECURE_AUTH_KEY',  'H$!!bd#;v8q_|@mT4hDIW>QxYYgT@TVa@loAdJ&sQI.?+:q4fPp/l:DtRg10,mEw' );
define( 'LOGGED_IN_KEY',    '/!/>4si^&S%+>-%1LrjYr5K&H<[xmJ/v-A+hMKgca7p)q7wh|rwIVCs>{O=).R}&' );
define( 'NONCE_KEY',        '[q~ 32{IpS5*)ZrMe{4:_$!LQQ&AN1bB%dguj>~KQ935^~N~ym@Krf^TM^I9Aaq^' );
define( 'AUTH_SALT',        'qMlZ5q:,U.U,/W9hp{Z}U8q *0Q_O1I`_.i,f<?[f8cO:F_qF6i_yr~0YFF>l|a;' );
define( 'SECURE_AUTH_SALT', 'eD>d(I-?IcDPjwxCAD[b|?/stl<}=WEP~-SK!5J#sp|t|burzi6?PRF0<mybNNEu' );
define( 'LOGGED_IN_SALT',   'K-L*g?QX}E)rRrI5D_@x9_#+yAKxv_Bi29r9AEz:Of?f?Qy`nDHHf_+8/P8fr[*L' );
define( 'NONCE_SALT',       '5G!F,^(1AjRN5du2[%)Sh;6mYc:t1[[DV:g*v4fPR,LIZA/}6m;-Ek29V(FvRDfZ' );

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
