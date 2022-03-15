<?php

  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, '/');
  define("WWW_ROOT", $doc_root);


function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
  
}