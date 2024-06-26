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
define( 'DB_NAME', 'thdb' );

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
define( 'AUTH_KEY',         '!4@D!93h7lr7oQZbz]mVC_d=-3}r@PntC3W1I_<=_?CI0a)x>LkGR{5@tvW}[A|=' );
define( 'SECURE_AUTH_KEY',  '^[kV#y:QB#hFEk6>wK%)/ld_m%?s87EN{}#^A-9J+DBo)|6^~!x`dzz8l~?UK#-6' );
define( 'LOGGED_IN_KEY',    '9ns1kpa&y=|:OAMH}2t4(*_ZI#^E5NW+SL=bxu)>ynL8-fyte_$;IE8M{PDG)N-U' );
define( 'NONCE_KEY',        '<$Az73->h63@B5i8#j=T0$[$CATsT1cAb#^cPB1a7vl{Uf  3&M{MzIne--@TdGg' );
define( 'AUTH_SALT',        'a27L9MM06Sc~##)d>[Go395l4:7;xnK} X7^+1NXmw84Tj|-Ct<neww+r*lj1b#Z' );
define( 'SECURE_AUTH_SALT', 'O[OqDx4(k&s$EJJe%T1K3*JZ$?X8+bl |NILji1Tgb`KKmLqLY|`:3;|A=?yxK[|' );
define( 'LOGGED_IN_SALT',   'Ip},9OO ajdpd!w;5#)).$XP*`uM(b0U@W0SK1llY,,nW@)PC`+gL&[JIA_$AA:*' );
define( 'NONCE_SALT',       '3=8gw@IrigtlGDci{ch2]FLRbBPut3;_$i,e{RoQS`10xL&VJ3d[eQScHdl%KM10' );

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
