<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <?php dynamic_sidebar('sidebar-primary'); ?>
    </div>

    <div class="col-sm-9">
          <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
            <img src='<?php the_post_thumbnail_url("full"); ?> ' class="img-responsive homepicture"> 
          
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>

        <?php comments_template('/templates/comments.php'); ?>
      </article>

          <nav class="pagination">
    <?php pagination_bar(); ?>
    </nav>


    <?php endwhile; ?>

    </div>

  </div>
</div>