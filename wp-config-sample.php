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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' 7w]8Y!i}vnRSV=3N,mVZv7brk3G3E(`C>@rcM}%l!ZhiH/zj`l-cg #Ah$3#L{&' );
define( 'SECURE_AUTH_KEY',  '})o*14l3/vD4s*g3QN_Y[Tw[_R Qr)rmU`Dj(*Wfw*ru2(.S;X:g%nwCk7v!szql' );
define( 'LOGGED_IN_KEY',    'B_y=I?%FGslu2i7:*Ro15z.WVQD~0Cl(+U2X~(lN`afLw]g>iwB7LuX)<|^i;gb{' );
define( 'NONCE_KEY',        'R~VI{?)Q-$[Fe0!6R*P;dXDmA txe</=!(9=M0,zM#UJ/^8xVQd1d`:BW`-mio%$' );
define( 'AUTH_SALT',        'WMbIK=MGE5M3F?_Ze$-[2QM0I&uL%!F}KxZ_yR|Yn u$cZDn_ *x4gXUr>Ke!<9t' );
define( 'SECURE_AUTH_SALT', '@J]?XGI+RN L3FH<NPUBXXa2:uw=y&/_U9Cju80/Dc1,dBzO1!oR3TU[Phi0]!&k' );
define( 'LOGGED_IN_SALT',   's<!Zh0-PLl}3yDDRa/cL~A}4m0v3N ow<Z]y+7`h3Q2pXhs0ARy)Gow K16^r{ND' );
define( 'NONCE_SALT',       ']v~0E!Cr&hHnhNM`CV:EF]N94fuJ4v?_pOfQw)A){B?XU>[-2?k5TZGEf6&ail?5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'felwp_';

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
define('DISALLOW_FILE_EDIT', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
