<?php
/**
 * Child theme includes
 */

/*	Register Child theme stylesheet
	All Bootswatch themes are included in theme_folder/assets/css/
		amelia.min.css
		cerulean.min.css
		cosmo.min.css
		cyborg.min.css
		flatly.min.css
		journal.min.css
		readable.min.css
		simplex.min.css
		slate.min.css
		spacelab.min.css
		united.min.css
	See http://bootswatch.com/ for examples */

function child_enqueue_style(){
	wp_register_style( 'bootswatch-stylesheet', get_stylesheet_directory_uri() . '/assets/css/united.min.css', array(), '', 'all' ); 
	wp_register_style( 'child-stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), '', 'all' ); 
	
	// $drive = 'https://googledrive.com/host/0B7TOrP4Epw5ZYmIwMm10SEhFcDA';
	// $dir = '/Vassal/accessibility';
	// wp_register_style( 'child-stylesheet', $drive . $dir . '/css/style.min.css', array(), '', 'all' ); 

	wp_enqueue_style( 'bootswatch-stylesheet' );
	wp_enqueue_style( 'child-stylesheet' );
}
add_action('wp_enqueue_scripts', 'child_enqueue_style', 101); // 101 to register after parent theme stylesheet (100)