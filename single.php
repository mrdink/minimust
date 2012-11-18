<?php get_header(); ?>

	<section class="eight columns centered">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>

		  <header class="entry-header">
    		<p class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </p>
    		<p class="entry-date"><?php the_time('M jS') ?> <?php edit_post_link(); ?></p>
    	</header>

			<div class="entry-content">
  			<?php the_content(); // Dynamic Content ?>
  		</div>

  		<?php
       if ( has_post_thumbnail()) {
         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
         echo '<div class="text-center"><a class="fancybox" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
         the_post_thumbnail('feature-image');
         echo '</a></div>';
       }
       ?>

			<footer class="entry-footer">
  		  <div class="row">
  		  	<div class="twelve columns">
  		  		<?php the_tags('<span class="muted"><i class="icon-tags"></i> </span> ', ', ', ''); ?>
  		  		<div class="pull-right">Posted in <strong><?php the_category(', '); ?></strong></div>
  		  	</div><!--/.twelve -->
  		  </div><!--/.row -->
  		</footer>

		</article>

		<div id="post-nav">
    	<div class="row">
    		<div class="twelve columns">
    			<p class="pull-right"><?php next_post('% &rarr; ', '', 'yes'); ?></p>
    			<p><?php previous_post('&larr; %', '', 'yes'); ?></p>
    		</div><!--/.twelve -->
    	</div><!--/.row -->
    </div>

    <hr />

		<?php comments_template(); ?>

	<?php endwhile; ?>

	<?php else: ?>

		<article>

			<div class="alert-box">
        <?php _e( 'No posts for you!', 'dink' ); ?>
      </div>

		</article>

	<?php endif; ?>

	</section>

<?php get_footer(); ?>