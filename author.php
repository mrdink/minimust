<?php get_header(); ?>

	<section class="eight columns centered">

	<?php if (have_posts()): the_post(); ?>

		<h1 class="subheader"><?php _e( 'Author Archives for ', 'dink' ); echo get_the_author(); ?></h1>

	<?php if ( get_the_author_meta('description')) : ?>

	<?php echo get_avatar(get_the_author_meta('user_email')); ?>

		<h2><?php e_( 'About', 'dink' ); echo get_the_author() ; ?></h2>

	<?php the_author_meta('description'); ?>

	<?php endif; ?>

	<?php rewind_posts(); while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>

			<header class="entry-header">
    		<p class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
    		<p class="entry-date"><?php the_time('M jS') ?> <?php edit_post_link(); ?></p>
    	</header>

  		<?php
       if ( has_post_thumbnail()) {
         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
         echo '<a class="fancybox" rel="group" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
         the_post_thumbnail('featured-thumb');
         echo '</a>';
       }
       ?>

			<div class="entry-content">
  			<?php the_content(); // Dynamic Content ?>
  		</div>

			<footer class="entry-footer">
  		  <div class="row">
  		  	<div class="twelve columns">
  		  		<?php the_tags('<span class="muted"><i class="icon-tag"></i> </span> ', ', ', ''); ?>
  		  		<div class="pull-right">Posted in <strong><?php the_category(', '); ?></strong></div>
  		  	</div><!--/.twelve -->
  		  </div><!--/.row -->
  		</footer>

		</article>

	<?php endwhile; ?>

	<?php else: ?>

		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'dink' ); ?></h2>

		</article>

	<?php endif; ?>

		<?php if (function_exists("emm_paginate")) {
  		emm_paginate();
  	} ?>

	</section>

<?php get_footer(); ?>