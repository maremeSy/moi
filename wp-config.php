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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mononepage' );

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
define( 'AUTH_KEY',         'ZKzLLrCLKPRX:SOAh5X*+t:sYA6K).WF*2x.YRHn/g,Dgx(A`e}:ldHotorRz.]e' );
define( 'SECURE_AUTH_KEY',  'Zk^Cz<pu+GOd~Twf*X@cTeSyUgLN>8fk?^@{>Jo~8ZJR<E,T_H[; HDV^SmKco#R' );
define( 'LOGGED_IN_KEY',    '-}LOK&TW&~^W|~k>Sd#:rn@_&FL+hH.n:29xcHNH&H`PCmwXd.>,`k[wJQr;_sF;' );
define( 'NONCE_KEY',        'QN.L5e}wZ@|pd/4y[sB^}f2/#Kdk-SW8XkPaK/w3l;C ee9+!J^>-AB0u0S~2EiZ' );
define( 'AUTH_SALT',        '3m/$d~RFZE&Jaf`[>z#?-:Sk2K%G_Z`-?W7F.7=m)*4e]`iJv=GEr$FmbnwFNuC4' );
define( 'SECURE_AUTH_SALT', ' b,]9Lot?&b[Wo_*6j03$V3FMz(le,j&u>0U^!oe.8*MME-J2E}DZOt;5_=h&AMA' );
define( 'LOGGED_IN_SALT',   ')YBA!EX%7?CYR(_z~.i~[Bd|1hYj0O9fvTO6X+nSC=H2[<cGExzcW$_!.A<-_SKu' );
define( 'NONCE_SALT',       ']i}8Z}{HLT$4O8V)y-9RgYp+M*THXb2dx*np.R<7n[p;391wNe{@4D?4/1ZX`H}H' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
