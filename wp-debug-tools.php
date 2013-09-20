<?php
/*
Plugin Name: WordPress Debug Tools
Plugin URI: https://github.com/ccampbell/chromephp
Description: WordPress Debugging Toolbox
Author: Sukjoon Kim <sjoonk@gmail.com>
Version: 0.1.0
Author URI: http://usefulparadigm.com
*/

require_once('lib/ChromePhp.php');

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
