=== Really Simple Breadcrumb ===
Contributors: chr1s9r
Donate link: https://www.facebook.com/chr1swe
Tags: breadcrumb, simple, breadcrumb plugin, breadcrump
Author URI: http://www.christophweil.de
Requires at least: 3.0
Tested up to: 3.7.1
Stable tag: 1.0.1

This is a simple WP Plugin which lets you use Breadcrumbs for Pages!

== Description ==

This is a really simple WP Plugin which lets you use Breadcrumbs for Pages! Just download the Plugin, put in the correct Folder, as 
explained below, use the code shown below and activate it.. That simple! If you want to modify the styles use the class .breadcrumb
in your CSS file or navigate to wp-content/plugins/really-simple-breadcrumb/breadcrumb.php and modify the echo output of the function
breadcrumb_css. 

== Screenshots ==
1. See the Plugin in Action

== Changelog ==

= 1.0 =
* Changed depth. You can now have 1000 Parentpages.

= 1.0.1 =
* Deleted the hardcoded css. (Apply your own css to .breadcrumb class)
* You can now simply change the separator once in line 17


== Installation ==

This section describes how to install the plugin and get it working.

1. Upload breadcrumb.php to the /wp-content/plugins/really-simple-breadcrumb/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>` in your page.php template