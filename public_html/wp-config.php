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
define( 'DB_NAME', 'u422564917_FTHgL' );

/** Database username */
define( 'DB_USER', 'u422564917_DwOvW' );

/** Database password */
define( 'DB_PASSWORD', 'Ja4RZOA2Zc' );

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
define( 'AUTH_KEY',          'g0I/}{yNt)!2,VT)h}y]QPqwf)g$4xUtbg4=?*qJ<Gc:9@I9%-*c#WL)49^Ur}Kt' );
define( 'SECURE_AUTH_KEY',   'lCu^y5}qD.?^-o2lui~%^Rtl]RuAKy:vALi10S 1NR..1RLyGJ+<<xm&;I->%NbI' );
define( 'LOGGED_IN_KEY',     '#vTL/Q-(&-O^4u&FT97cPfWH_pkr7nYAtt7U 57<GsO,ERc{jSVE!euGq-|A>f]c' );
define( 'NONCE_KEY',         'EC#c}+V@-Gooti>}0osQQX+M>TBU;9hpx] q8`Aih?3/L@t`nX%GOLm?DOl@xRcX' );
define( 'AUTH_SALT',         '$6D/3k5owOa` {P6-^f[s=@*{kUDm_,GO7=e1Kx9m.}1*}WCsT@.nQ}N1r>#ON@z' );
define( 'SECURE_AUTH_SALT',  '[xovQaA*>3g$&1V;(*+Csj24U|_5.Q7vI&4}bg@x{P)}E_h9>Sz*053n$.>$*e/k' );
define( 'LOGGED_IN_SALT',    '3,uixkIM4U8tD|hnJ)~*#wHmy%Zu_lAAz#@WzRMVfc/HVGp0pMCH|V%d;a[LUC&/' );
define( 'NONCE_SALT',        '9^Je`;~hmZo?nr.S5zRE-]{F.k,Fcn$EnM_s)|BuM.[@#9YlNTP|X4L7jMbisq5%' );
define( 'WP_CACHE_KEY_SALT', '~^!9JJ3eD4$.p`~0z0T|())C;]a-_Q@7g<Ohtr$`f;O{R[DUcw6^V|/+LXA.|!F8' );


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
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
