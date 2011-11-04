<?php
 session_start();

require_once("connect.php");

function quitar($mensaje)
{
   $nopermitidos = array("'",'\\','<','>',"\"");
   $mensaje = str_replace($nopermitidos, "", $mensaje);
   return $mensaje;
}
if(trim($_POST["username"]) != "" && trim($_POST["password"]) != "")
{
   //$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
   //$password = $HTTP_POST_VARS["password"];
   $usuario = strtolower(htmlentities($_POST["username"], ENT_QUOTES));
   $password = sha1($_POST["password"]);

   $result = mysql_query('SELECT password, username FROM administrador WHERE username=\''.$usuario.'\'');

   if($row = mysql_fetch_array($result)){
      if($row['password'] == $password){
         $_SESSION['username'] = $row['username'];
         echo "<SCRIPT LANGUAGE=\"javascript\">location.href = \"index.php\";</SCRIPT>";
      }
      else{
           echo"<div class=\"main_container\">
                  <div class=\"notification failure hideit\">
                     <strong>FALLO: </strong>Contrase&ntilde;a incorrecta.
                  </div>
               </div>";
      }
   }
   else{
         echo"<div class=\"main_container\">
                <div class=\"notification failure hideit\">
                   <strong>FALLO: </strong>El usuario no existe.
                </div>
             </div>";
   }
   mysql_free_result($result);
}
else{
     echo"<div class=\"main_container\">
            <div class=\"notification failure hideit\">
               <strong>FALLO: </strong>Debe especificar un usuario y una contrase&ntilde;a.
            </div>
         </div>";
}
mysql_close();
?>
