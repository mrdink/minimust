<?php get_header(); ?>

	<section class="eight columns centered">

		<h1 class="subheader"><?php _e( 'Archives', 'dink' ); ?></h1>

		<?php get_template_part('loop'); ?>

		<?php if (function_exists("emm_paginate")) {
  		emm_paginate();
  	} ?>

	</section>

<?php get_footer(); ?>