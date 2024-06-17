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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_woocommerce' );

/** Database username */
define( 'DB_USER', 'api' );

/** Database password */
define( 'DB_PASSWORD', 'api' );

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
define( 'AUTH_KEY',         '([,#XtP8jjXjes<?q5dP>NB=RMEGf}7@50:TFwVj[zJ<bPh?[=jJuUL~EVnj9Ep7' );
define( 'SECURE_AUTH_KEY',  '5jdOrwT%v?A%.zZZu]ol8UG4b-kSF/8^F<-An8Na-:>FWxe*?1vkR?,^F.V;}9oQ' );
define( 'LOGGED_IN_KEY',    '_G<i*NKlkAgvGz&Q7aA67UX`n?)9O1/+ca>2R(h.3fJ/08EQe*EE4J?{~+q{!-.o' );
define( 'NONCE_KEY',        'p&)UC&N&Bif`]=Z4hf>3qEA!X0WW.e{b~Tf>&j<R=U2`,L5xa&@stact7kZ$IJg^' );
define( 'AUTH_SALT',        '9dQpc5Xnj<x{2:}mLwSQu<N-BF_.ELghpy;8aPztJkk>8O[(LCY70ax0|L])?M+$' );
define( 'SECURE_AUTH_SALT', 'QZU!CPhdNXWH~^Aeh~dRc%$Uc7R;~I8!;6hZ57AAt.t$iK;}L?n|~H<v5f(BE&+D' );
define( 'LOGGED_IN_SALT',   'O^{#G/;$i%P]nVss>P[-sw`<O1+24gxm_TFT<G#|:v<}o:iy/dk1xSaOUGaaSY+s' );
define( 'NONCE_SALT',       'q#]=Z;^@pCXzY4IT/]$D9DnAp/#}^erw{}OTXV?/La)jwmXd[Azu^QlK$)v!M$:Q' );

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
