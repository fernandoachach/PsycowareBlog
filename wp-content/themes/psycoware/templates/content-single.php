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

        <br>
        <hr>
        <div class="container-fluid">
        <p class="socials">
                <a href="#" class="rounded-icon social fa fa-facebook"><!-- facebook --></a>
                <a href="#" class="rounded-icon social fa fa-twitter"><!-- twitter --></a>
                <a href="#" class="rounded-icon social fa fa-google-plus"><!-- google plus --></a>
                <a href="#" class="rounded-icon social fa fa-pinterest"><!-- pinterest --></a>
                <a href="#" class="rounded-icon social fa fa-linkedin"><!-- linkedin --></a>
              </p>
        <p class="fsize16"> Tags:
                <a class="label label-default light" href="#"><i class="fa fa-tags"></i> Business</a> 
                <a class="label label-default light" href="#"><i class="fa fa-tags"></i> Design</a> 
                <a class="label label-default light" href="#"><i class="fa fa-tags"></i> Technology</a> 
              </p>
            </div>

        <div class="divider"><!-- divider -->
                <i class="fa fa-star"></i>
              </div>

        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>

        <?php comments_template('/templates/comments.php'); ?>
      </article>



    <?php endwhile; ?>

    </div>

  </div>
</div>