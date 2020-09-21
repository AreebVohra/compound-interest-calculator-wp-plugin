<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Compound Interest Calculator with React
 * Description:       Custom Plugin made with React to calculate the addition of interest to the principal sum of a loan or deposit. shortcode [erw_widget]
 * Version:           1.0.0
 * Author:            Areeb Vohra
 * Author URI:        https://areebvohra.github.io/
 */

defined('ABSPATH') or die('Direct script access disallowed.');

define('ERW_WIDGET_PATH', plugin_dir_path(__FILE__) . '/widget');
define('ERW_ASSET_MANIFEST', ERW_WIDGET_PATH . '/build/asset-manifest.json');
define('ERW_INCLUDES', plugin_dir_path(__FILE__) . '/includes');

require_once(ERW_INCLUDES . '/enqueue.php');
require_once(ERW_INCLUDES . '/shortcode.php');
