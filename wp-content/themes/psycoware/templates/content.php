<article <?php post_class(); ?>>

  
	  <header>
	   
	    <!--<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>-->
	      <?php /*echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleft' ) );*/?>
	      
	      <div class="miitem">
	      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	      <div href="blog.html" class="label label-default light"><i class="fa fa-dot-circle-o"></i> Business</div>
	      <a href=" <?php  echo get_permalink( $post->ID ); ?>" class="scrollTo label label-default light"><i class="fa fa-comment-o"></i><?php printf(get_comments_number()); ?> Comentarios</a>
	      <span class="label label-default light"><?php printf(get_the_date()); ?> </span>
	      </div>

	      <img src='<?php the_post_thumbnail_url("full"); ?> ' class="img-responsive homepicture"> 

	    <?php /*get_template_part('templates/entry-meta');*/ ?>
	  </header>
	  <div class="entry-summary">
	    <?php the_excerpt(); ?>
	  </div>
						
	<div class="item"></div>
</article>
