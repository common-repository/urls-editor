i=== URLs Editor ===

Author: Jozef Kapicak

URL: http://www.hiih.de/

Contact: jkapicak@gmail.com

Contributors: -

Tags: href, src, absolute, function, link, links, plugin, relative, shorten, url, urls

Requires at least: 3.2

Tested up to: 3.3.1

Stable tag: trunk



A FUNCTION for use in shortening URL links. This plugin automatically does shorten URLs.





== Description ==



Before:
http://example.com/wp-content/themes/twentyten/style.css

After:
/wp-content/themes/twentyten/style.css

OR:

Before:
http://example.com/wp-content/themes/twentyten/style.css

After (adding "https"):
https://example.com/wp-content/themes/twentyten/style.css


If you are looking for a plugin that *automatically* converts absolute URLs to relative URLs, or for a plugin that changes URLS for src & href URL attributes check out my other plugin.



I wrote this plugin because I needed a basepath for uploaded images for my Wordpress Multisite. In other words, I needed a URL to the server root without the domain. You may find this useful for the same reason, or perhaps another.



**Before you copy this code and add it into your own**, keep in mind that there may be future updates. Keeping the code within an activated plugin will make sure you're notified.





== Installation ==



1. Download the plugin (zip file).

2. Upload and activate the plugin through the "Plugins" menu in the WordPress admin.





== Frequently Asked Questions ==



= Why isn't this automatic? =



= How does this work? =



Just use `urls_editor($html)`.



= Will this plugin work for WordPress version x.x.x? =



This plugin has only been tested with versions of WordPress as early as 3.2. For anything older, you'll have to see for yourself.





== Screenshots ==





== Changelog ==



= 0.9 =

* Initial release
