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
define( 'DB_NAME', 'Cart-Checkout' );

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
define( 'AUTH_KEY',         'c0$*E#S3i=>rNy{^DoH`Tv[],AYujR&l7`U$8-HvXZ^_,QHg7:[hC/`3GnuPe^Hn' );
define( 'SECURE_AUTH_KEY',  'p%7r!&:3RE5N`LR/S3KU%EVidt#DUG(/^)/X7 b^$^A)G5nS}Gl*9l7fuEii-wd3' );
define( 'LOGGED_IN_KEY',    'aNi7Qb2nA A3Ik5+r)PZMP@0iO^/@C@nio^M6(i3vR/px(z~p]h]7bg3V o0U?O{' );
define( 'NONCE_KEY',        'QUrd=Ul=JDB-*S%(2^*gn<z$TnlDjTa`Nq-eLl<+as*/VsW)%=yCHczWtqmZ+W15' );
define( 'AUTH_SALT',        'q=4XbBZ6Af7TJU,l`^4QG^B4;mAr}!9.GVTwZC1Rp{](>w&{/-,#%cs.ha/S+dqA' );
define( 'SECURE_AUTH_SALT', 'VwFBr8wT4&u9G[>k9 kaDVg,2!/&(F~lS(&P(jDGv+WZ!Wn&U;v4cL,:lNHXPe;A' );
define( 'LOGGED_IN_SALT',   'yoVGsZr?,CB_T/Z/ASFAIsr}v=p@j |XGg#e6v!*KU~99Ue#%8vIjMt,6(/nWVaw' );
define( 'NONCE_SALT',       'gV(`+,4A_p=} ?4]o;N36^d^qP0?t718!k5=lQgc s}%>zLE/][wJ$iRj+xZq,(!' );

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