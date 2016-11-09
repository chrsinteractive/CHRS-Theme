<?php
// Featured Image Sizes
add_image_size( 'banner', 960, 180, true );

// Add 'first' and 'last' class to menu items
function chrs_nav_first_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'chrs_nav_first_last');


?>