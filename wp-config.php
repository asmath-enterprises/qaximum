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
define( 'DB_NAME', 'baboolso_wp452' );

/** MySQL database username */
define( 'DB_USER', 'baboolso_wp452' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PU9!Stp51-' );

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
define( 'AUTH_KEY',         '6eakkeldpvoykaz3ourivbcj9hjz1tfxnvtmjmo1zgykm4yfeqinehspbgll0izl' );
define( 'SECURE_AUTH_KEY',  'zxzwxdt3aic91khp72eyo06hnnluuwigcqgnjqchbdgjsuykdbvxqsghxanrk3il' );
define( 'LOGGED_IN_KEY',    'gburhajmbxbqfcckf7lrhwpd8p1ov7s9qn93pcajb7mqufgimozmfya5socxvdy1' );
define( 'NONCE_KEY',        'oknvuigtrvjewmz34lztv8hw5lacbejotrhri3reoewknlzickjdqmvagjtrtm5x' );
define( 'AUTH_SALT',        'ujgz9fh6fgvefrc5n1korntkpbp3gc7hqaqzmu7xshppph9yayrrsu7bgqyteqlk' );
define( 'SECURE_AUTH_SALT', 'kdkosbqcqbkj2plntuwzmcncipgc3vri0msiwg8npq30lhs9xsmd7gegmhkfdkkk' );
define( 'LOGGED_IN_SALT',   'uiwrnydxymxgvcvcqr5jjcwsx9yoopzzens8macpjhyttytancgnyjhl9fmkrqmu' );
define( 'NONCE_SALT',       'orcxz4ww9woa48jb07vqz9igakjqr17afa88pdz9p4elsrelki8gzivtpuih4xnw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxz_';

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

define( 'SMTP_HOST', 'mail.baboolsoft.com' );  // A2 Hosting server name. For example, "a2ss10.a2hosting.com"
define( 'SMTP_AUTH', true );
define( 'SMTP_PORT', '465' );
define( 'SMTP_SECURE', 'ssl' );
define( 'SMTP_USERNAME', 'dev@baboolsoft.com' );  // Username for SMTP authentication
define( 'SMTP_PASSWORD', 'b{^twMQx&6os' );          // Password for SMTP authentication
define( 'SMTP_FROM',     'dev@baboolsoft.com' );  // SMTP From address
define( 'SMTP_FROMNAME', 'Baboolsoft' );    


add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROMNAME;
}