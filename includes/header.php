<?php
$theme 			= "ui-lightness";
$jquery_ver 	= "1.9.1";
$jquery_ui_ver	= "1.10.2";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<title>The Game</title>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/<?=$jquery_ver;?>/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/<?=$jquery_ui_ver;?>/jquery-ui.min.js"></script>

	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/<?=$jquery_ui_ver;?>/themes/<?=$theme;?>/jquery-ui.css" type="text/css" />
	
	<script>
	jQuery(document).ready(function(){
		$("button").button();
	});
	</script>
	
</head>

<body>

<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300' rel='stylesheet' type='text/css'>
