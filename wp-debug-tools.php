<?php
/*
Plugin Name: WordPress Debug Tools
Plugin URI: https://github.com/usefulparadigm/wp-debug-tools
Description: Useful Debugging Tools for WordPress Development.
Version: 1.0.0
Author: Sukjoon Kim <sjoonk@gmail.com>
Author URI: http://usefulparadigm.com
License: GPL3

Copyright 2013 Sukjoon Kim  (email : sjoonk@gmail.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// Include constants file
require_once( dirname( __FILE__ ) . '/lib/ChromePhp.php' );

add_action('init', 'wpdt_php_buffer_start');
// add_action('wp_footer', 'wpdt_php_buffer_end');

function wpdt_php_buffer_start() { ob_start(); }
function wpdt_php_buffer_end() { ob_end_flush(); }


// http://fuelyourcoding.com/simple-debugging-with-wordpress/

if(!function_exists('_log')){
  function _log( $message ) {
    if( WP_DEBUG === true ){
      if( is_array( $message ) || is_object( $message ) ){
        error_log( print_r( $message, true ) );
      } else {
        error_log( $message );
      }
    }
  }
}
