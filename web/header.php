<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mu Ki Do - Administraci&oacute;n</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->
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
		<img src="images/logo1.png" alt="logo" />
      	<h1>Mu Ki Do</h1>
      </div>
      <!-- /.logo -->
    </div>
    <!-- /header -->
