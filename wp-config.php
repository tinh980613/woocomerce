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
define( 'DB_NAME', 'woocomerce' );

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
define( 'AUTH_KEY',         'xH9H0MZbpZt07H2DG#XK&,V p257$f;*H62*We>HtYH]1cY?!|SFJ`YQzpvDI;/E' );
define( 'SECURE_AUTH_KEY',  'q_:@l$[c:$K+/jx+<R<KNm=&1mLD>wL.s%0Psg&/L?!R8KRaM~=DAKyzm9~!RiZn' );
define( 'LOGGED_IN_KEY',    'SvXGqM5`W&*Czs|mYT &!/ [5AlP%!7sHE>&lOuufvT}z@z+~[X%K@g{O2wWC0b1' );
define( 'NONCE_KEY',        '/c$MLS@%&*yL^^JP-nl1<Cp2Zi5V9qX<L#Go4l7#vzv<fd;yPs!2ZM.l:8t4 adW' );
define( 'AUTH_SALT',        ']x%J9cE:jss?fp~79I)tXrS_o(+T+i`k!-@v6m%xYYIj7jX3Mkw,ek<HQttE;J)p' );
define( 'SECURE_AUTH_SALT', '>;$%9+{PO:hDeR_4!oT3EuxkO,-:*S+37l4CNf+=J93bd%,VBjE2;k>f<kncsjkb' );
define( 'LOGGED_IN_SALT',   '}tPK^dGh&3[@jF,2%q|%xW}>qd2S,?|{LgP@[eLhJfT>kZrE)=OGc]-IByB-hd2l' );
define( 'NONCE_SALT',       '];!7IR/NhrDdm>;Av}mWnr5<TmGmgs_m9`-eY>=MaCy_IjSRJ,zI;QxPL3|5H~N!' );

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
