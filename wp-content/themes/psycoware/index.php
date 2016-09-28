<?php get_template_part('templates/page', 'header'); ?>



<!-- Inicio del contenido del blog-->


<div class="container">
	
<div class="row">
	
	<div class="col-sm-3" >
		 <div id="sidebar-primary" class="sidebar">

			<?php dynamic_sidebar( 'Primary' ); ?>

		</div>
	</div>


	<div class="col-sm-9">
		<?php if (!have_posts()) : ?>
		  <div class="alert alert-warning">
		    <?php _e('Sorry, no results were found.', 'sage'); ?>
		  </div>
		  <?php get_search_form(); ?>
		<?php endif; ?>

		<?php while (have_posts()) : the_post(); ?>
		  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>

		<!--<?php the_posts_navigation(); ?>-->
		<div class ="hazCaso">
		<nav class="pagination">
		  <?php pagination_bar(); ?>
		</nav>
	</div>
	</div>


</div>

</div>

<!--FIn del contenido del blog-->