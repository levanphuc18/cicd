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

// Thêm một dòng trống để tách biệt giữa khối tiêu đề và nội dung chính của file
// (Đây là phần bạn cần chỉnh sửa để thêm một dòng trống)
echo "Hello, this is a custom message PHUCZZZZ";

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
