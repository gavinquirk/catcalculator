<?php
/**
* Plugin Name: Cat Calculator
* Plugin URI: https://www.gavinquirk.com
* Description: Display content using a shortcode to insert in a page or post
* Version: 1.0
* Text Domain: gq-cat-calculator
* Author: Gavin Quirk
* Author URI: https://www.gavinquirk.com
*/

function tbare_wordpress_plugin_demo($atts) {
  $Content = "<style>\r\n";
  $Content .= "h3.demoClass {\r\n";
  $Content .= "color: #26b158;\r\n";
  $Content .= "}\r\n";
  $Content .= "</style>\r\n";
  $Content .= '<h3 class="demoClass">Check it out!</h3>';
	 
    return $Content;
}

add_shortcode('tbare-plugin-demo', 'tbare_wordpress_plugin_demo');