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
  //define("PHI_SERVER_ROOT", dirname('/kunden/homepages/45/d661400636/htdocs'));
  // $prod_root = PHI_SERVER_ROOT .'/phi/phi_git/phi/public';
  // define("WWW_ROOT", $prod_root);
  define("WWW_ROOT", '');

  require_once('function.php');

  require_once('database.php');
  $db = db_connect();
 ?>
