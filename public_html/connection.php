<?php

if(isset($_SERVER['HTTPS'])){
	$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
}else{
	$protocol = 'http';
}

$envProtocol = (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] !== "") ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'http';
$siteUrl = $envProtocol . "://" . $_SERVER['HTTP_HOST'].'/';

if (!defined('SITE_URL')) define("SITE_URL", $siteUrl);

$conn = mysqli_connect( "sql313.epizy.com", "epiz_29261934", "Dee@123p270", "epiz_29261934_ifsc");

?>
