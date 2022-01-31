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
define( 'DB_NAME', 'WP_Glo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1111' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '/Nyq$>}|JMYLX}9SC5[Nw*vVa<UO2g?p%u!5~ djk5:cR`iC0>bDT2NBx=_@$)Cn' );
define( 'SECURE_AUTH_KEY',   'Pk}1->@ho|`SJ@RQon[z-Cj!BX`_GPxnjT.{8?khIk<2p]xj#b72IJ48)PcSvR->' );
define( 'LOGGED_IN_KEY',     'i}P,gI!e<4(R_L7qzefy>EiHmG_O6&uAZTy{M5Z@`Wx}wKZ}=(z5T;@d;)3IZpJZ' );
define( 'NONCE_KEY',         'j0_y4BOD:V_gPT26e|Lk{sIMr,nl=hqOU/:8&QC!+su+L^j:]A5_Z~ib.;+;j*/n' );
define( 'AUTH_SALT',         '@53fQq.0Rs0TQ)|~JwjLqFh$/W`f t>5/70vV)C4bL!{t`wk?r=O5=P!<98>dr;V' );
define( 'SECURE_AUTH_SALT',  'oXb0y3}oT3_uG!d3$=z6X(4u31$D#DR>9n(hS^ji2Dpl3,0&pllT o)qGg>q$E60' );
define( 'LOGGED_IN_SALT',    ';n%~$)y{3SKeD9.!Gd,Kwl$h`JvlX Fo=aTp5snbx}}Ua%XShvMvDs5,Mv-qE| 7' );
define( 'NONCE_SALT',        '#6IUel.-IW!){qoN?J8j)vs-k(eUQuPlXH1.s^|#-K;a/8l-|,nO p^Jc*<#h+Dj' );
define( 'WP_CACHE_KEY_SALT', '%J~[&V:9kk:Qji%e<~B{t$NQM4Iwb|<DMh+&#vE_5Orx=M~@b<:aNKA37oS)L?j}' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
