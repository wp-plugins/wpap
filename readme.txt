=== WP Anti-Proxy ===

Plugin Name: WP Anti-Proxy
Description: This plugin will block users from accessing your site via proxy services and auto-correct the ip address of the user. Uses HTTP and port scanning.
Tags: anti-proxy, proxy, ip address, load balancer, server, http, ports, scan, anti, real ip, block, proxies
Donation link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3HT8AAJEU86Z8
Author URI: http://yooplugins.com/
Contributors: RSPublishing
Requires at least: 3.1
Tested up to: 4.2.2
Stable tag: 1.3.2
License: GPLv2 or later

This plugin will block users from accessing your site via proxy services and auto-correct the ip address of the user.

== Description ==

This plugin will fetch and auto-correct the user's ip address in the event that the user is hidden behind a proxy or load balancer.
 
Users accessing your site via proxy will be blocked and not be given access.
 
This plugin scans both the http headers as well as ports.

WP Anti-Proxy Checks

Headers

CLIENT_IP, HTTP_CLIENT_IP, VIA, HTTP_VIA, FORWARDED_FOR_IP, HTTP_FORWARDED_FOR_IP, FORWARDED_FOR, HTTP_FORWARDED_FOR, FORWARDED, HTTP_FORWARDED
X_FORWARDED_FOR, HTTP_X_FORWARDED_FOR, X_FORWARDED, HTTP_X_FORWARDED, HTTP_PROXY_CONNECTION

Ports

8080,80,81,1080, 8000

Simple Regular Expression

This plugin sets the user IP to the first header that matches a simple regular expression of an IP

= About = 

The WP Anti-Proxy plugin is maintained by [YOOPlugins.com](http://yooplugins.com/)

== Installation ==

1. Download the wpap.zip file
2. Upload and extract the contents of wpap.zip to your wp-content/plugins/folder (you can do this via your wp-admin/plugins/'add new')
3. Activate the WPap plugin in your WP-admin
4. Done !

== Feedback, Questions, Help, and Suggestions ==

Just post a mail to: rcstoltz@gmail.com / Email Subject : WP Anti-Proxy or visit us at [YOOPlugins](http://yooplugins.com/)

== Upgrade Notice ==

= Version 1.3.2 = 


== Screenshots ==

1. WPap on Hidemyass proxy

== Frequently Asked Questions ==

= Can more ports be added? =

Of course! You are welcome to include additional ports if you so wish.

= Where do I add additional ports? =

Simply add them to the ports array on line 38 (separated with commas)

= The plugin won't activate. Displays an error: "Plugin could not be activated because it triggered a fatal error."

This is a port issue. Open the anpro.php file and scroll down to line 38 (where you will see an array of ports). Simply remove each port (reactivating each time) to see which port causes the issue. That said, port 80 is currently commented out (as it caused conflict on our end). This doesn't necessarily mean that it would cause conflict on your end. Feel free to uncomment the pre-pending slashes (//) before port 80 and you're set to go!

== Changelog ==

= 0.0.7 =
* initial release

= 1.0 =
* tested compatibility with v3.7.1
* added blank index file to trunk (security)
* included donation link
* corrected author name
* included temp banner
* updated keywords
* updated readme

= 1.2 =
* fixed issue with port scanning (see comment in anpro.php line 38)
* tested compatibility with v4.0
* general housekeeping

= 1.3 =
* url and support email changes
* general housekeeping

= 1.3.1 =
* tested compatibility with core 4.1.2
* updated version number
* updated support email
* general housekeeping
* added icons

= 1.3.2 =
* tested compatibility with core 4.2.2
* added banner and icon assets
* updated version number
* general housekeeping