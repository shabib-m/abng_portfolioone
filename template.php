<?php
/**
 * @file
 * template.php
 */

/**
 * Implements hook_links().
 */
function abng_portfolioone_links__header_menu($menu){
  $menu['attributes']['class'] = array('flex gap-x-3 font-medium text-gray-200');
  if ($navbar_menu_position = theme_get_setting('bootstrap_lite_navbar_menu_position')){
    $menu['attributes']['class'][] = $navbar_menu_position;
  }
  return theme_links($menu);
}