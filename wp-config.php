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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         '0j|?]iZ:],ex?a~p2M| +2FZ>/L5JH%^;{> %wh1cdOpz({U8!RX4B,RFZ&,+]4Y' );
define( 'SECURE_AUTH_KEY',  ' d30)1;W>vrB%]K`1R4n1=m~CDwN--@GfF]#M95,:g0<8Ks&6`6}V!X&$.scMc~e' );
define( 'LOGGED_IN_KEY',    'L[zOjA?X[q>1={{{wk}$yf+zm,~{iE;ce=w1zN4ElS3gT{@#s+-9cD<Hi}}kd6V7' );
define( 'NONCE_KEY',        '@Qg$ye#(,7#@:| 9<H4pcJOFO2op.^l3E#jwnVOrw/TZGlc,{tiLMtP,9wW;]9,n' );
define( 'AUTH_SALT',        'RMsHZK?GsGjB9aJ>U]<QtxolyQ?d-@~j+#=X%R!8|#vPsD` Y|GZd_i}oY{~+LWh' );
define( 'SECURE_AUTH_SALT', '><9;#]PNg@!.(-N3?N=}*?] {IGY5&j<&=q&4JL;P&K#CsrP6]/I24ftt.y$KQqT' );
define( 'LOGGED_IN_SALT',   'M(xu2_@eTW76PT;<kQ0 EO;Zdw$ig[}&-GFfME#Qz[|I.}gu~Uj ~%U(>jP_o?%R' );
define( 'NONCE_SALT',       'ivS_pIl[9`)#%C3[? ]M;0Ir8mF$K76R6lx]yB@{KsN!%^:WI<]yAbuzDGWZg2<]' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
