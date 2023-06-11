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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'netlifydomain-test-3' );

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
define( 'AUTH_KEY',         'x8B=4P51`a7O2e^MYHEmKA-#|Gt=]({.3<YOW8+@^Zb CX^=+y .rs_f6x=zF&0G' );
define( 'SECURE_AUTH_KEY',  ':u!;<<$QsluYW}04pJlMigbU(^Y?.Gtq(&vG!O*;;i17Cl6TxaWQ`tHNaLe{`!lP' );
define( 'LOGGED_IN_KEY',    'Y7RV+kxT(UIwEgjy7Rl38o3)FX,>glrs<f_2 **UIE7u*zZ_7U`IQd+(qz0D!|T&' );
define( 'NONCE_KEY',        ')q%TRU%a_Xg-tk7+$=JE=_M7!+J_5KdhaQqr(|!9fTuBO _2IoabY+[zjf+:F)hL' );
define( 'AUTH_SALT',        ']epej%7hL##D?wvGM7-)W6&3|[x:Eyh$&# -WId/9x]@x8HC$-Z<tg%QAwsVKbCG' );
define( 'SECURE_AUTH_SALT', 'QW6LYqWvX#vugE(jGb*P5uPaH{V3!F!Ph%pRvX^(:f;Ca{560T!c]5%Uq@)d6TZl' );
define( 'LOGGED_IN_SALT',   '~VmyY+_CA?!&B>KPp.5p(-/(1?hSl=8Z~Vz540v7sT 3he!y}s^(HyM0Io(86C75' );
define( 'NONCE_SALT',       'CGMo`Y&`x]ZR>kzQCSu;]]Vd4Jue3VHxMtf4m/`ui-3rJ{?;by(X0O[UqN%)I[[8' );

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
