<!DOCTYPE html>
<html <?php
// Fonction permettant d'indiquer la langue du site au bon format
// https://codex.wordpress.org/Function_Reference/language_attributes
language_attributes('language');
?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    
    <!-- <link rel="stylesheet" href="wp-content/themes/onews/css/reset.css">
    <link rel="stylesheet" href="wp-content/themes/onews/css/style.css"> -->

<?php
// Wordpress nous dit de placer cette fonction avant la balise </head>
// On exécute les ordres de Maître Wordpress
wp_head();
?> 
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <!-- Condition tags
      permet de modifier le code HTML selon certains cas de figure
      ici, on affiche un autre background pour toutes les "pages" -->
      <?php if ( is_page() ) : ?>
      <header class="left left--contact">
      <?php else : ?>
      <header class="left">
      <?php endif ?>
        <h1 class="left__title"><a class="left__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">O'Clock Students News</a></h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <!-- <nav>
          <ul class="left__nav">
            <li class="left__nav-item"><a href="" class="left__nav-link">Plan du site</a></li>
            <li class="left__nav-item"><a href="" class="left__nav-link">Mentions légales</a></li>
            <li class="left__nav-item"><a href="" class="left__nav-link">Contact</a></li>
          </ul>
        </nav> -->
        <?php if ( has_nav_menu( 'left-footer' ) ) : ?>
          <?php
          // On appelle la fonction générant le menu
          $menuHTML = wp_nav_menu(
            [
              // On définit le menu que l'on souhaite (son slug)
              'menu' => 'left-footer',
              // On customize le code HTML généré par WP
              'menu_class' => 'left__nav',
              'container' => 'nav',
              // On retourne le code HTML plutot que l'afficher directement
              'echo' => false
            ]
          );

          // On va faire des rechercher/remplacer pour ajouter les classes dans les li et a
          // (on aurait pu utiliser des hook filter, mais on va gagner un de temps)
          // On ajoute sur le <li>
          $menuHTML = str_replace('class="menu-item', 'class="left__nav-item menu-item', $menuHTML);
          $menuHTML = str_replace('<a href="', '<a class="left__nav-link" href="', $menuHTML);

          // J'affiche le code HTML du menu
          echo $menuHTML;
          ?>
        <?php endif ?>

      </header>