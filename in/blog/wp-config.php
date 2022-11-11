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
define('DB_NAME', 'career_portal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pssVcs2016');

/** MySQL hostname */
define('DB_HOST', 'ondemandbimdb.cmodsu4unvmx.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=,(}<r~hn,@{!c2pNiNh97-8|nC^()5[j:ODXg,n?Dt{+#Me.7O4^vZO;JA:I<gS');
define('SECURE_AUTH_KEY',  '*}.qK?<k6y(9Ma}FtJGr]9 q?|[h|Uc! %y#raOOpRX!gS1uRrzL1KDx#FjuB<|>');
define('LOGGED_IN_KEY',    '-x=aT1|j%{}.?4Fb&,*s*Pe5Mddg*kO)K][(10bdYiC}(B2.cBVmZBR5=6qVyJem');
define('NONCE_KEY',        'iF/AXxBFuw$/)UCMhcXEA6be(?e^XWCj=GjK&SHz3E/+S,z* ?s*[,fb<_zfX0B5');
define('AUTH_SALT',        '9ZBJ$s,#[C:=CO@SWpC>RsB13dI93o_dFa+GWDHr=R=Gk^u>Au,`I|LXgM[z94pc');
define('SECURE_AUTH_SALT', 'N,FwF~vKlftutAqxig,L] J45q&Il(kucp1BG(<`^bAtJ#4=h;2y2M</*)1#+iU<');
define('LOGGED_IN_SALT',   'Fy2xhf:Pa-5RHs;C;eWrrRs#`cY#]lN?HlKct~2mtSHkUq $RDl+Gp_eEnf1T3k*');
define('NONCE_SALT',       '.;R0B/R{ll,J1k}n.rupP TOV!U@))NBgY#w%FEQQ/z484R*iXb{u4==:9t r_}p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
