<?php

/*
  Plugin Name: WP Anti-Proxy
  Plugin URI: http://yooplugins.com/
  Description: The WPap plugin will fetch and correct the client's ip address in the event that he is hidden behind a proxy or load balancer. WPap uses HTTP headers as well as port scanning.
  Version: 1.3.1
  Author: RSPublishing
  Author URI: http://yooplugins.com/
  License: GPL2
 */

/*
  Copyright 2014/2015  Rynaldo Stoltz  (email : rcstoltz@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */
 
function rate_wpnpa($links, $file) {
	if ($file == plugin_basename(__FILE__)) {
		$rate_url = 'http://wordpress.org/support/view/plugin-reviews/' . basename(dirname(__FILE__)) . '?rate=5#postform';
		$links[] = '<a href="' . $rate_url . '" target="_blank" title="Click here to rate and review this plugin on WordPress.org">Rate this plugin</a>';
	}
	return $links;
}

add_filter('plugin_row_meta', 'rate_wpnpa', 10, 2);

	$ip_match = '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/';
	$wps_proxies = array( 'CLIENT_IP', 'HTTP_CLIENT_IP', 'VIA', 'HTTP_VIA', 'FORWARDED_FOR_IP', 'HTTP_FORWARDED_FOR_IP', 'FORWARDED_FOR', 'HTTP_FORWARDED_FOR', 'FORWARDED', 'HTTP_FORWARDED', 'X_FORWARDED_FOR', 'HTTP_X_FORWARDED_FOR', 'X_FORWARDED', 'HTTP_X_FORWARDED', 'HTTP_PROXY_CONNECTION' );

	foreach($wps_proxies as $x) {
	if (isset($_SERVER[$x])) die("Proxy access not allowed !");
	}

	$po = array (8000, 8080, 81, 1080); // port 80 is excluded by default due to a conflict on our end. you are welcome to add port 80 to the array = remember to separate with a comma

	foreach($po as $po) {
	if(@fsockopen($_SERVER['REMOTE_ADDR'], $po, $errno, $errstr, 1))
	die("Sorry! Proxy access not allowed !");
	}

?>