<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mu Ki Do - Administraci&oacute;n</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="SHORTCUT ICON" href="images/favicon.ico"/>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/BreadCrumb.css" type="text/css">

<script src="js/jquery-1.6.2.js"></script>
<script src="js/jquery.ui.core.js"></script>
<script src="js/jquery.ui.widget.js"></script>
<script src="js/jquery.ui.datepicker.js"></script>

<script type="text/javascript">
   jQuery(document).ready(function()
      {
         jQuery("#breadCrumb0").jBreadCrumb();
      })
</script>
<script type="text/javascript">
$('#inputDate').DatePicker({
   format:'m/d/Y',
   date: $('#inputDate').val(),
   current: $('#inputDate').val(),
   starts: 1,
   position: 'r',
   onBeforeShow: function(){
      $('#inputDate').DatePickerSetDate($('#inputDate').val(), true);
   },
   onChange: function(formated, dates){
      $('#inputDate').val(formated);
      if ($('#closeOnSelect input').attr('checked')) {
         $('#inputDate').DatePickerHide();
      }
   }
});
</script>

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

<SCRIPT LANGUAGE="JavaScript">
 $(document).ready(function(){
 $("#old").click(function(){
    $("#apoderado").attr("disabled",true);
    $("#apoderado_rut").attr("disabled",true);
    $("#apoderado_tel").attr("disabled",true);
    $("#apoderado_dir").attr("disabled",true);
    $("#apoderado_email").attr("disabled",true);
    $("#apoderado-select").attr("disabled",false);
 });

 $("#new").click(function(){
    $("#apoderado").attr("disabled",false);
    $("#apoderado_rut").attr("disabled",false);
    $("#apoderado_tel").attr("disabled",false);
    $("#apoderado_dir").attr("disabled",false);
    $("#apoderado_email").attr("disabled",false);
    $("#apoderado-select").attr("disabled",true);
 });

 });

</SCRIPT>
<script type="text/javascript">
$(document).ready(function() {
   $(".hideit").click(function() {
      $(this).fadeOut(700);
   });

});
</script>

<?php
//Convierte fecha MySQL to CLT
function mysql_to_clt($fecha){
    preg_match('/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})/', $fecha, $mifecha);
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
    return $lafecha;
}

//Convierte fecha CLT to MySQL
function clt_to_mysql($fecha){
    preg_match('/([0-9]{1,2})-([0-9]{1,2})-([0-9]{2,4})/', $fecha, $mifecha);
    $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
    return $lafecha;
}
?>

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
      <div class="logo">
         <a href="index.php"><img src="images/logo1.png" alt="logo" /></a>
         <h1>Mu Ki Do</h1>
      </div>
    </div>
