=== LinkWithin Mobile Downsizer ===
Contributors: Keith Lytle
Donate link: http://www.not-literally.com/
Tags: linkwithin, mobile
Requires at least: 3.5
Tested up to: 3.5
Stable tag: ??
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html


LinkWithin Mobile Downsizer - renumbering links to fit on mobile devices.

== Description ==

This plugin inserts a new stylesheet to shrink LinkWithin down to the available screen 
area instead of the preset number for small display screens. If the device window is 
large enough to show 3 (or more) links it will. The inserted code dynamically chooses 
between whatever will fit and whatever size was chosen originally from the LinkWithin 
plugin page. This will also effect the Title Text above the links for word wrapping and 
also move the link for LinkWithin to a visible area. I make no warranties about its 
effectiveness but it seems to work out ok with the WPtouch and Jetpack plugins 
installed and their respective Mobile Themes.


== Installation ==

0. Have LinkWithin installed and activated. Kinda useless without that first.

1. Upload `linkwithin-mobile-downsizer.php` to the `/wp-content/plugins/` directory
	 OR
   download the zip file and install manually
   
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Are these Frequently Asked Questions = 

No. No one but me asked these questions.

= Why did I write this? =

My friends who are the genius/talent behind www.not-literally.com asked if I could help 
with their website. This is the second item on the list to get taken care to make sure
the website was mobile compatible. They let me test things out while I fix things up.

= Will I maintain/update this plugin? =

It looks like I will. If anyone brings an issue to my attention, it will get resolved 
quickly as this is still my first plug-in and I want to make it a good one. Hopefully 
I have done that now. Also I am now thinking of writing a full add-on pack for LinkWithin 
for any ideas that come to me. Like, images in the Title Text area! 

= Where should we go if we need for more support? =

Check out http://www.Not-Literally.com. They have a bunch of fun stuff there to take your 
mind off your troubles. Then when your done buy a t-shirt.

Actual support should be referenced with the creators of LinkWithin 
(http://www.linkwithin.com/support). 
If you need help with my plug-in, hit my support page here on Wordpress.org 
(http://wordpress.org/support/plugin/linkwithin-mobile-downsizer)

== Screenshots ==

1. N/A

== Changelog ==

= 0.0.5 =

There was a bug that prevented the owner of a site to import pictures into the "Set Featured 
Image" in certain(or all) themes. This has been resolved by delaying the loading of this
plugin until after all items in the admin panel have loaded first. Also the script will
detect if running in the wp-admin panel and not load the script as to not bog down the 
panel.

= 0.0.4 = 

Updated readme again for new features. 
Added support for the screen to be of any size and get the largest size it can from the 
links. i.e. if the original request from LinkWithin was for 5 links but the device used 
to load the page only has room for 4 links then this plugin will resize LinkWithin to 
show 4 links. Or 3 or 2 or 1. This will also effect the Title Text above the links and 
word wrap it and also move the link for LinkWithin to a visible area. 
Let's keep the link to continue to give them some love!

= 0.0.3 =

Updated original readme file. 

= 0.0.2 =

First release that did what it was supposed to.

== Upgrade Notice ==

= 0.0.6 = 

Looking into adding a dashboard control panel for adding custom text and images to the
title text area. Also maybe changing the background color and/or link styles.
