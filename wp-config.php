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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u479109589_76wsQ' );

/** Database username */
define( 'DB_USER', 'u479109589_T4WEM' );

/** Database password */
define( 'DB_PASSWORD', 'SvkO8L1Qs0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '#}zM+KLGq+9/oD/*6g3|.3)MP* f!#EY>vZ`]%.0j4juE@~tr|Npe5KB7l9s`M,W' );
define( 'SECURE_AUTH_KEY',   '2HF7b;E#dfKPKkWff}{wBM1HZ+O>`zvg(T^VW{NzNkp0sN|OER4)++d1oSwBpJ![' );
define( 'LOGGED_IN_KEY',     'XvA#AeS-tpi~VsM3_-gNpk.,Y,f?V>m08lchC{;`nPdn%RMu44S99i>L0%bXe?:;' );
define( 'NONCE_KEY',         '3I!O!bM1rXLzzqTEgzkAqv2q>;Uqj>([Ldn@.DT=<kQ,K{<|6TM.;,,^:T9T9H$h' );
define( 'AUTH_SALT',         'zH)U4p~LNr^y)p!+(4D.(P3I^Ts*>5RR<&aduD+o$NOG6i$AKc#o*7inShRL~!d6' );
define( 'SECURE_AUTH_SALT',  '!JJy5Y0~.;I&kLati|]8toR[%n{N-{ycQr2*6z6d`r8H0#w{+yA=U4V`wPk5kv5R' );
define( 'LOGGED_IN_SALT',    ';oDlV%A@uCS=b[(.`*lcD3+n28C7QnfLK[w,K(By)WH]oyvUObDSO#:`<?!cvcwd' );
define( 'NONCE_SALT',        'SBOx2`XaW-,g.L=@e=3*V{Lq`<5qtub_w[69+2,m,GBNJXmYs+;+?)bn*yq8zf!y' );
define( 'WP_CACHE_KEY_SALT', 'RY9E;uRC$fdxP*j![kMRy0p5Q*hm(Pvd>Q()rF]$X&OE8nJE[.O3waa,gD^Ood<?' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
