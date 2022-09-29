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
define( 'DB_NAME', 'oem_' );

/** MySQL database username */
define( 'DB_USER', 'phoom' );

/** MySQL database password */
define( 'DB_PASSWORD', 'phoom' );

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
define( 'AUTH_KEY',         ',#+`v[6)?w]zIQERiSyrz=Jz]G KvJpU?6n09,4)`lUz2qw*b];<,&J#Qbl[39ou' );
define( 'SECURE_AUTH_KEY',  '?P5#JwqB,:^K()G8 A{:xvF#c;W$Z^b){MBA>@N?.&&}rCA#njYPjUpN?/:y5|3>' );
define( 'LOGGED_IN_KEY',    'TB@;F)05_AyHNG= l>@k7rr>RCAQ)1xaiU_f2T24ICB$r/O=onE}y@C@3<,W7&je' );
define( 'NONCE_KEY',        'P(!/1F{j;C%C1uH{OBj!)_5Iss+2~?WJYMO2o5CT:Cp9}*7+_k[xr7eOsiFq2a/0' );
define( 'AUTH_SALT',        '>&qleV#5:)I9B#GDu7.7+i@*2XcI_ie^^r@kH!3>bJ);;>9:<:Q|Krw1$DTFF{P7' );
define( 'SECURE_AUTH_SALT', '(N_}rXQ:FUJzK$,UjD:>C3?1571`S$M7[kLFs_|+i{}rvn5X1mUZ[mrAXy-,A=9f' );
define( 'LOGGED_IN_SALT',   'MwLz3lOWu>Qx}#xmLS6e`r/},zgX~s,BZIQ6x8dtq?Zmyo;h[tfw)Y.Cqz<t8[jR' );
define( 'NONCE_SALT',       '1lGZn i`~r<iw#^Cmb!wDVNvibvfy/P[=~T^`?LRw3WBsXoaZ}3)H VXlKw4,6~a' );

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
