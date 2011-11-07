<?php require_once("header.php"); ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#username, #password").focus(function () {
      if ($(this).val() === $(this).attr("value")){
         $(this).val("");
      }
    }).blur(function () {
      if ($(this).val() === "") {
         $(this).val($(this).attr("value"));
      }
    });
});
</script>


   <div id="content">
       <div class="wrapper">
      <?php require_once("sidebar.php"); ?>
         <div class="mainContent">
               <p align="center">
                  <div class="txt1">
               <?php
               if (isset($_SESSION['username'])) {
                  echo"<SCRIPT LANGUAGE=\"javascript\">location.href = \"index.php\";</SCRIPT>";
               }
               else{?>
                        <form action="login.php" method="post">
                          <table width="250" border="0" align="center" cellpadding="05" cellspacing="1" id="logintable">
                            <tr>
                              <td width="192"><div class="message">Inicio sesi&oacute;n</div>
                        </td>
                            </tr>
                            <tr>
                              <td><input name="username" type="text" id="username" value="">
                                </td>
                            </tr>
                            <tr>
                              <td><input name="password" type="password" id="password" value="">
                                </td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><input type="submit" name="button" class="submit" value="Entrar"</td>
                            </tr>
                          </table>
                        </form>

               <?php

                  if(isset($_POST["username"]) && $_POST["username"] != "" &&
                     isset($_POST["password"]) && $_POST["password"] != "" ){

                     //session_start();
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

               }



 }?>
                  </div>
               </p>
         </div>

      </div>
    </div>
<?php require_once("footer.php"); ?>
