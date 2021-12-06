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
define( 'DB_NAME', 'portofolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'UU9+=^:(`qM;YqO]en>=p2[H(i4aT9hSSd_8_rL#!&((-e;nrVuI,=Gm%[?RPfga' );
define( 'SECURE_AUTH_KEY',  'bs7A2e>Qij0YVwE0C,Y+QP/KSVn.5{e%6RN)x,oHr6i}OF{s_kPtlcn_><AJ5k:?' );
define( 'LOGGED_IN_KEY',    'P_R>tN]0 gNc?8UBSHCujgSL(5)Ctz=/}o}JHhdAz4~)U^Km69s 9NkB%nX3f%G7' );
define( 'NONCE_KEY',        't60@@Qc{!<EdHA-&lpt56DU}: 4ZVzw*%3+$}se}oN{S02X08w{Pmm;$ M}:AqHH' );
define( 'AUTH_SALT',        'jlT zlkFX3YlEGt!g9:Yld6FHV65M]LsM$7u0d]OoRJ==wt8O/9P*P|D-8/n#E.=' );
define( 'SECURE_AUTH_SALT', 'K4,Q))7O0@`Lip~seHs{pS20S`{U0pD+[vYnLRj<s1=OG%)SiRf`e?#?>?Ap#i=O' );
define( 'LOGGED_IN_SALT',   'cHM-tM@lRUD(H0H;SHRg~Z8+:Zvk3=t7hC]^G,+6;I$$*6so9_<R8OS4k.*Q7!8e' );
define( 'NONCE_SALT',       '=%J_<?~U+:chV/?$ {6#[I(+IhE#z**]NV`*L,kw=$iTjF?80FI@}lg[B_p0k$tH' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
