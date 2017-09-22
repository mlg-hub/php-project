 <?php
 // star session
 session_start();

 require_once ('config/config.php');

 // Helpers function files
 require_once('helper/format_helper.php');
 require_once('helper/system_helper.php');
 require_once('helper/db_helper.php');
  // Autoload classes

 function __autoload($class_name){
 	require_once('libraries/'.$class_name.'.php');
 }

 ?>