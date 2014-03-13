<?php

// Load the session
function _session()
{
	if(!isset($_SESSION)) {
		session_start();
	}
}

// Force SSL on a page (mainly for logging in)
function make_page_ssl()
{
	if($_SERVER['SERVER_PORT'] != 443) {
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit();
	}
}

// Redirect
function redirect($page)
{
	header("Location: ".$page);
	exit;	
}

// Load User Account Session
function load_user_account()
{
	global $account;
	if(isset($_SESSION["user_account"])) {
		$account = unserialize($_SESSION["user_account"]);
	}
	return null;
}

function force_login()
{
	global $account;
	if(!$account->loaded or !$account->authenticated) {
		redirect("login.php");
	}
}

function is_authenticated()
{
	global $account;
	return ($account->loaded and $account->authenticated);
}

function init_database()
{
	global $db;
	$db = new Database();
}