<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db_sm');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'ARZA974');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1Uj7f;30?%A7:Z^LuR5@Tk.8VF  )84V7L(qgdZZ0AIc|)Sin*+|7UAfZwsBhH2+');
define('SECURE_AUTH_KEY',  '.uaOAf-Q]c97wRVfh?BU|oC7%8-9J<u_A+n`FtS>=|_HLc2kIhG%vzfMln-ghS?E');
define('LOGGED_IN_KEY',    'vE6+V~At=+K+]oVYl4uUI+5N+B@[X+=~Un+{%b&pekaoyaU}>L[,#75;_&80Izk%');
define('NONCE_KEY',        'KL#+kh9S97|N[-uI-0p7Xe!n=CIz:}+I%!0xjUS,wv%ptFl,nQ0|Gq,2eF5ELv2v');
define('AUTH_SALT',        '@<#!AdlQ_L#`?OtE-Jda3J=zSH+K_#kkn.q*P6sezYK^BIQ=+vSsY;R+W}6v,0/J');
define('SECURE_AUTH_SALT', '34]nv4GlX(Ia|.GCIy]#cv}P#+E,[>{F*{3tKRg }41k-|1:#/:t+?M]WqN4}p||');
define('LOGGED_IN_SALT',   ' F|=Y R10kkSt$d>>D0-jbz8n0k7U2w7.0AAhG<-+1I|r)>S@]rVQQ4yv@p@9F$o');
define('NONCE_SALT',       '*UX|3HOQ)CY3sU9yR:{%6BeCOXH{#k+A?0.UDCrWQ(<r7D!QbosG.$qqKK/vh}CC');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');