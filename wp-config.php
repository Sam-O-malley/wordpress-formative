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
define( 'DB_NAME', 'AlleyCat' );

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
define( 'AUTH_KEY',         '|l>|?2.@ScK%FpmYt*~H+x`;2m0?RX1gDl:hKmn).qmiG2HgQ/TN]b&|xSnF5QT+' );
define( 'SECURE_AUTH_KEY',  'X?#hW`#<*q.Jp5} A,n4Iu(2GpKxUb]v?T&PBOj$))t<gemeD^5YjBmPgUR 50DB' );
define( 'LOGGED_IN_KEY',    'Gpi9{|>D{R#J*ct5l21*{CY_K9NhsI>* 2tnp(CFX!067FNHpR1jq4txvObQlWJK' );
define( 'NONCE_KEY',        '*_pRw$%1 %;vQO5*Nf,9vQ)YZ`c:KF.jEo+i11eW ob]|dy}#+!;Q>n<m[9t|V7;' );
define( 'AUTH_SALT',        'M?Z0M*5l eMvu?Rxh?#nT1Ba4Mt8}dbr@XTo/&KN7/.sG%dxOj5dZM7jQ%ssOPab' );
define( 'SECURE_AUTH_SALT', '._4Z1_,LA,<dxZ|-N,6:K17i}MYJ143]fK#,Owr3*mVm5a7+gRFA7O@H5c>~8NhM' );
define( 'LOGGED_IN_SALT',   '-:^D,Uj}|.ftA~!Z5U2dUnUrT#1k;b[@:vD`2,NTCBI,hUD}7v0NJ^kywHo]q3rF' );
define( 'NONCE_SALT',       'x}RB92CC OARKL@UD2Uv,/(Wa;DYECQuVLCUEZ7@>Pd!5{lEKm|IE|5:p| pI37}' );

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
