<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Defined Stylesheet Paths
	// Use get_template_directory_uri if it's a parent theme
	
	$defined_stylesheets = array(
		"0" => "Default", // There is no "default" stylesheet to load
		get_stylesheet_directory_uri() . '/css/blue.css' => "Blue",
		get_stylesheet_directory_uri() . '/css/mint.css' => "Mint",
		get_stylesheet_directory_uri() . '/css/livestrong.css' => "Livestrong"
	);

	$options[] = array( "name" => "Stylesheets",
		"type" => "heading" );

	$options[] = array( "name" => "Select a Stylesheet to be Loaded",
		"desc" => "This is a manually defined list of stylesheets.",
		"id" => "stylesheet",
		"std" => "0",
		"type" => "select",
		"options" => $defined_stylesheets );

	return $options;
}

/**
 * Returns an array of all files in $directory_path of type $filetype.
 *
 * The $directory_uri + file name is used for the key
 * The file name is the value
 */
 
function options_stylesheets_get_file_list( $directory_path, $filetype, $directory_uri ) {
	$alt_stylesheets = array();
	$alt_stylesheet_files = array();
	if ( is_dir( $directory_path ) ) {
		$alt_stylesheet_files = glob( $directory_path . "*.$filetype");
		foreach ( $alt_stylesheet_files as $file ) {
			$file = str_replace( $directory_path, "", $file);
			$alt_stylesheets[ $directory_uri . $file] = $file;
		}
	}
	return $alt_stylesheets;
}