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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         'j;/;tLFEo@`X+KRK6G7|vn5h&3%|S}=6Oai}x`}]Nm_Rc8e)+sK*-}Ll=F$PCz2+' );
define( 'SECURE_AUTH_KEY',  'nJqG1-Jru5 PAV6;92KmXW<_xC}s)Kj6yvC}&DoU/HtVFT3_Fv]:<eMy4*kS9_i,' );
define( 'LOGGED_IN_KEY',    'U5O+!Q3h}<l~=r;&P3]VJ#wx8 1dZ:>XioZ@GjVK,VOJ`-/-I.H8v,4$wE*R9.YZ' );
define( 'NONCE_KEY',        'm*IaI,<.)Hu]UPrzFgW?g$%Z?SZU+i#-o>N6p{{6MB/@Oi;3bE1kv~enZ+unOj:*' );
define( 'AUTH_SALT',        'F5NJnzuO9<Hp-,b(.HS3i>#A[?_?_@6 ^FS*4Gc)!zYU`nQJjg4Dp+.+Ka,ciYj`' );
define( 'SECURE_AUTH_SALT', 'oqoCzo.X$9*/0Ns=99 S:u#lv5chDbq8d,H--Uq?=kbeTXM7eOX.WWl;ND<Es`~D' );
define( 'LOGGED_IN_SALT',   '`/+jBZQyc,{xO#$w>2O:qjc|PRl~.,#8A!bxH 8oC~ZB1b(rdDDnJCRuhkw-]%|z' );
define( 'NONCE_SALT',       'E(x@S(GH)uawGos;rptF{f@EERKzhJGWx}@&&J> #{{CDVgmM7a<:=C+?<5cU+C^' );

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
