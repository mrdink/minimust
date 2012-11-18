<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>

  	<header class="entry-header">
  		<p class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
  		<p class="entry-date"><?php the_time('M jS') ?> <?php edit_post_link(); ?></p>
  	</header>

  	<div class="entry-content">
    	<?php dink_excerpt('dink_index'); // Build your custom callback length in functions.php ?>
    </div>

		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<div class="text-center">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  				<?php the_post_thumbnail('feature-image'); ?>
  			</a>
			</div>
		<?php endif; ?>

		<footer class="entry-footer comment">
      <div class="row">
      	<div class="twelve columns">
      		<span class="comments">
      		  <?php comments_popup_link( __( ' comment <i class="icon-comments-alt"></i>', 'dink' ), __( '1 Comment', 'dink' ), __( '% Comments', 'dink' )); ?>
      		</span>
      	</div><!--/.twelve -->
      </div><!--/.row -->
    </footer>

	</article>

<?php endwhile; ?>

<?php else: ?>

	<article>
  	<div class="alert-box">
      <?php _e( 'No posts for you!', 'dink' ); ?>
    </div>
	</article>

<?php endif; ?>