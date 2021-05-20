<?php

get_header(); ?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <article id="post-1"
        class="post-1 post type-post status-publish format-standard hentry category-nephews category-uncategorized entry">

        <header class="entry-header alignwide">
          <h1 class="entry-title"> <?php single_cat_title(); ?> </h1>
        </header>

        <div class="entry-content">

          <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
        </div>
      </article>
    </main>
  </div>
</div>

<?php get_footer(); ?>