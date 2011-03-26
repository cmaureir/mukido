<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mu Ki Do - Administraci&oacute;n</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="SHORTCUT ICON" href="images/favicon.ico"/>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/datePicker.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/date.js"></script>
<script type="text/javascript" src="js/jquery.datePicker.js"></script>
<script type="text/javascript" charset="utf-8">
    $(function()
    {
	$('.date-pick').datePicker({startDate:'01/01/1900'});
    });
</script>
<style>
a.dp-choose-date {
	float: left;
	width: 16px;
	height: 16px;
	padding: 0;
	margin: 5px 3px 0;
	display: block;
	text-indent: -2000px;
/*	overflow: hidden;*/
	background: url(images/calendar.png) no-repeat; 
}
a.dp-choose-date.dp-disabled {
	background-position: 0 -20px;
	cursor: default;
}
</style>


<!--[if lt IE 7]>
	<link href="css/ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
</head>

<body id="home">
  <div id="main">

    <!-- header -->
    <div id="header">
	<p align="right">
	<?php session_start();
	echo 'Bienvenido, ';
	if (isset($_SESSION['username'])) {
		echo "<b>".$_SESSION["username"]."</b>.";
		echo "<a href=\"logout.php\">Logout</a>";
	}else{
		echo "<a href=\"login.php\">Login</a>";
	}
?>
	</p>
      <!-- .logo -->

      <div class="logo">
		<a href="index.php"><img src="images/logo1.png" alt="logo" /></a>
      	<h1>Mu Ki Do</h1>
      </div>
      <!-- /.logo -->
    </div>
    <!-- /header -->
