<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'aigledemeaux');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'aigledemeaux');
/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'aigledemeaux');
/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');
/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';&*I])ub7o-3++%R_=6@G{(**AB`=dr9^l :j<%A9U%+x|v(6UO*>:S-;,l?nY_{');
	define('SECURE_AUTH_KEY',  '?Hg:Q1+5|X9J2P+SlvUGKi5+HW0wF=[g~u&i7r-VL+%E5Q_rY%+LPQef-QW8Ks(P');
	define('LOGGED_IN_KEY',    '_`,:K+|].D^@ih+Ehl8>U5Y|6v2P^V:V`zLU<@oKBC#,:@[jVZ88-WjJVt^P1s6K');
	define('NONCE_KEY',        'CD=,$|^^5F,;U=$Il!2bxLUHH[XG|MAj?~B%nnS=<DdC]w1*dX6|:l6m:cg,+!hR');
	define('AUTH_SALT',        ')a&OI3B|kslqr~=84&pa)99x OBesJryl7_sYgp]u(]5b f#Z9)yx-`A1l(.qY**');
	define('SECURE_AUTH_SALT', '__G|a2j_)TlLb*st]`R*C3cW!u** Ns{D+]%o0(-R3R9H-iL`$pCpWk)JV1URN/6');
	define('LOGGED_IN_SALT',   '3d></8))DA8yeU2[JDf2cU74T]uD6*UN[<+sMK]$;[~0!-62&]InT191cYH/Fm@X');
	define('NONCE_SALT',       'a5}=mTe]+8IhN61cw;98X $$Z$2_h#Q_kdbD8l_(m*0X:&A*Sf50N[ze}8UIZz J');
/**#@-*/
/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';
// Je viens indiquer à WordPress le nouvel emplacement de mon dossier "wp-content"
define( 'WP_CONTENT_URL', 'http://localhost/LesAiglesDeMeaux/content' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );
/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
// Si je suis en debug
if (WP_DEBUG) {
  // J'active l'installation de thèmes et de plugins
  define('DISALLOW_FILE_MODS', false);
  // Permet ou non l'affichage des erreurs
  define('WP_DEBUG_DISPLAY', true);
  // Permet ou non de stocker dans un fichier les logs d'erreurs
  define('WP_DEBUG_LOG', true);
  // Je désactive les révisions (le versionning des contenus)
  define('WP_POST_REVISIONS', false );
  // La corbeille est conservée 1 jour
  define('EMPTY_TRASH_DAYS', 1 );
} else {
  // Je désactive l'installation de thèmes et de plugins
  define('DISALLOW_FILE_MODS', true);
  // Permet ou non l'affichage des erreurs
  // Inutile car désactivé lorsque WP_DEBUG est a false
  define('WP_DEBUG_DISPLAY', false);
  // Permet ou non de stocker dans un fichier les logs d'erreurs
  // Inutile car désactivé lorsque WP_DEBUG est a false
  define('WP_DEBUG_LOG', false);
  // Je limite le nombre de révisions
  define('WP_POST_REVISIONS', 10);
  // La corbeille est conservée 30 jours
  define('EMPTY_TRASH_DAYS', 30 );
}
// Je demande à WordPress de télécharger directement les fichiers
// (valable pour les fichiers de MAJ, trad, thèmes, plugins, ...)
define('FS_METHOD', 'direct');
// Je désactive l'éditeur embarqué
define( 'DISALLOW_FILE_EDIT', true );
/* C’est tout, ne touchez pas à ce qui suit ! */
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');