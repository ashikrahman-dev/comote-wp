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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'a8$:E@zO6rSoBm!(S#;N G&vK@G<wrA%TrKldIU=9En6E::hg5+6+H{W}dP/jD%M' );
define( 'SECURE_AUTH_KEY',   'NYNd}f_jR(]p;N,]@[?3A}]FC{bVs|$7;7l?Z{]BAs9kz<MD(ftX|{m1Q nY]0lq' );
define( 'LOGGED_IN_KEY',     ',q# (b{bu}s:G21A<x.Z1uPmpeh%z1Yd,P1xOlb?i?>sStTbn!9tB?m0hu3j=LW2' );
define( 'NONCE_KEY',         'M3ONxq1/t)(GJPj4,tp//|9@nP3s{YE]Lm^ `Y24ko-zNc^#xJBjG4#~1;rZLan7' );
define( 'AUTH_SALT',         '|9.xAK|/CT&5^-H[hn_/(eJ/8$/AUctJRM@GEw>XqK^^,G=}iEr9lE`[fXZ8# 3z' );
define( 'SECURE_AUTH_SALT',  '&;#}<JZY{Oe=POLj+[A?[;Ukg/M/Wbm2rmiNcU^GlJ t@ccc&u{]<ogC3_JJ+;pQ' );
define( 'LOGGED_IN_SALT',    '2mB0c6kVyAnF2 O@8bNyxs&1E,!/HkWPWoSb;7Avi3yh/{6V$+A&quFDX07Z|eD#' );
define( 'NONCE_SALT',        '(br%&8pck rF^e>BFhf7;8ZunNCfsDAO)~*eFE?U~0OrA:0qK:Pb-!={iLZOvPCU' );
define( 'WP_CACHE_KEY_SALT', '#ts)3+<J!]c3BSR e6|(H`Hn9O<<V3;txLJ6APB9tZ!}:[-xDMvo:hdFGFNQN^q.' );


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
