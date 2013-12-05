=== WP Anti-Proxy ===

Plugin Name: WP Anti-Proxy
Description: This plugin will fetch and correct the client's ip address in the event that he is hidden behind a proxy or load balancer. Uses HTTP and port scanning.
Tags: anti-proxy, proxy, ip, ip address, load balancer, server, http, ports, scan, anti, real ip, forward, forwarded
Donation link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3HT8AAJEU86Z8
Author URI: http://www.securiilock.com
Contributors: RS Publishing
Requires at least: 2.7
Tested up to: 3.7.1
Stable tag: 1.0
License: GPLv2 or later

This plugin will fetch and auto-correct the ip address in the event that the user is hidden behind a proxy or load balancer.


== Description ==

This plugin will fetch and auto-correct the ip address in the event that the user is hidden behind a proxy or load balancer. 
The WP Anti-Proxy plugin uses and scans both the http headers as well as ports.

== WP Anti-Proxy Checks ==


= Headers =

CLIENT_IP, HTTP_CLIENT_IP, VIA, HTTP_VIA, FORWARDED_FOR_IP, HTTP_FORWARDED_FOR_IP, FORWARDED_FOR, HTTP_FORWARDED_FOR, FORWARDED, HTTP_FORWARDED
X_FORWARDED_FOR, HTTP_X_FORWARDED_FOR, X_FORWARDED, HTTP_X_FORWARDED, HTTP_PROXY_CONNECTION

= Ports = 

8080,80,81,1080, 8000

= Simple Regular Expression =

This plugin sets the user IP to the first header that matches a simple regular expression of an IP


== Installation ==

1. Download the wpap.zip file
2. Upload and extract the contents of wpap.zip to your wp-content/plugins/folder (you can do this via your wp-admin/plugins/add new 'menu')
3. Activate the WPap plugin in your WP-admin
4. Done !


== Feedback, Questions, Help, and Suggestions ==


Just post a mail to: support@securiilock.com / Email Subject : WP Anti-Proxy


== Upgrade Notice ==

= Version 1.0 = 


== Screenshots ==

1. WPap on Hidemyass


== Frequently Asked Questions ==

= Can more ports be added? =

Of course ! You are welcome to include additional ports

= Where do I add additional ports? =

Simply add them to the ports array on line 40


== Changelog ==

None

= Version 0.0.7 =

= 1.2 =

* tested compatibility with v3.7.1
* added blank index file to trunk (security)
* included donation link
* included temp banner
* updated keywords
* updated readme


First Release Version

== Donations ==

Should you feel like being awesome and dropping us a donation (which is much appreciated), please do so via [PayPal] (https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3HT8AAJEU86Z8) OR come and see us at [Securiilock] (http://www.securiilock.com)