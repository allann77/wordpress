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
define( 'DB_NAME', 'wordpress_site' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '3w<lkyVl=acS we{r{t}9`PKj$.AZVcxy2MMOw_Tho`^S;>g% 0J|jp!Nx2HLB:A' );
define( 'SECURE_AUTH_KEY',  'tC@sLoLB#~?_97<M(__etw1+$pRNw+fJVv72?NK@aD!NKuHHFuhLOb$zk;w{I=)3' );
define( 'LOGGED_IN_KEY',    ',cWW3loa=85CzV|[)!oK{WzcVN3%|6;z t1NNw`H}PY8A:W~.iAf!_cuB(6p7:H!' );
define( 'NONCE_KEY',        'jvk(Fb@q1h6e&_g2RMT:$6l[rVjETfWr8Cz8=@}8j>ir41{;UX`{tT(%bo)I9exM' );
define( 'AUTH_SALT',        'j .+E?}Jwq_vK.#lgZ=A[7H|N7q/t]mjkd0v23 IhAI)9_]?[AQfS]-g,hu.aj4m' );
define( 'SECURE_AUTH_SALT', 'QSwW_=RB5ttp0hyH>g<HR`TQ#R$EPrd*~ B]/u3wtH42+@ e W<cO-R1^Ru38#y:' );
define( 'LOGGED_IN_SALT',   'sg$Fo-Grz-;fHMqmdY-:rGR-HMdRu[vE}O[,BaKn-),S8vXO``YWD<Cs Bu+^!)s' );
define( 'NONCE_SALT',       '(,EqFiMJWziT=9FG90Pn[0==!}8yom1N`[6VlY]tequc|R[f}J2>_65lMs!;*3@g' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
