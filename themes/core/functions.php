<?php
/**
* Helpers for the template file.
*/
$da->data['header'] = '<h1>Header: David</h1>';
$da->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
$da->data['footer'] = '<p>Footer: &copy; David by Tomas Havner (tomas.havner@hotmail.com)</p>';


/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $da = CDavid::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($da->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($da->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($da->request, true)) . "</pre>";
  return $html;
}
