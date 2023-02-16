<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

define( 'ITSEC_ENCRYPTION_KEY', 'fT9zTXgvaV9qZ0lMM3BmcG9RSnZCKTo0U3d1bDN1WnU0S1ouX3xDMGhMQndLLCU1UyBQR29Sa3pLVTIwfSwzdg==' );

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
define( 'DB_NAME', 'chaima' );

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
define( 'AUTH_KEY',         '9wixvb9xmp0qusbocc8mhagrqqa1talz9apcgl6qfze1uuealmjs32eupgfdrjtu' );
define( 'SECURE_AUTH_KEY',  'cppx5755tjg0owennipisaivp5h2tpphoby3pxedy3dguigf5mo0wrf4n8vm1yww' );
define( 'LOGGED_IN_KEY',    'yvdkzacdffchqylz7ej4m7pvbvy3gehzzjoannyc5weck3opl9dzudqwnvozw4e3' );
define( 'NONCE_KEY',        'am2cicek3y8lqecxqi0clvjinwsbtcq02pkfaszih5j5ywqcpdvc4zzaswsf44au' );
define( 'AUTH_SALT',        'm1qpzwol03ynluazfyq8xwhpomoudirh1j60xuotvgdbyq33keqcj16uwtpyqvrl' );
define( 'SECURE_AUTH_SALT', '8ucnfsbh4vbhonhwqwdqtkyqk8vo5toa4nzrogxflhe2xwykmismoymqgce1fonr' );
define( 'LOGGED_IN_SALT',   'bvd6dw6galcxma58lmlzba1fktibzwmhxpvtoytf7tlkzb5pz89vvig72b0te5sg' );
define( 'NONCE_SALT',       '1snnu2ivbrkhhvga7zjjggaqknmpybcfojbp3bu4uaga24foe86ypsvsmmbgwt7a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyl_';

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
