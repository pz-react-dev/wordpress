<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^3>V<5C~C16_/Koq)E.i=b{6tcKW>uhfel&$bG0oj|T9{M}jAhzx/oLhXv^|jtk~' );
define( 'SECURE_AUTH_KEY',  ' #PlQ}t7Q[!JLGQFH@;F#r%LKjwb9# iH~WY(e^C?V,39%R$gamdFP+WhvHoEVL~' );
define( 'LOGGED_IN_KEY',    '#)jXu:8OPl+YV@xZ9TsAnHdk%%G; ?`@;5unlK/pqrNFapWA*naDSp9[r5$:#jhy' );
define( 'NONCE_KEY',        '7U7&g|ckO|&J5h_8|N,mB2gE (9a*}/}u 2a( yO]]U}lA_fPgu-4uHB[x@+M ,g' );
define( 'AUTH_SALT',        ' bW|r/o7WxMlE{}S~1J&1^%x5IKvNv} cO6QVgMP[hb;@_,$h)6*cFG/|>R:L*XY' );
define( 'SECURE_AUTH_SALT', 'F&-y-UP.MoXB#j>D*{.ib:GI<tQ%R_HZ<!g|6 ]|rRzKW?x7VO4it5P^T7Cel@!]' );
define( 'LOGGED_IN_SALT',   'aaiGDVdRBMb|z^> @3rnEWHI-fy[bz&%[PfFjb{X W{o`:FwnvyMf0pXChWrM6TD' );
define( 'NONCE_SALT',       'W>Ewbz[?g^}J#tA!`tTc/MC$F:;Nr90<L`K-Bf$D!%QXc wj}Gzh|Z=%?_2n2 PW' );

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
