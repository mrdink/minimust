<?php get_header(); ?>

	<section class="eight columns centered">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>

		  <header class="entry-header">
    		<p class="entry-title">
    		  <?php the_title(); ?> <?php edit_post_link(); ?>
    		</p>
    	</header>

      <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
      <div class="text-center">
      	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      		<?php the_post_thumbnail('feature-image'); ?>
      	</a>
      </div>
      <?php endif; ?>

			<div class="entry-content">
  			<?php the_content(); ?>
  		</div>

		</article>

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