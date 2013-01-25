<?php
/*
Plugin Name: LinkWithin Mobile Downsizer
Plugin URI: www.not-literally.com
Description: This plugin created specifically for Not Literally but works well enough to share!
Version: 0.0.3
Author: Keith Lytle
Author URI: 
License: Free Use.
*/


// This plugin designed to fix layout problems with content width for LinkWithin on
// Mobile themes.

add_action('plugins_loaded', 'ksl_nl_reload_layout');

function ksl_nl_reload_layout(){

	// This function is designed to grab the current width of the page at startup
	// and resize the page appropriately for LinkWithin content

	// $stad = Style to Add
	// $scad = Script to Add

	// This code determines if the screen is bigger than 375px and then shrinks the box
	// around the LinkWithin Div and hides what doesn't fit

	$stad = "<style type=\\\"text/css\\\"> div.linkwithin_outer { width : 237px; overflow : hidden; } </style>";

	$scad = "";
	$scad = $scad . "\n" . "<script type=\"text/javascript\">";
	$scad = $scad . "\n" . "if (window.screen.width <= 375){";
	$scad = $scad . "\n" . "	document.write(\"" . $stad . "\");";
	$scad = $scad . "\n" . "}";
	$scad = $scad . "\n" . "</script>";
	
	echo $scad;
}
?>