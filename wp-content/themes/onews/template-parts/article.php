<article class="post">
    <?php

    // On récupère toutes les catégories de ce post
    // https://developer.wordpress.org/reference/functions/get_the_category/
    $terms = get_the_category();
    // print_r($terms);exit;

    // On boucle sur les objets WP_Term récupérés
    foreach ($terms as $currentWpTerm) : ?>
        <a href="<?php echo esc_url( get_category_link( $currentWpTerm->term_id ) ); ?>" class="post__category post__category--color-<?= $currentWpTerm->slug ?>"><?= $currentWpTerm->name ?></a>
    <?php endforeach; ?>

    <h3><?php the_title() ?></h3>
    <div class="post__meta">
        <img class="post__author-icon" src="<?= get_theme_file_uri( '/images/icon-dar.png' ) ?>" alt="">
        <strong class="post__author"><?php the_author(); ?></strong>
        <time datetime="<?= get_the_date('Y-m-d') ?>">le <?php echo get_the_date(); ?></time>
    </div>
    <p><?php the_excerpt() ?></p>
    <a href="<?php echo get_permalink()?>" class="post__link">Continue reading</a>
</article>