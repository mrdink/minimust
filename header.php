<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- fav + touch icons -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-57-precomposed.png">

	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div id="wrap">
		<header class="contain-to-grid">
      <div class="row">
      	<div class="nine columns centered">
        	<nav class="top-bar">
            <ul>
              <li class="name"><h1><a href="<?php echo site_url(); ?>"><?php bloginfo('title'); ?></a></h1></li>
              <li class="toggle-topbar"><a href="#"></a></li>
            </ul>
            <section>
            	<?php wp_nav_menu( array( 'theme_location' => 'main-menu','menu_class' => 'left') ); ?>
            	<?php wp_nav_menu( array( 'theme_location' => 'social-menu','menu_class' => 'social-bookmarks right') ); ?>
            </section>
          </nav>
      	</div><!--/.eight -->
      </div><!--/.row -->
    </header>

    <section id="brand">
    	<div class="row">
    		<div class="eight columns centered">
          <a href="<?php echo site_url(); ?>">
            <h1 class="brand hide-text" style="background-image:url('<?php header_image(); ?>');"><?php bloginfo('name'); ?></h1>
          </a>
    		</div><!--/.twelve -->
    	</div><!--/.row -->
    </section>

    <section id="content">
      <div class="row">