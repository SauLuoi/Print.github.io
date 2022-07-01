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
define( 'DB_NAME', 'personal_blog' );

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
define( 'AUTH_KEY',         'p*<J:B,0]U*#CTIG1AWjqpP10*ik0^q4UV31xk<|/vVWVRs?[0h;d$S/~cZJgO=M' );
define( 'SECURE_AUTH_KEY',  'ZI9R*!@{ob5dQ4d kJMcDE*TK?wN5FDo0(-*I1my&,%LuaPD!{!N&oay `~oAIe?' );
define( 'LOGGED_IN_KEY',    'jhkEXSLZ^>I?{^^r^laTpX$Hl,-j+st^-/P7)7:|Eq03%[ZSvd3p4xqq.0(9|Tf@' );
define( 'NONCE_KEY',        '9U`!kKhwWg*,k=KqQHD*=e-~V$=?IhnJH`F`2/u7QeNA=hEP.(zUqM/9vLJk^.e_' );
define( 'AUTH_SALT',        'a|jIf6q2I-x|=;S1RKhDp L~a00_.!):e;sG:,!gy?!J)D:3:n~++3sl(gD&k=_d' );
define( 'SECURE_AUTH_SALT', 'yUe-[m[O+{pM4y_|{ou{45vHhf^-JI >HF0-X/Kx qyQ)sP3+X$:HIe9MNmDur^G' );
define( 'LOGGED_IN_SALT',   'Fqo#~.C/7qE+2KXDOs*I3J{}(&Izd)G.sau);Z3Y!+>*j*6VzZn(#pq4w+<cNf3O' );
define( 'NONCE_SALT',       '@H{M0iAq+`$K/Cb{Ra9A)*h5%R4m&rEgIHn@NGFP3wmB@>RTPWe8:3ot!pgeE6AW' );

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
