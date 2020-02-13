<?php get_header(); ?>

<main class="right">
    <?php
    // Même dans le cas où on a un seul et unique contenu (article ou page)
    // On utilise la boucle simple
    // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/loop.md#main-loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
    <h2 class="right__title"><?php the_title() ?></h2>

    <article class="post post--single">
        <?php

        // On récupère toutes les catégories de ce post
        // https://developer.wordpress.org/reference/functions/get_the_category/
        $terms = get_the_category();
        // print_r($terms);exit;

        // On boucle sur les objets WP_Term récupérés
        foreach ($terms as $currentWpTerm) : ?>
            <a href="<?php echo esc_url( get_category_link( $currentWpTerm->term_id ) ); ?>" class="post__category post__category--color-<?= $currentWpTerm->slug ?>"><?= $currentWpTerm->name ?></a>
        <?php endforeach; ?>

        <div class="post__meta">
            <?= get_avatar( get_the_author_meta('nickname'), '', '', get_the_author(), [ 'class' => 'post__author-icon' ] ); ?>
            <strong class="post__author"><?php the_author(); ?></strong>
            <time datetime="<?= get_the_date('Y-m-d') ?>">le <?php echo get_the_date(); ?></time>
        </div>
        
        <p><?php the_content() ?></p>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="post__link">back to home</a>
    </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>