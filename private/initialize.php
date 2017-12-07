<?php

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver

  //PRODUCTION
  define("PHI_SERVER_ROOT", dirname('/kunden/homepages/45/d661400636/htdocs'));
  $prod_root = PHI_SERVER_ROOT .'phi/phi_git/phi/public';
  define("WWW_ROOT", $prod_root);

  //DEVELOPMENT
  // * Can dynamically find everything in URL up to "/public"
  // $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  // $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  // define("WWW_ROOT", $doc_root);

  require_once('function.php');
 ?>
