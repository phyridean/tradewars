<?php

if(defined("CORE_LOADED")) return;

define( "CORE_LOADED",			true);
define( "DS", 					"/");
define( "DIR_FRAMEWORK",		realpath(dirname(__FILE__)."../../"));
define( "DIR_CLASSES",			DIR_FRAMEWORK . DS . "classes");
define( "DIR_CSS",				DIR_FRAMEWORK . DS . "css");
define( "DIR_INCLUDES",			DIR_FRAMEWORK . DS . "includes");
define( "DIR_LIBRARY", 			DIR_FRAMEWORK . DS . "lib");
define( "DIR_TEMPLATES", 		DIR_LIBRARY . DS . "templates");

include DIR_INCLUDES . DS . "config.php";
include DIR_INCLUDES . DS . "autoloader.php";
include DIR_INCLUDES . DS . "functions.php";

global $db;

_session();

?>
