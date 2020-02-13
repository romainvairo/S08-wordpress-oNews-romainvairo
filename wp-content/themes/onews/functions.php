<?php

// fichier contenant toutes les fonctions sur pour le thème
// Ce fichier est chargé côté back comme côté front
// Par contre, les hooks seront "lancés" côte back ou front selon les besoin de WP

// On déclare la fonction permettant de configurer notre Theme WP
if (!function_exists('onews_setup')) :

    // Cette fonction va contenir de instructions modifiant le comportement de WP
    function onews_setup() {
        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support( 'title-tag' );

        // Je veux que mon theme supporte le système de menus intégré à WP
        add_theme_support( 'menus' );

        // Maintenant que mon thème supporte les menus WP
        // Je définis les emplacements (pour menus) de mon thème
        register_nav_menus(
            [
                // slug => Nom de l'emplacement
                'left-footer' => 'Menu de liens dans le footer'
            ]
        );
    }

endif;
// On raccroche cette fonction au hook "after_setup_theme"
// Il faut le faire pour chaque theme
add_action( 'after_setup_theme', 'onews_setup' );

// avant toute déclaration de fonction dans ce fichier
// on doit tester que la fonction n'existe pas déjà
if (!function_exists('onews_scripts')) :

    // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#d%C3%A9clarations-des-css--js
    // Je déclare une fonction permmettant de dire à Wordpress
    // quels fichiers CSS utiliser
    function onews_scripts() {
        // Pour charger le fichier de style à la racine du thème
        // wp_enqueue_style( 'onews-style', get_stylesheet_uri() );

        // Pour charger un autre fichier css que celui par défaut
        // 'onews-style' : nom unique pour chaque script
        // get_theme_file_uri( '/css/style.css' )
        //      get_theme_file_uri = fonction Wordpress retournant une URL absolue dans le theme actuel
        //      '/css/style.css' : URL relative dans le dossier du thème
        // ['onews-reset'], : tableau des dépendances => autres styles à "linker" avant celui-ci
        // '1.0' : la version du fichier
        wp_enqueue_style( 'onews-style', get_theme_file_uri( '/css/style.css' ), ['onews-reset'], '1.0' );
        wp_enqueue_style( 'onews-reset', get_theme_file_uri( '/css/reset.css' ), [], '1.0' );
    }

endif;

// après avoir déclaré la fonction qui s'occupe des scripts
// On définit la fonction à appeler une fois l'action "wp_enqueue_scripts" déclenchée
// (système similaire aux events en JS)
// add_action ~= .addEventListener
add_action( 'wp_enqueue_scripts', 'onews_scripts' );


if (!function_exists('onews_post_link_filter')) :

// On teste un hook de type filter
function onews_post_link_filter($url, $currentPost=null, $leavename=null) {
    // echo 'onews_post_link_filter<br>';
    // echo $url;
    // print_r($currentPost);
    // exit;
    return $url;
    // Ca fonctionne, mais mes liens sont cassés (normal :( )
    return str_replace('http://localhost/o-clock-Titan/S08/wordpress', 'http://nicole.local', $url);
}

endif;
// après avoir déclaré la fonction qui s'occupe de modifier les URLs des posts
// On définit la fonction à appeler une fois le filtre "post_link" déclenchée
// (système similaire aux events en JS)
// add_filter ~= .addEventListener
add_filter( 'post_link', 'onews_post_link_filter' );

// Fonction permettant de définir la longueur des résumés
if (!function_exists('onews_excerpt_length')) :

    function onews_excerpt_length() {
        // On veut 15 mots dans les résumés
        return 15;
    }

endif;
// Une fois la fonction définie, je peux "raccrocher" le hook de type "filter"
add_filter('excerpt_length', 'onews_excerpt_length');

// On souhaite supprimer des "action" par défaut de WordPress
// Supprime WP EMOJI
remove_action( 'wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_print_styles', 'print_emoji_styles');

// Supprime le lien vers Windows Live Editor Manifest
remove_action( 'wp_head', 'wlwmanifest_link' );

// Supprime le lien RSD + XML
remove_action( 'wp_head', 'rsd_link' ); 

// Supprime la meta generator
remove_action( 'wp_head', 'wp_generator' ); 

// Supprime les extra feed rss
remove_action( 'wp_head', 'feed_links_extra', 3 ); 

// Supprime les feeds des Posts et des Commentaires
remove_action( 'wp_head', 'feed_links', 2 ); 