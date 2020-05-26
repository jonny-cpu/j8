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
define( 'DB_NAME', 'jitech_db' );

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
define( 'AUTH_KEY',         'qQQwI/n?:H3p/!dmKT-fk5GI:vn/Z[PO0B7B*P/6!zo74Y,A)gghON=*{]J`4|Vs' );
define( 'SECURE_AUTH_KEY',  '8 )NGpzJR7m}=MBV&ec`?HiL_B[E>}1<~z]_{N/>@z]{5<]IoL`{KwUps,:+S`ZF' );
define( 'LOGGED_IN_KEY',    'Kkz@lFxzVn6D TFgGkdtq%,EwNh+NYSL%UODqhHFV;]-],VkTCqx-aIPc<sO-0;v' );
define( 'NONCE_KEY',        '6i  zsx{bCrx/.VroZ(oWBQ2UN<IzQgbwd[m5ma&|zg@/a2KSHbo#25r>,Sh|qv>' );
define( 'AUTH_SALT',        '2eXO|uXB /B# :@uFXFCB]uk%H8gkn<$*J.)dlArK*3nlAvBDxzqsp+gsvj&4nMR' );
define( 'SECURE_AUTH_SALT', '6%67F.$~}tr#Ka5.]A=$a4C`B??v3WBPM4l||`tr-mX&D:{]]?[t`laM+]JBP54e' );
define( 'LOGGED_IN_SALT',   'D8tqNBlsN(Eg$D;^#7zukRuOX6eVlNm8w[vow@&=Z%tfA(vqE24:^C9<]h>!82!b' );
define( 'NONCE_SALT',       '3tpAwE|_7?4TtwIrMIEg.SXvKiHqbSvV)#E<@)Xby2eGLAkIu -s0;TL*_n`Qs4s' );

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
