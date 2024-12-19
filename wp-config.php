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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'fg%@`_x%~JSxMf]_9V35!bsOo]nOw$nPmo>]eNq-SBj~KYLdFEu5,vI1b7PG<Fe0' );
define( 'SECURE_AUTH_KEY',  'V6NDm]XOC;Vu)/ffQ)M}2t!3Q/6t^kl1!-=zmMf~>&55H+xQU!%/G>!%[(:X%&|U' );
define( 'LOGGED_IN_KEY',    '2*gCx@tRQ~sm]FQ0kRP7A(!c<3>NLqFzdGP?C,bD0#40;ENJYoI1M,P/}_y~8P@I' );
define( 'NONCE_KEY',        '^W0)C$4=>#Sm/ys>egq^4uW~}Z$-F>C~of-3caV*T7sc0r{d(N|30WU%~a>0K8,$' );
define( 'AUTH_SALT',        '$yeT3j~i{&cx2NO@70 >h1_vMg#W3_t<9gko;BG.g~Y/4 [sU}GXHXG+t+vFKRKb' );
define( 'SECURE_AUTH_SALT', 'cL82^{>Df,Ha$=#Wk^O4}*xp7=2O`lOE|FoU7b{eLYQitQ$a&~-GQQ>)z4%|*j8s' );
define( 'LOGGED_IN_SALT',   'Pjz@k`32p-FN`eZ)?Sh+Ef<dSn]D=u*/zz<M4r8W(kr_*LWEhhVJhXkKRw7YY:n]' );
define( 'NONCE_SALT',       '(BWG6gCKC=KgRi# _$1*#*#_}7#:FIVEBliP|Iy9B6k{OYPFkKBwH)aI |c*]+RK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
