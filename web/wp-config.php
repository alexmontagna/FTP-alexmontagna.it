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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amitweb' );

/** Database username */
define( 'DB_USER', 'amitweb' );

/** Database password */
define( 'DB_PASSWORD', '$$1Kn4z7v2MI6!mRj0m' );

/** Database hostname */
define( 'DB_HOST', 'mysqlamitweb.alexmontagna.it' );

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
define('AUTH_KEY',         'ROXZ6@y|YnQ*YnQ)B3A@|3jI,.H[A~4KkL&j(AcXdWT{H<c8IYxNYt~Zo||*YnQ)@#');
define('SECURE_AUTH_KEY',  ';UPh%5U,T/Of*+4Y?7_!6i!wS0?k78j3?4ShAn;^gf^u@D_8r>**.I*YnQ)O>jI+X');
define('LOGGED_IN_KEY',    'L-b_fSlJBbs??EY4%K.J{VZ~!-jY1(@{@Co32O;;|4;7jA9*YnQ)Bg0h2FLvC&F/|');
define('NONCE_KEY',        'mjXQ?gkdISf5W<~$Ytzjl7L7g@?F5=T3s gg[K5{a5=*YnQ)&Cg4=XM-+h}h${1Vo');
define('AUTH_SALT',        'S^9uXT!2l=A1(j&Y0q6Lpq,zz]~gI0ea~`>/.*YnQ)3&+}^_ujq**DO*:*+7B{{nR');
define('SECURE_AUTH_SALT', 'ON@{{,>6r,!=|`G*)Ie^FfFh-@5vQf*YnQ)<Ro8_+P&Y5azZ5k|oSr0^-x2e=U(Pd');
define('LOGGED_IN_SALT',   '+!t%HA&Fe/K|t`Qrq_7zdMTplI*YnQ)gSAYuqF_-i#<+W:Kh{Baf(TV]E[p+a5Yd*');
define('NONCE_SALT',       '##HI$rnnrurU%1Ps*YnQ)&^v-w6[BP_%!USP!+^_`d*2lKW7ze=h&o>6 z(%ci7TA');


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
