<?php
/*
Plugin Name: LinkWithin Mobile Downsizer
Plugin URI: http://wordpress.org/extend/plugins/linkwithin-mobile-downsizer/
Description: This plugin created specifically for Not-Literally.com but works well enough to share!
Version: 0.0.5
Author: Keith Lytle
Author URI: www.not-literally.com
License: Free Use.
*/


// This plugin designed to fix layout problems with content width for LinkWithin on
// Mobile themes.

add_action('wp_enqueue_scripts', 'ksl_nl_reload_linkwithin');

function ksl_nl_reload_linkwithin() {

	// This function is designed to grab the current width of the page at startup
	// and resize the LinkWithin Layout appropriately for that page width

	// $reloadlayoutscad = Script to Add

	// This code determines if the screen is bigger than the LinkWithin box size
	// and then shrinks the box around the LinkWithin Div and hides what doesn't
    // fit.
	// This will also affect the LinkWithin Link and title text above. It will 
    // make the title text word wrap to the cropped box and move the link from 
    // the farthest right box to a visible area.
	
	
	// Each block is 119 pixels wide. So..
	// 1 = 1   - 118 no point in shrinking block smaller than this
	// 2 = 119 - 237 smaller is one block display or larger is 3 block
	// 3 = 238 - 356  
	// 4 = 357 - 475
	// 5 = 476 - 594
	// There is also a 1 px added to width for outer div


	$reloadlayoutscad = "";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "<script type=\"text/javascript\">";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "var ksl_nl_screen = window.screen.width;";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "if (ksl_nl_screen <= 594){";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	var ksl_nl_screen_cssToWriteForResizing = 475;";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	if (ksl_nl_screen <= 475){";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "		ksl_nl_screen_cssToWriteForResizing = 356;";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "		if (ksl_nl_screen <= 356){";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "			ksl_nl_screen_cssToWriteForResizing = 237;";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "			if (ksl_nl_screen <= 237){";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "				ksl_nl_screen_cssToWriteForResizing = 118;";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "			}";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "		}";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	}";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"<style type=\\\"text/css\\\">\");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"  div.linkwithin_outer { \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"     width : \" + ksl_nl_screen_cssToWriteForResizing + \"px; \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"     overflow : hidden; \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"  } \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"  div.linkwithin_text { \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"     width : \" + ksl_nl_screen_cssToWriteForResizing + \"px; \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"  } \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"  #linkwithin_logo_0 { \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"     position: relative; \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"     right : \" + ksl_nl_screen_cssToWriteForResizing + \"px; \");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"  }\");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "	document.write(\"</style>\");";
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "}";	
	$reloadlayoutscad = $reloadlayoutscad . "\n" . "</script>";
	

// this section will not load script if in the admin page section of the site
	$currentFile = $_SERVER["PHP_SELF"];
	$parts = Explode('/', $currentFile);
	if ($parts[1] == "wp-admin"){
		$reloadlayoutscad = "<!-- LinkWithin Mobile Downsizer removed for Admin Page -->";
	}

	echo $reloadlayoutscad;
}
?>