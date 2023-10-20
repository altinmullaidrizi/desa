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
define( 'DB_NAME', 'impact_rec' );

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
define( 'AUTH_KEY',         'EWCBv}N[52>3OYL?PZqS)086y*$@NLsTpe[UE69{Y<<X|ju>MX[.4%I84.S Sq2J' );
define( 'SECURE_AUTH_KEY',  'K1~I*cFDm:l-p&GGIU9L5o;U~+oT/yILKGQd/y,[ToS6/=dS^bv]JO/E}6/{m8./' );
define( 'LOGGED_IN_KEY',    '}8*@Xx0tu =z0_f:=vQhEhDl9SfiCNo_1HY1(U#t(^vS(zLQk+b;O];W1AG7]@c8' );
define( 'NONCE_KEY',        '~2$WQfRJgq _05N:@?X/}QuefXZ|Z@l.K{yw*#:D$LdB7qyBP*E$|]mVh.@#*@3a' );
define( 'AUTH_SALT',        'EW0IJTg iIb8e]mR2^cyb5uk_}^S<z>!l8P9d_cc5R=dtCWJ~H;QBQI-}L>!G/4u' );
define( 'SECURE_AUTH_SALT', 'D0g;gFq.Y_g~*K1Z?LE$r<.PqG] /DDPn;dz>oY6x9Z=bc9twY<Pi3X7f895{^By' );
define( 'LOGGED_IN_SALT',   'cg2v?B%k3It^uK7/hv`W<!NSJow8/;5e&X!yS%c<5?gT>5-Qlh;Qai.ypoHh.k4f' );
define( 'NONCE_SALT',       '~NbL1jNI.%-a_ymQcO$/Lhr<l]RoYt/9D,SnAm%Qlxp_`n2*YA}$uKs_{Z.*<v*?' );

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
