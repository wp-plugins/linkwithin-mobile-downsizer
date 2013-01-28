<?php
/*
Plugin Name: LinkWithin Mobile Downsizer
Plugin URI: www.not-literally.com
Description: This plugin created specifically for Not Literally but works well enough to share!
Version: 0.0.4
Author: Keith Lytle
Author URI: 
License: Free Use.
*/


// This plugin designed to fix layout problems with content width for LinkWithin on
// Mobile themes.

add_action('plugins_loaded', 'ksl_nl_reload_layout');

function ksl_nl_reload_layout(){

	// This function is designed to grab the current width of the page at startup
	// and resize the LinkWithin Layout appropriately for that page width

	// $scad = Script to Add

	// This code determines if the screen is bigger than the LinkWithin box size
	// and then shrinks the box around the LinkWithin Div and hides what doesn't fit
	// This will also affect the LinkWithin Link and title text above. It will make
	// the title text word wrap to the cropped box and move the link from the 
	// farthest right box to a visible area.
	
	
	// Each block is 119 pixels wide. So..
	// 1 = 1   - 118 no point in shrinking block smaller than this
	// 2 = 119 - 237 smaller is one block display or larger is 3 block
	// 3 = 238 - 356  
	// 4 = 357 - 475
	// 5 = 476 - 594
	// There is also a 1 px added to width for outer div


	$scad = "";
	$scad = $scad . "\n" . "<script type=\"text/javascript\">";
	$scad = $scad . "\n" . "if (window.screen.width <= 594){";
	$scad = $scad . "\n" . "	var cssToWriteForResizing = 475;";
	$scad = $scad . "\n" . "	if (window.screen.width <= 475){";
	$scad = $scad . "\n" . "		cssToWriteForResizing = 356;";
	$scad = $scad . "\n" . "		if (window.screen.width <= 356){";
	$scad = $scad . "\n" . "			cssToWriteForResizing = 237;";
	$scad = $scad . "\n" . "			if (window.screen.width <= 237){";
	$scad = $scad . "\n" . "				cssToWriteForResizing = 118;";
	$scad = $scad . "\n" . "			}";
	$scad = $scad . "\n" . "		}";
	$scad = $scad . "\n" . "	}";
	$scad = $scad . "\n" . "	document.write(\"<style type=\\\"text/css\\\"> div.linkwithin_outer { width : \" + cssToWriteForResizing + \"px; overflow : hidden; } div.linkwithin_text { width : \" + cssToWriteForResizing + \"px; } #linkwithin_logo_0 { position: relative; right: \" + cssToWriteForResizing + \"px; }</style>\");";
	$scad = $scad . "\n" . "}";
	
	$scad = $scad . "\n" . "</script>";
	
	echo $scad;
}
?>