<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'persoanl-wp-1' );

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
define( 'AUTH_KEY',         'xf4.uhMK8^8Xd7zc{D.hu%iv!Yme,UB_5C}d27mSh*z|9h2j|asb]^<hV)dowMHk' );
define( 'SECURE_AUTH_KEY',  '1A*aW)w=-qom)nYLx`mC.)nHU q[I;ez0JSItT@Ns#3KOOOBBkgMP:ia6 0rMZdh' );
define( 'LOGGED_IN_KEY',    '*Gu*>{V{&CYYt9|7H!j__`JZE]5qt8&IlDQr1R+`+YteI`D@EbLqBQ1bG^ixw~[w' );
define( 'NONCE_KEY',        'uTNY[w5_=Mc|>x(Jw7=!4)7f+to]Wk`3MO)z=b6:=,T:m%W.;EZR]ci~;]QhZg4P' );
define( 'AUTH_SALT',        '1T6D)4`G*z21u=8{|IvthS0pG_l#x(+`@q|[i8)3_**s]u3dFY>BL_$pt0{DSwpv' );
define( 'SECURE_AUTH_SALT', '~6y:5^{(]2(zE2%LbmLOOm6;p_ur8:Hj]q{#9s ;hg_yu}&{kk;pbBR5)Pf<On&4' );
define( 'LOGGED_IN_SALT',   'x&e`i1{^)Y*e@bY+tVS1fzlIW&]:f!L<R^2Wld%QtkXP5h}Qf8(@Wr6%yx54m~AR' );
define( 'NONCE_SALT',       'j^v/-Rx{?,<gt+SUj(xgV<qMg]u!^1%j&H~?Ch*=*l}BZ64B:7GM)on/ccc5BlS/' );

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
