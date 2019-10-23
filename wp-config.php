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
define( 'DB_NAME', 'motusmultimedia.ml_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'OZj_I^4qrT:KHk``b|aX[16cQDREa5q}&uzq6&4jl@R$`iRnkZ4E;Og,3:Rn540e' );
define( 'SECURE_AUTH_KEY',  '|@{Uc,4s+ .Rpm8q+Vuzb([$JseTn]g>9!*](+92K:Ieydn@umF>=N8)MsVyhh@j' );
define( 'LOGGED_IN_KEY',    '/7w0fW[(}5 8(>Moc3V+xRJU5F3, grUo~K^P^G6T}(a3*eKI5(e}I1vK{VbO8dK' );
define( 'NONCE_KEY',        '(j+nHe+=Xk;r`[&9guf:8xEhS^GPCZ;vPt,WHA{_V:l@N[{nkOLXpE0hsPJ*nNK#' );
define( 'AUTH_SALT',        'k162CMuN>; .s%eu$.T>V@#dhjqTqJI*,Gu^UowI kK?#;Vnue+H[2=UL$))T7]M' );
define( 'SECURE_AUTH_SALT', 'L63.%{dFl;7E6~zY/mD0,yRH{{I<iHy,cu3yuW%?=c)n^ukY2`Z9TO]g@We G7F_' );
define( 'LOGGED_IN_SALT',   'f|~QEzHQjO@9E9|>0c!<?dlkyNTIexE/Dd3^Q(z*N|JBHxqc80!nb6uu]:]<IqJM' );
define( 'NONCE_SALT',       'g;9af:$h1X|<-Rl.i:}Na[rIMR+HuH3+efZ?8`E@i>4UWwnK8L]RH:4u:XOX<mhI' );

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
