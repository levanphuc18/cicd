<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

// Thêm đoạn text ở đây
echo "Hello, this is a custom message PHUC";

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

// Thêm một dòng trống sau khối tiêu đề (nếu có)
