<?php

/**
 * Plugin Name: Multisite URL Fixer
 * Plugin URI: https://github.com/roots/multisite-url-fixer
 * Description: Fixes WordPress issues with home and site URL on multisite when using Bedrock
 * Version: 1.0.0
 * Author: Roots
 * Author URI: https://roots.io/
 * License: MIT License
 */

class_exists('Roots\Bedrock\URLFixer') || require_once __DIR__.'/vendor/autoload.php';

use Roots\Bedrock\URLFixer;

if (is_multisite()) {
    (new URLFixer)->addFilters();
}
