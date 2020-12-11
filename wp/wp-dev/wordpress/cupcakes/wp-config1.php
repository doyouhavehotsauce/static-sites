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
define( 'DB_NAME', 'wp-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'DwlJR}-~z,GHc; k3hR!401R&w|8AM}};._bq8iR{GQR,%WBGr2OAOGn$@v1]br=' );
define( 'SECURE_AUTH_KEY',  'dp(08$7X9cGc)*_5HZt~sNg!qsEAItF.X^<O[= xI7$T?w{@rbZxct5v[/4s#~^a' );
define( 'LOGGED_IN_KEY',    'Hb.73}cKDbrQ8gR @m@uThDYJ^Cxu[+DQp_P&T2s%8!Q@<S}hTC1Xa;Ly4jN`Q.@' );
define( 'NONCE_KEY',        'qp9bg,}`BXO=Lg8S(F}Rxp6)J~hR=4=|TDZEvaAQ2Tob .>YW$ONiKvD6ud^F_Zr' );
define( 'AUTH_SALT',        'bjW^ars+0POCRe-U(!%Kd $JbPir4Ts/]?TS.>QiaxB|bxYR9,c ~Mx9Gk>5ixb,' );
define( 'SECURE_AUTH_SALT', '6&i-5l!%!kD[@5KP XiG2Cs#z?p$lQtggxh:<Y[DHY$I1~^m,q:4Lh;1:^,gs4-8' );
define( 'LOGGED_IN_SALT',   '7s!dvR;`=QKH)[1Xfz1{m=9WO_6!z4!u?/`08h5UGnA)9OUP#w5.a56v<91>A=l)' );
define( 'NONCE_SALT',       'jA2nANep #SH{>?XGekQvw2n)-i`6&.ktvNVxn4flL,j<1)MR$q)9&MZ,{rqR:[&' );

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
