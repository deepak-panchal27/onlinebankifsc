<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="theme-color" content="#555"/>
	<link rel='icon' href="https://onlinebankifsc.com/images/favicon.ico" type="image/x-icon" sizes='48x48'>
	<link rel="apple-touch-icon" sizes="180x180" href="https://onlinebankifsc.com/images/apple-touch-icon.png">

	<?php require_once(PROJECT_PATH."schema.php");?>

	<link rel="stylesheet" type="text/css" href="https://onlinebankifsc.com/css/main.css" />
	<link rel="stylesheet" type="text/css" href="https://onlinebankifsc.com/css/bootstrap.min.css">
	<script src="https://onlinebankifsc.com/js/jquery-3.5.1.min.js"></script>
	<script src="https://onlinebankifsc.com/js/bootstrap.min.js"></script>
	<script src="https://onlinebankifsc.com/js/all.js"></script>

	<?php if($pagename == "index") {?>
	<link rel="stylesheet" type="text/css" href="https://onlinebankifsc.com/css/select2.min.css" />
	<script src="https://onlinebankifsc.com/js/select2.min.js"></script>
	<?php }?>

	<?php if(($pagename == "bank-list") || ($pagename == "state") || ($pagename == "district") || ($pagename == "branch")) {?>
	<script src="https://onlinebankifsc.com/js/jquery.dataTables.min.js"></script>
	<script src="https://onlinebankifsc.com/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://onlinebankifsc.com/css/dataTables.bootstrap4.min.css" />
	<?php }?>

</head>

<body>
<div class="container bg">
	<div class="box noborder">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
			<div class="container">
				<button type="button" class="navbar-toggler order-first" data-toggle="collapse" data-target="#navbarCollapse">
				<script>
					<?php require_once(PROJECT_PATH."js/headerjs.js"); ?>
				</script>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ml-auto">
						<h5><a href="https://onlinebankifsc.com/" id="home" class="nav-item nav-link">Home</a></h5>
						<h5><a href="https://onlinebankifsc.com/bank-list" id="bankname" class="nav-item nav-link">Bank List</a></h5>
						<h5><a href="https://onlinebankifsc.com/search-bank" id="ifscsearch" class="nav-item nav-link">Search By IFSC Code</a></h5>
						<h5><a href="https://onlinebankifsc.com/blogs" id="blogs" class="nav-item nav-link">Blogs</a></h5>
						<h5><a href="https://onlinebankifsc.com/about-us" id="about" class="nav-item nav-link">About Us</a></h5>
						<h5><a href="https://onlinebankifsc.com/contact-us" id="contact" class="nav-item nav-link">Contact Us</a></h5>
					</div>
				</div>
			</div>
		</nav>
		<br>
		<div class="row">
		</div>
		<div class="leftstickyad">
		</div>
		<div class="rightstickyad">
		</div>
	</div>
	<script>
		<?php require_once(PROJECT_PATH."js/header-js.js"); ?>
	</script>