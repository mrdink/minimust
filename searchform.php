<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <div class="row collapse">

  	<div class="eight mobile-three columns">

  		<input type="text" name="s" id="s" />

  	</div>

  	<div class="four mobile-one columns">

  		<input type="submit" class="postfix button expand" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'dink' ); ?>" />

  	</div>

  </div>

</form>