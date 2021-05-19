<?php
/**
 * Plugin Name:       Kebbet plugins - Shortcode: [year]
 * Plugin URI:        https://github.com/kebbet/kebbet-shortcode-year
 * Description:       Add a shortcode returning current year.
 * Version:           20210519.01
 * Author:            Erik Betshammar
 * Author URI:        https://verkan.se
 * Requires at least: 5.3
 *
 * @package kebbet-shortcode-year
 * @author Erik Betshammar
 */

namespace kebbet\shortcode\year;

/**
 * Add the shortcode `year` which returns the current year.
 */
add_shortcode( 'year', __NAMESPACE__ . '\output' );

/**
 * Return the current year.
 */
function output() {
	return wp_date( 'Y' );
}
