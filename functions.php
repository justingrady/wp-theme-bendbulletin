<?php
/**
 * @package WordPress
 * @subpackage Music feedback theme
 */

if ( function_exists('register_sidebars') )
register_sidebars(1, array(

	'before_widget' => '<div class="widget %2$s">',
	'after_widget' => '</div>',
	// 'before_title' => '<h2 class="widgettitle">* ',
	// 'after_title' => '</h2>',

/*	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h2>',*/
));
?>
