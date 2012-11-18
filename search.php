<?php get_header(); ?>

	<section>

		<h1><?php echo sprintf( __( '%s Search Results for ', 'dink' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

		<?php get_template_part('loop'); ?>

		<?php if (function_exists("emm_paginate")) {
  		emm_paginate();
  	} ?>

	</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>