<?php session_start();?>
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
<link href="css/datePicker.css"rel="stylesheet" type="text/css" media="screen" >
<link rel="stylesheet" href="css/BreadCrumb.css" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/date.js"></script>
<script type="text/javascript" src="js/jquery.datePicker.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.jBreadCrumb.1.1.js" language="JavaScript"></script>

<script type="text/javascript">
   jQuery(document).ready(function()
      {
         jQuery("#breadCrumb0").jBreadCrumb();
      })
</script>

<script type="text/javascript" charset="utf-8">
    $(function()
    {
	$('.date-pick').datePicker({startDate:'01/01/1900'});
    });
</script>

<style>
a.dp-choose-date {
    float: right;
    width: 16px;
    height: 16px;
    padding: 1px -4px 1px 1px;
    display: block;
    margin-top: 5px;
    margin-right: 20px;
    text-indent: -2000px;
    overflow: hidden;
    background: url(images/calendar.png) no-repeat; 
}
a.dp-choose-date.dp-disabled {
    background-position: 0 -40px;
    cursor: default;
}
</style>

        <style type="text/css" title="currentStyle">
            @import "css/demo_table.css";
        </style>

        <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
            var oTable;
            var giRedraw = false;
            var values = new Array();
            $(document).ready(function() {

                $('#example tr').click( function() {
                    if ( $(this).hasClass('row_selected') )
                        $(this).removeClass('row_selected');
                    else
                        $(this).addClass('row_selected');
                } );

                $('#example tbody td').click( function () {
                    /* Get the position of the current data from the node */
                    var aPos = oTable.fnGetPosition( this );

                    /* Get the data array for this row */
                    var aData = oTable.fnGetData( aPos[0] );

                    /* Update the data array and return the value */
                    values.push(aData[0])
                } );
                /* Init the table */
                oTable = $('#example').dataTable( );
            } );

            function fnGetSelected( oTableLocal )
            {
                var aReturn = new Array();
                var aTrs = oTableLocal.fnGetNodes();
                for ( var i=0 ; i<aTrs.length ; i++ )
                {
                    if ( $(aTrs[i]).hasClass('row_selected') )
                    {
                        aReturn.push( aTrs[i] );
                    }
                }
                return aReturn;
            }

        </script>


<script type="text/javascript">
$(document).ready(function() {
   $(".hideit").click(function() {
      $(this).fadeOut(700);
   });

});
</script>


<!--[if lt IE 7]>
    <link href="css/ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once("functions.php");
?>
</head>

<body id="home">
  <div id="main">

    <!-- header -->
    <div id="header">
    <p align="right">
    <?php
        // session_start();
        echo 'Bienvenido, ';
    if (isset($_SESSION['username'])) {
        echo "<b>".$_SESSION["username"]."</b>.";
        echo "<a href=\"logout.php\">Logout</a>";
    }
    else{
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
