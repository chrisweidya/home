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
define('DB_NAME', 'ss_dbname_5b6c4j7127');

/** MySQL database username */
define('DB_USER', 'Kq84pCjL0IlwoLc');

/** MySQL database password */
define('DB_PASSWORD', 'iN50mFSqMzKToR5h');

/** MySQL hostname */
define('DB_HOST', 'chrisweidyacom.ipagemysql.com');

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
define('AUTH_KEY', 'Txgre@P|SI)@LYfkKZZDi@(r$Z|N?YlXxD|Z$%u$LJ*)shwZ?Lg$gKP+iTR[]FRoZpeOD)LlJlpn_Jpb><[YMYLCFbVjCBE(=@MnsnSEG?>{w/N_[]kHE)]sUWDThBZ>');
define('SECURE_AUTH_KEY', 'vS;sV=/}fQC/)tLiwYv-_tTQ)!MYy!Mpmk{jQz&e?k)}Xa|AKx?HMwhVicR@$xpCH=FK;sn=ylM^t!%%PBZ$Y;&eI!QqKQ!*XY{C^FLejtV^tPJ_hlqpb;?fhlvQw^lw');
define('LOGGED_IN_KEY', 'B@s-Wrp-nU|v&D{/@y{(U+ezjo_o&>z$cN^>*xCbCGu]uwU}=(@KKke{LdlL?NydwTJ/EL?JuY&af]l$YC[C{aqO&=-iP^GGk)JEyh]Hh_wUQ/(dHyj>IS&{(g(crsBi');
define('NONCE_KEY', 'BIATHHiP/yNJ>mO-iZQ)ES|b/wQ=KabryP[kUC@^Z+;M;E]-P)b/LZGASW@KA[gajD$CVX/q;)tfWgtJuE(o^m)<Eb{umoB|>xvxQJ{HXGfCht+[qMCXy>|I%VL^n!Ss');
define('AUTH_SALT', 'mU=J>rGgOOaq$vB|*-XHjuI<|^)agse%GH-Vbz<akB^$HgBC@jPdF]Q)-lF&y;KTBzSq?PB{loFOw{;dh}p)Pzco&N?Die-MeTAjO/Mm%${@fqP+BEg]]z;sT-&]oMCi');
define('SECURE_AUTH_SALT', 'W<UwoaHIJ*IXLZpexJb%o;ymF}|G/>Y_h@(Rv(_[^ZdWtixmPqzoA/ER-HQszRfhKMWwv$V=GS%Wo^[B|Q*rIC_f@{_B|ZC[yDMTOuDg{ZLzTW[-tjGiaEojb^%TN{hl');
define('LOGGED_IN_SALT', '$gQ!!j&uW/+}l*=x>tKWH<;LIvOcK=UPD$wbFc(FbS_G-fgw[wBx&f]wag{%>^!]BqhkujTVifXZWjc?$[g)SJlR%oT@jJVaGXRP%s=y?]Vei}]mUXaKTC/QGqt?}%Id');
define('NONCE_SALT', 'd|I>l<BcZ=aU+%L|wq{fl($%Ens@vId=+<P)cAsrfaDGBQXMgI!hU)[-RZ&WNGaN{RQjFI$ZQ-r%?&NWsF<LG_knas}j%gK{iq;CM)c%e^/%_l-Ix=^-a{^gombSH>t]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_coeo_';

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
