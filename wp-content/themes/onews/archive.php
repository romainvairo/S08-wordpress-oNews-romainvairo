<?php get_header() ?>

      <main class="right">
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Catégorie: <?php single_cat_title() ?></h2>
        <div class="posts">
<?php
// Pour récupérer le contenu à afficher
// On utilise toujours la boucle simple WP
// https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/loop.md#main-loop
?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <?php
          // Comme les "partials",
          // on inclut des "sous-teplates"
          // contenant du code répété dans plusieurs templates
          get_template_part( 'template-parts/article' );
          ?>
          
          <?php endwhile; endif; ?>
        </div>
      </main>

<?php get_footer() ?>