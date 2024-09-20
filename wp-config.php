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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myweb' );

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
define( 'AUTH_KEY',         'Uuext9>(-.g4-^K>TLV#fIHGjy{imz`0wF4;(i/zXbzP1PrXxP+KlwD%.B8,>v}P' );
define( 'SECURE_AUTH_KEY',  '>/c-PM7S*X9Gm?h+asVI}`EoTp&rc.FsEj2*x*,Gd&Q7ijGs|&lr4q[`~j3]<~g{' );
define( 'LOGGED_IN_KEY',    'l{=j 1g`sl^(&O/;ThY$5MQby@,4.W&7zv@YR^7_Bx12@F<aR8*sz86Mt`NIB[sX' );
define( 'NONCE_KEY',        'T|#Q# Oqzl{E1GS[|2>=67 <i@t9T@WX=bVn>emVjWT@d5uzq/4df(oYL1vwr:.u' );
define( 'AUTH_SALT',        '=^!Ahi`ku) CR1r6**ELmZ%`_AJd7&HPH1Sii-:kgghQpd|s-?-k_{Nb0T7_`}2b' );
define( 'SECURE_AUTH_SALT', 'oqP`/%~Z=Fft[Ra{%*gvcV`qfvh>HaKx<kl::@I:Q0C<Yft(2j*%@Q@4l#1P}gF5' );
define( 'LOGGED_IN_SALT',   ':BwH$ADdZ,&~Oht&!mDkiR)+=y%gY=``1}xl~?vP<EW .^Ibat!kbEjX=th}Of-i' );
define( 'NONCE_SALT',       '<!Jzyl_1s]^~W 6xe+8jKNzMD3)mc/Sv*I!hqEW%~WQFmM46o|C4TQavvqD^Maj2' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
