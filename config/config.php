<?php

if(isset($_SERVER['HTTPS'])){
	$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
}else{
	$protocol = 'http';
}

$envProtocol = (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] !== "") ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'http';
$siteUrl = $envProtocol . "://" . $_SERVER['HTTP_HOST'].'/';

if (!defined('SITE_URL')) define("SITE_URL", $siteUrl);

define('PROJECT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');

?>