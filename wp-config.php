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
define( 'DB_NAME', 'jbdshirts_main' );

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
define( 'AUTH_KEY',         'qQBAAQM*L`F7=X=^NU)1I+a4MF,NLiaP6 -]{iK|f#@et4|5wnG~Lv{4-_/6CB]!' );
define( 'SECURE_AUTH_KEY',  'g(S&9nRf,|-d_k8m+|y%:By)BZERfTNq_7{Hq7*)4]J^]Q{eTwe6l i,4JdNweRG' );
define( 'LOGGED_IN_KEY',    ')m7yuZu7G3qAWX`;=Wye_C?WCm8PJ#jZL#^2gTCT:7Sfr61|7z.;9RwDdf@O]EE1' );
define( 'NONCE_KEY',        '680Rm0C))BA/cDtyNfv7@PSqk;c~<<;CZ(zov<yX<`?iq(lLH=gv:w=q_x.6aJJ-' );
define( 'AUTH_SALT',        'HMev[LIHV-A/q<3{ZmnY)To~6}y?_#u#YIw-^|;G`5 NqYDG$-vac$v(ro  y.Kw' );
define( 'SECURE_AUTH_SALT', '/t?w`:)BwAO%S^ljhfK!BZ~4XhE}B^5_^N5fDLP6Sg,$7{~#*}NHJR2Sj]X=nD4~' );
define( 'LOGGED_IN_SALT',   ',/pAF9*0[.MrzEq9H1&#sF:UKHgBmCj5@v6}]}M*B:S8sKfB-JQw7;9*0#{C9WSE' );
define( 'NONCE_SALT',       '~l&XnC=h)JuQa30RkvH09B<QniCI1Q1zx,l0s$Agw d.nsu/i^/UWkW;S3S*z[!<' );

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
