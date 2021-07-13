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
define( 'DB_NAME', 'commerce' );

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
define( 'AUTH_KEY',         '(},qtgFPQir?gL$7j[;u;`b?{j<vQ{UBA,@b!#U%fgr>r38A, m)#bjo0o##P2Cv' );
define( 'SECURE_AUTH_KEY',  'y4)R}L3Qs8{)T=5EqQ$RmtXl()eiUxJ^VHIG}bK= 6AW!LBLwpmvy<IrqL+YHDDZ' );
define( 'LOGGED_IN_KEY',    '.*fj_7a0<k-x`N|H%AU%hUK}Hvw5B[*eX[ra0vJen1qu1}c]1(R(jGmK+ydM@Z;M' );
define( 'NONCE_KEY',        'Gg0qC>M|fZFVk8gz*!5KJR+a/f.1z&kZOKWc=llJ2&_tpk#5] q}bwq=S96DZnkj' );
define( 'AUTH_SALT',        'TN8pCm;A~/jaDEp/NX`j_<|T`V9?)*!1~vtYhGb9UhKVMf_7${X$Gn0.V3/=}9&P' );
define( 'SECURE_AUTH_SALT', ':3 W);n6[PAM;lc>muvtp;o^amO&K9f4l#K{<[ziu%W&sH@gDi=*xY[;xZf9_DnI' );
define( 'LOGGED_IN_SALT',   'JlrMAA_=+n%q3agj^}reWQJDQ-@ua=fWXAv5Kp-&.LuPU{hAC}T;=+HGhHRiGFcO' );
define( 'NONCE_SALT',       '9mf2s5MP#)FOy!HQ};jn&|E]v^@pAG7fjwO?~b&H6g!,.ji~-^#v<D($`S&O77GU' );

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
