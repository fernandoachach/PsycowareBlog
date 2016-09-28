<article <?php post_class(); ?>>

  
	  <header>
	   
	    <!--<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>-->
	      <?php /*echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleft' ) );*/?>
	      
	      <div class="miitem">
	      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	      <a href="blog.html" class="label label-default light"><i class="fa fa-dot-circle-o"></i> Business</a>
	      <a href=" <?php comments_template('/templates/comments.php'); ?>" class="scrollTo label label-default light"><i class="fa fa-comment-o"></i> 3 Comments</a>
	      <span class="label label-default light">June 29, 2014</span>
	      </div>

	      <img src='<?php the_post_thumbnail_url("full"); ?> ' class="img-responsive homepicture"> 

	    <?php /*get_template_part('templates/entry-meta');*/ ?>
	  </header>
	  <div class="entry-summary">
	    <?php the_excerpt(); ?>
	  </div>
						
	<div class="item"></div>
</article>
