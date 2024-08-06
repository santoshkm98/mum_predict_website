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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db9o7ea0n9hdbp' );

/** Database username */
define( 'DB_USER', 'uvhfbhvhhxvis' );

/** Database password */
define( 'DB_PASSWORD', '1rkubhisy2fs' );

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
define( 'AUTH_KEY',          ',}}xTxsEi;YaceZ*o3q}VhCg@E!V$ty?CA)ebr#b~{m{BC_F`{1|5DatdK_WOi}i' );
define( 'SECURE_AUTH_KEY',   'sG7Jo)D&/hN?$`: iQn{`8Ge3s1TkXtgH0 BuVfk_O+SO1i%`Q{*T6b:~TA.(G/r' );
define( 'LOGGED_IN_KEY',     'Hiw_QM!w)8~<s9e!#@tJn:TU?e(/@;~>K,/ww?HW=B1W3)Cf9^RazlL;jM.N8KuU' );
define( 'NONCE_KEY',         '#vF$f0WPC{@hjkhSdX^nVe-_T[?/EFYA:nEN&gsWgC~y[cVD9koaEX?4f?.PQA/w' );
define( 'AUTH_SALT',         '+]]8$6y3<pl!;S9`JKM!{vP`dlT,<fpvm]f$D)+@C$OET%<cpi/v?dV7ow+9E{.8' );
define( 'SECURE_AUTH_SALT',  '6kZe]X8wJqS)o7UJd_7%`]m&nO5WUK*b1{BTcKpc4?*aw%!}wKX;PK/F!&xR@>62' );
define( 'LOGGED_IN_SALT',    'h|bZ;VqUz11Ewo1X~G6vag/a}~hsX>:WCAW#|m}lP8*p750E=x)6]fqNaq*kUo-@' );
define( 'NONCE_SALT',        'hd(iDPXPhH30gy_)E0|Y1g0UA-(P>.$chG(:IID,:q(RSFS! m`cd)TwIaXFu@,8' );
define( 'WP_CACHE_KEY_SALT', 'elg~vN@:TY*|kBba9(O($hIY?+<V+Uj3siP??)cmRD?zvX3@$$o(]Ft0u{fF; Qp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
