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
define('DB_NAME', 'socialHPNetwork_DB');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ':2KB#0S|O8A?)y %z,_!$L!hc&:NHJW6E-6]Nr-4OK`Y)}MM3INJZR0-3q!0r:ka');
define('SECURE_AUTH_KEY',  'fg?ATmQHBOEbB@dkGta2;#}0O0*?Y@j:8k_}+5E4#)RI-g_+u:g#|3+eu9Qd]u)z');
define('LOGGED_IN_KEY',    ']lvNSr D-:9JnskY%,WDtwMn%1uNVl4egDRf3+<&yxCx~G.7e%xl=99w3L[>jnM:');
define('NONCE_KEY',        'orKb/YMh}LR<,hvxPubv,C$r9CrWnEm;wHu7)Pul/f@6Edne@<*]d6c:.LF&>U]M');
define('AUTH_SALT',        'OU#;c.qQFa?($sm/C:I%:U:;7x[|vwI(G(k1))Ew_9lFPBO=U$VZ^.Cf^wCHsRoq');
define('SECURE_AUTH_SALT', '=}Uy;ke{psY0R2+#b~z3Zx?7kp#6 5L4|7YtHyQf+h4;6na>D`a~I>cedY[5`f&.');
define('LOGGED_IN_SALT',   'wgD$@C#?UQ{rlC1z(*>n03*r^}kBT$[Y;i4Pc`I:s/k,YA>XG~0x$vxs62{b:J%u');
define('NONCE_SALT',       'W+,;J0{s9QDy(XhfI8Z{3[u)SwaJ)%:_R@**<;$dU_]`0Y}Glf#g=baYF CepwS$');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');