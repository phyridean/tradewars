<?php
function __autoload($class_name) {
	include DIR_CLASSES . DS . "class.".strtolower($class_name).".php";
}

?>