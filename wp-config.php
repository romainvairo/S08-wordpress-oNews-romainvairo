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
define( 'DB_NAME', 'onews' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         '1rLM&hqxakrWq dvE1e$XCi7,.xy>(1?Gn66o,-/tOXsMJov19x),jM2!8VHU1HC' );
define( 'SECURE_AUTH_KEY',  'CnUpsl`!:rxtXwWgKvf+=QA-}O-ipd^o|(o[V)s(*n(JS[b;@A})i(TbxB=0?l/X' );
define( 'LOGGED_IN_KEY',    'uPD;TK?TwK)iM oVfWO~tw@&G*C]YnZz!#cKo&ch>I:`SH}lcxR#c!v/66R}e7q1' );
define( 'NONCE_KEY',        'dv1W<Okd&Q2{IV4^JLSQ|W/=vn:N_l*z`{LEzhSO~]+|z>D0ZFxLxzEKPH/W%wn#' );
define( 'AUTH_SALT',        '*Fot,vPEwp8Oq$y+axx0&|07.}Ujp0P]]qaCkU.F_;vZsLle]=,&D:_eKuSDACYx' );
define( 'SECURE_AUTH_SALT', 'WG+,QWT4bEASIh41F5X,|Xjx&|zgv|pHP/*}3oY9Lvp9@eT|89+2OLF#Byld7>>Q' );
define( 'LOGGED_IN_SALT',   '`h$q}5?4T#j8O>`aU]^qCYFAlen)we0==%3~hb^XihC<ze)mC42Z-JK&|)6aRw@y' );
define( 'NONCE_SALT',       ' <{DX.0PVDbWfq.p{9vkfp}#<`jM?hl]kt)hYm`e9&O?)ca~fQ+2G9#F+voK<|<+' );
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
