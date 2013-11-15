<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'harrisonschaen');

/** MySQL database username */
define('DB_USER', 'harrisonschaen');

/** MySQL database password */
define('DB_PASSWORD', 'Harr18ison1!');

/** MySQL hostname */
define('DB_HOST', 'harrisonschaen.db.10201940.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '[r$LBSud(;BKMkj99||5#RG9JkQtWJ$,43])+~xq@~k6-$Z]-uX.w-ik`M=4agc>');
define('SECURE_AUTH_KEY',  'FhPS az6ItFv`i%&@.E&`~k%99+Q(2{|/m,)d~WQxr+KaKcSd7m&|KJIL?]T=Hs(');
define('LOGGED_IN_KEY',    'JDwFl>VKWT@ypUNs>+-YpV2!YZCH-[11.R$Sqj4qJf,V1orkhX h}Hvq{<Q|q_hN');
define('NONCE_KEY',        '9z`M!ph~-GMIq0#TH+9u,|.=sHk+Kw{e^yF3ZG/gY3/FYI-N~pB/NGQ8ZZjYFBe[');
define('AUTH_SALT',        ',^ N@IfERk-?xqxPE42/ v z-%`>8j#+Z)d.mf8VQ+w3v1iA2b}:gmgu0X*B$eGH');
define('SECURE_AUTH_SALT', '+G}b;n`*liqzJ`VIvXu{-MPC=mlW-dSjv%F65,XhyNnp@ykf-OP]oX,4Mn{]Bh-P');
define('LOGGED_IN_SALT',   '9rsOozP${%#,b9pa{Adi^-QXr)oME)Ds!%p6_<`[_Q8/;}BcB[kJ4(EJ#U5xD,ju');
define('NONCE_SALT',       '+~ku+gT2/S|5A`_yx6RD`?*@&NQ3D7s+:x0FGz;uP*;4A}Ifvc/o?cv+|0jC@GP3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
