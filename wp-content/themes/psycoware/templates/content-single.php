<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <?php dynamic_sidebar('sidebar-primary'); ?>
    </div>

    <div class="col-sm-9 ">
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
                  <?php $tags = get_tags();
                
                foreach ( $tags as $tag ) {
                  $tag_link = get_tag_link( $tag->term_id );
                      
                  $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} label label-default light'>";
                  $html .= '<i class="fa fa-tags"></i>';
                  $html .= "{$tag->name}</a>";
                }
                $html .= '';
                echo $html;?>
              </p>

            </div>

        <div class="divider"><!-- divider -->
                <i class="fa fa-star"></i>
              </div>

        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>

        <?php /*comments_template('/templates/comments.php'); */?>
        <?php echo do_shortcode('[fbcomments]'); ?>
      </article>



    <?php endwhile; ?>

    </div>

  </div>
</div>