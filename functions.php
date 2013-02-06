<?php 


// Begin Register Sidebars
	if ( function_exists('register_sidebar') )
	register_sidebars(1,array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

?>