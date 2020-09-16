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
define( 'DB_NAME', 'dbeeccvxvgst9e' );

/** MySQL database username */
define( 'DB_USER', 'u6nxu4x2v7sw8' );

/** MySQL database password */
define( 'DB_PASSWORD', '75vwxrjyvp4q' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'T2SXqUiUSd=-bh}4 HPvXz/8d8(RlWNwXKG,c5x{P$WHEROg>(HDsOVR.bu@p Fe' );
define( 'SECURE_AUTH_KEY',   '|Q0}+V; BQr^T/Kk&rD~T{/hytqu<H:6fknb*`D*Dh6i0l=d4}0bCXCg D}#]f:f' );
define( 'LOGGED_IN_KEY',     '{l&G0}OM6dWFtQL$Lg.PrSq=i2jBzQI&Wn[Z9P*h]mPYV[wi1@u[H&U(;XU31*9d' );
define( 'NONCE_KEY',         '4qiVLPg52Kgg;IX=L] .cPk+#29cVTM{FMstxPb@S-ep^a<2ib]C!mf8ggFf~aPG' );
define( 'AUTH_SALT',         '$u4G=$Kb*Zr%3k?9$Vhhiug~QPF!PRNkz|:antL)xW:xvG*^GOE}+S^lv2ila-xL' );
define( 'SECURE_AUTH_SALT',  '!62G*h72O,4XX=yNo.+}qeN8|GT(+o7!{i}q?p$U1(2p}>@m@tKKN$p3HK4Y|.`r' );
define( 'LOGGED_IN_SALT',    'y<;e5[Bx:Sak/kQu[dHNm0flj0j.J55`<420_/< HXjPe E?[o}2JVUZQ6B5WZ,a' );
define( 'NONCE_SALT',        'E{x7AAu$SUo}C< 3|P@a!+Fz64Owa>O`[}byc!- &KC?s.$tzpxI#HbQ+/ehYDg=' );
define( 'WP_CACHE_KEY_SALT', '-LiC(39;*/pya$ov.c|8pwjO]zd/hPr~6uanQiM~XNfhUP+xjH/dYjb)8,1_V9K&' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eiz_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
