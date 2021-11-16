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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppassword' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '?%EOH}vFXh)etRBMIM35&1Zo^6aUtkw|mr*haLRpg+Ki/*M)5bm9!QGTi=_`|Lub' );
define( 'SECURE_AUTH_KEY',  'MI_m1u=[^WTC3$ED$c^V.+|PJT#CmHPr<a{**>f sW^8FidpK|4t>v.hdw/WR/ko' );
define( 'LOGGED_IN_KEY',    '?Q+x.Wj<RsQ|J(0vaB:+80+]v9Uv#/@SLL=J<(4-g6wF&6+CP41(C|ZFe,-N<aGm' );
define( 'NONCE_KEY',        '7VhMy3j= -izoDi,^p}?RV6UVfEiDTN!sEZa4w*i]`^MVk*{h0a9>iE5:Q4wf[0:' );
define( 'AUTH_SALT',        'rU]ZVD3xj:v`0FLDpg~ @:6c7CCAF!O()lcpd;Y$|~X+f(v_V*5Z;-n`+a3&94CR' );
define( 'SECURE_AUTH_SALT', '-JXvl1xn&r8#Zg{=N+Q4&*4.CgP8.i#YF%zI7`!ZD&lRPbbgc(Cm9&qCR|K ln[0' );
define( 'LOGGED_IN_SALT',   'O^4aYdv_FTDIfsJgX`<!S#FmNWR-7ckS_~A/|ZNrfon^w+@Qh7]O`ae}K3*)ISq&' );
define( 'NONCE_SALT',       '{.&.IX=o#c}W/U6^&UqX|6y]6fZ((<1ZIB/oO@oi$1@r)|2%@t{=QDYeJ`y=i-&p' );

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