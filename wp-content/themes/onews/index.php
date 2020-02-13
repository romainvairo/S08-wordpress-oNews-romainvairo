<?php
// Permet d'inclure le fichier wp-content/themes/$THEME_NAME$/header.php
get_header();
?>
      <main class="right">
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Latest News</h2>
        <div class="posts">
          <article class="post">
            <a href="" class="post__category post__category--color-team">team</a>
            <h3>Lorem ipsum dolor article 1</h3>
            <div class="post__meta">
              <img class="post__author-icon" src="wp-content/themes/onews/images/icon-dar.png" alt="">
              <strong class="post__author">Darren Collison</strong>
              <time datetime="2018-03-27">le 10 février 2018</time>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pacers, perferendis, saepe.</p>
            <a href="" class="post__link">Continue reading</a>
          </article>
          <article class="post">
            <a href="" class="post__category post__category--color-news">news</a>
            <h3>Lorem ipsum dolor article 2</h3>
            <div class="post__meta">
              <img class="post__author-icon" src="wp-content/themes/onews/images/icon-john.png" alt="">
              <strong class="post__author">John Marchill</strong>
              <time datetime="2018-03-27">le 27 mars 2018</time>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos id impedit at quo, expedita iure, molestias error ullam distinctio vel.</p>
            <a href="" class="post__link">Continue reading</a>
          </article>
          <article class="post">
            <a href="" class="post__category post__category--color-news">news</a>
            <h3>Lorem ipsum dolor article 3</h3>
            <div class="post__meta">
              <img class="post__author-icon" src="wp-content/themes/onews/images/icon-ohz.png" alt="">
              <strong class="post__author">Olivier Hertz</strong>
              <time datetime="2018-03-27">le 5 mai 2018</time>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Location magnam, distinctio! Vero blanditiis nisi veritatis id perferendis, quod quaerat necessitatibus ullam nobis quidem ipsam optio sit quibusdam ad quae voluptatibus doloremque!</p>
            <a href="" class="post__link">Continue reading</a>
          </article>
          <article class="post">
            <a href="" class="post__category post__category--color-work">work</a>
            <h3>Lorem ipsum dolor article 4</h3>
            <div class="post__meta">
              <img class="post__author-icon" src="wp-content/themes/onews/images/icon-spr.png" alt="">
              <strong class="post__author">Jack Sparrow</strong>
              <time datetime="2018-03-27">le 31 juillet 2018</time>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pirates molestias molestiae, obcaecati et. Veritatis, laudantium!</p>
            <a href="" class="post__link">Continue reading</a>
          </article>
          <article class="post">
            <a href="" class="post__category post__category--color-team">team</a>
            <h3>Lorem ipsum dolor article 5</h3>
            <div class="post__meta">
              <img class="post__author-icon" src="wp-content/themes/onews/images/icon-tr.png" alt="">
              <strong class="post__author">Terry Rozier</strong>
              <time datetime="2018-03-27">le 2 spetembre 2018</time>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Celtics nostrum obcaecati sit odit eveniet, unde hic animi molestiae, odio a quia aut perspiciatis dicta.</p>
            <a href="" class="post__link">Continue reading</a>
          </article>
          <article class="post">
            <a href="" class="post__category post__category--color-work">work</a>
            <h3>Lorem ipsum dolor article 6</h3>
            <div class="post__meta">
              <img class="post__author-icon" src="wp-content/themes/onews/images/icon-tre.png" alt="">
              <strong class="post__author">Trevor Bayne</strong>
              <time datetime="2018-03-27">le 27 mars 2018</time>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nascar vitae assumenda reiciendis doloremque, quisquam.</p>
            <a href="" class="post__link">Continue reading</a>
          </article>
        </div>
      </main>

<?php
// On utilise la fonction qui inclut wp-content/themes/$THEME_NAME$/footer.php
get_footer();