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
define( 'DB_NAME', 'udemy' );

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
define( 'AUTH_KEY',         'D)kgOCnAmEFg;:4h[)c#?JNoFMMYjU/*-R/Ex]g^nmUvCpB=9p4Jb+``a1go&n+Y' );
define( 'SECURE_AUTH_KEY',  '1@f;i0W=;[m%WpW|cHMsJ(xs@ Wh30 d`u~9Ugu{E1}Yg#6/:@!t?S#yAbL/!T72' );
define( 'LOGGED_IN_KEY',    'O(2Y& 1I4cN54l+Dz2T*1ud};uvREe1K -B`M.TKKpsu_oc*~vR AV;e%$&4DUN*' );
define( 'NONCE_KEY',        '%;/+UaCUl.4AIpy F)sjQ-Mxk0Pe$`Kv^4DjUtSoAg*:I8xGx(c-EWwl%XNZp&qo' );
define( 'AUTH_SALT',        'uYcmJLo.v>fLl<p+1qcwP?@TwIpD9.A@(dLm2[:SZ[ oIKJ4aJ O97Ry?cM.UM)?' );
define( 'SECURE_AUTH_SALT', 'o7cMjE4Mn1~GNF?..p4I(`):#)T5GZT?8 yeqM=j0CQ)T#Jv<;Kx8s,qTi8(,L-S' );
define( 'LOGGED_IN_SALT',   'OdUp/4YH7)V&<&oAvr9Y7A`@J*8M2b(=f?IS_`dhdB$7Q6:!1Uz}8I,P+(XtuRjq' );
define( 'NONCE_SALT',       '6/g>^da`WcB~ocEq`O1zK<xawl#9VBTN/-0r;(OxbLs*:@${YAT_!mop*q:gSy9H' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
