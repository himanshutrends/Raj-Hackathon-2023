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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u373559578_6rKuz' );

/** Database username */
define( 'DB_USER', 'u373559578_bEyPj' );

/** Database password */
define( 'DB_PASSWORD', 'i4J9Q2W3sJ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '/=3ySKK.eFkiOIx?yVU<w}HXTBF r}#%>#hW8;-f[BYP=K2Ha&9%ope9.>C}b*s8' );
define( 'SECURE_AUTH_KEY',   '=UtK7ZHJ/K$)FTMW3WPi%z:z571V,-4zC|tE9xsWM?cy{p (.*UutPhzt*3Ee36g' );
define( 'LOGGED_IN_KEY',     '%$.qUd?/6b(r}X27SJdS,.f&rCw5A}}5=:3OiO&=327#)?)(*~K.$BayK8-;!?+M' );
define( 'NONCE_KEY',         '<a0+(,9_RGXWaRa{8w(^v#1NNBq](Xhx^}7!&ONzoC%C,qamflcKS:6I[SV>]-,S' );
define( 'AUTH_SALT',         '7eCW<7+ t0*?m$z[xJ7]PJDcr/ LWakq@+QoO9zxH^9Zw9S=:CV*!ZT$[SW$xR[/' );
define( 'SECURE_AUTH_SALT',  ']jJkU]R5% @p,AjoN9qA$S,sc4[62!V?m}xT3C&E92V)]6i|L*{Z,wnLn|B0-s,D' );
define( 'LOGGED_IN_SALT',    'Pf7e=0d*WL5T&Fuc12^mVR}:~{y/&.D7y}[8Q1zil$yy0u=(88U$3icpp5G8;aKE' );
define( 'NONCE_SALT',        'O9H0bizlALJ%KMiSVc zn;4{]jXTlf|Oa.d,:Hu$9^)L`)EaHtAiG,h(KujlK`Xp' );
define( 'WP_CACHE_KEY_SALT', ' }i:BUZ;100L6Xf:o5ffG tKJ.smXi1q/}gnjE%R#=?XbXF-q3X@TJyF,=-!8286' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
