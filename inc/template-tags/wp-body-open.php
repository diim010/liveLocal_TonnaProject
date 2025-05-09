<?php
/**
 * Function wp_body_open.
 *
 * @package live-local
 */

namespace Live_Local;

if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 *  Backwards compatibility for wp_body_open()
	 */
  function wp_body_open() {
    do_action( 'wp_body_open' );
  }
}
