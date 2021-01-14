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
define( 'DB_NAME', 'cookbook' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rd112358' );

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
define( 'AUTH_KEY',         '*7pitt4_tpvwbOo^G!QOt,D0RD.8JCY7uf#-kk;}H]`zzNgb^Nlw^r 8KI5>r*.d' );
define( 'SECURE_AUTH_KEY',  'W~Am?f)8 $!aI%}8S%0VA?Ga(dD[MfGTo{8t#iT3a|_=ckN:hO;-B;BB=YR)- &Y' );
define( 'LOGGED_IN_KEY',    'JEeZG-yHzS35XTR:8|w y)&d,g)CFyv//$81NZ@[v_Xr/w4J_WvHG{G;MM Mq_wG' );
define( 'NONCE_KEY',        'cRBT/<o[/.u,Zvs;^;QR.&j*l?%rg D8zg]}_^[2nH7H6gaE/F:I2|d+aJC5pF=i' );
define( 'AUTH_SALT',        '_wuMLF3|OG/>fu4<;Hbb>v;v1b&z7pA$6Sz<E8xHFc2T)_:Rw)cl9H_mI UF:|@w' );
define( 'SECURE_AUTH_SALT', 'g3k59Pr]5gt-}!_P@pwXtr)@>MDksB{Ool`2}u6U_SHsZM%DV}<Q,YH6Q_^m`:<w' );
define( 'LOGGED_IN_SALT',   'nv;6)1e#pEx{HG1m~Cs4N?$?__]fF8mT`VmO7*H&I~0Aw]onD>W-VIep&LDbbA*b' );
define( 'NONCE_SALT',       '5:zTS JG6+c=9Vq/^>eY?*s{lIG}:=;}o :w QaL$q+nU;(N4@~`4{XJ7u(bGE7M' );

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
