<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function profile_menu_tree(&$variables)
{
  return '<ul class="sidebar-nav">' . $variables['tree'] . '</ul>';
}
function profile_menu_tree__primary(&$variables)
{
  return '<ul class="sidebar-nav">' . $variables['tree'] . '</ul>';

}
function profile_links__system_main_menu($variables) {
  $html = "<div>\n";
  $html .= "  <ul class=sidebar-nav>\n";  
  foreach ($variables['links'] as $link) {
    $html .= "<li>".l($link['title'], $link['href'], $link)."</li>";
  }
  $html .= "  </ul>\n";
  $html .= "</div>\n";

  return $html;
}