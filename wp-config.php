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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{^)+8T%QCOy3Vw<NFPJw>#taL*:J>ywO5j({<E#dDl6re4_*?]YW(5O1[RLb@_x$' );
define( 'SECURE_AUTH_KEY',  'Pip@}2c&J1g:X)inu$5|]<o]d#&w>(bs;_AwZgB rn>y!?CrZG*]6SuAv;]}mvRP' );
define( 'LOGGED_IN_KEY',    'b$EMv=hY!d&yCQ]<[g}kQ|}1&_H)qE0J/zdD4kc1%j-*wi1zbUt&2kHoBL7OanqH' );
define( 'NONCE_KEY',        'v>eh~Pd~6c,CT(6y{$H!wog7V`,g  :WYyE7hU@l[@eH-u_;=_t^0`!acHiwzkKm' );
define( 'AUTH_SALT',        'M9y?vq8sw/1rC|OoH*78UiOHEyPGbj_8TXPd1${R+O,/]=Ib[XMa_}cW($}Iep6r' );
define( 'SECURE_AUTH_SALT', '5Y/Dn?<U@1A>0 gjXB3-^hs@nh`gu(1Qr==XmuQtLLYLv4#{WH`ez,,y<UETB]Y.' );
define( 'LOGGED_IN_SALT',   '`>VY%qN8_9:8GJ<Smuja#d&et4<Ki%TqJHV@MMC#$!xIFf#M]643VKOMb^,}Gz(v' );
define( 'NONCE_SALT',       ';Bpg~AMlOaUHO|#cE@0uFxQ*2 C7Fox@q,fxv/OEj,:VYC ]9G(W7#HwYaT)sO0K' );

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
