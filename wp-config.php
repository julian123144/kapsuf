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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kapsuf' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b614aac6b6e28dd7029e7518b0ef89832789fffa1fb318c5' );

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
define( 'AUTH_KEY',         '-ZNnBpLduKD^~$I_pi+I[J-bO&C{Du}Bd*{=,U7lC(9/TqmP+SF-@tGMI_Z]_Nw@' );
define( 'SECURE_AUTH_KEY',  'HnS><U#3^[oai0dF X~Xa__lEO+>BnDAJy2c>qXOBohyrnae+@Fj$n_qZbOpW/Sa' );
define( 'LOGGED_IN_KEY',    'wQ@Ijk-L{ry(CLV5*.kP(&FqQ~l1Q|+OVn s+wAIP_5]`AONml]O9!dSy{~t@(%6' );
define( 'NONCE_KEY',        'McaUZ_#&~QW!xkKe;5Ae^@,v#cHfx:a^L<g}`y&EnWo|]XZ@cIA`@D0yQ4;D3[h!' );
define( 'AUTH_SALT',        '`CJ:GJV~!)$a1Whb4i*WVAm%i~gf*z/q]ONX1X4f>WpjsJH#EBpJoV$da,d6v]l&' );
define( 'SECURE_AUTH_SALT', 'ZBQqlbz|.k7#_329]KRgdr|9R/iT[-`Bo_wJ2wv>(y2}5k&@B$Tw4n?pvJdY0cLk' );
define( 'LOGGED_IN_SALT',   '0,CHSVjWlzLI72lU_}h86y9k;!i|-A[CL#,d((v=IQSj)a$Fu:7h`-d-pKpLEX6B' );
define( 'NONCE_SALT',       'W1ac,=?@&IjoH<`KL8>V-bo2/rH4oi!H4qPl_`LY!@+:%]@_tN^@0_G~ci-<[17h' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
