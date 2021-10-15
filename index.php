<?php

/**
 * Plugin Name: CSWD For Wedingpress
 * Description: Plugin Custom untuk generator link, guest book dan popup cover
 * Plugin URI: 
 * Version: 1.0.4
 * Author: Gede Sugandi
 * Author URI: https://bedahdigital.com/author/gedesugandi
 * Text Domain: WEDKU-elementor-additional-widget
 */

namespace WEDKU;

if (!defined('ABSPATH'))
    exit;
if (!defined("PLUGINS_DIR_PATHS"))
    define("PLUGINS_DIR_PATHS", plugin_dir_path(__FILE__));
if (!defined("PLUGINS_URLS"))
    define("PLUGINS_URLS", plugins_url() . "/cswd");

require_once('main.php');
require_once('core/UpdateClient.class.php');
$wedku_object = new E_WEDKU();
