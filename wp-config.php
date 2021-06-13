<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ClubVosgien' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5y SC3,%fo|BkiRgkKsgrN/2l[3Zm8}fZkA)KT8yN.WqR?yS2`>hAkn<gp9_)U0i' );
define( 'SECURE_AUTH_KEY',  'S!<kv}(3_5e)uhs=L=(>7guglOYm&~4dH&3Cx1=d:v:[aAmp0E|gyOX>yuf|2hbT' );
define( 'LOGGED_IN_KEY',    'th;fz4_EHd0RXKB$r5#xR1Y-q]ZUmBE.et+`<r6nQg y%Gj`]C8p>oGlcELP1/V]' );
define( 'NONCE_KEY',        'rS y_e3uYpxm-E48hmB~Lb&]zVzn!}zejF07pLrav_WN_ulZJB[n#vRMt=]l4<1H' );
define( 'AUTH_SALT',        ':6p;3O^8m4x{9c`4,Pl~!p|sVd$qf-gv$>8<N]p;YEeEdvmpSz@i4r/x5J? @WvD' );
define( 'SECURE_AUTH_SALT', '0pFXD&oEfW;Zcl{]a&,:zp6[]y]9]R3kHdy2|I>+k]ZopM.;,YW6wBW [<Q*a~Ku' );
define( 'LOGGED_IN_SALT',   'O|?}u1bd.JvC0+p_rN8&!6w4`Dv*3LaK*[2OFY+U^H):ut64f(z(+ys{[MKz)i(a' );
define( 'NONCE_SALT',       'DTM9-M,&yh3EQb7u$SB,,M)c<eRi0AzaU4ls /xO}9#TI~LBRmid%cNT(B,EjT*F' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
