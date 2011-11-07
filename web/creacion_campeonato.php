<?php require_once("header.php");
 ?>
    <div id="content">

       <div class="wrapper">
      <?php require_once("sidebar.php"); ?>
         <div class="mainContent">
            <div class="breadCrumbHolder module"><div id="breadCrumb0" class="breadCrumb module">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="crear.php">Crear</a></li>
                        <li>Creaci&oacute;n Campeonato</li>
                    </ul>
            </div></div>
              <h2>Creaci&oacute;n Campeonato</h2>
               <div class="line-hor"></div>
               <?php
               if (!isset($_SESSION['username'])) {
                  echo"<SCRIPT LANGUAGE=\"javascript\">location.href = \"login.php\";</SCRIPT>";
               }
               else{?>

                  <form action="creacion_campeonato.php" method="post">
                     <div id="total-column"><label>Nombre: </label><input type="text" name="nombre" /></div>
                     <div id="half-column"><label>Ciudad: </label><input type="text" name="ciudad"  /></div>
                     <div id="half-column"><label>Lugar: </label><input type="text" name="lugar" /></div>
                     <div id="half-column"><label>Fecha: </label><input type="text" name="fecha" id="fecha"/></div>
                     <div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear"/></div>
                  </form>
               <?php }?>
         <?php

         if (isset($_POST["nombre"]) && $_POST["nombre"] != "" &&
            isset($_POST["ciudad"])       && $_POST["ciudad"]  != ""     &&
            isset($_POST["lugar"])        && $_POST["lugar"]  != ""      &&
            isset($_POST["fecha"])        && $_POST["fecha"]  != ""
            ){

               require_once("connect.php");
               $query = "INSERT INTO campeonato
                        (nombre,f_campeonato,ciudad,lugar)
                        VALUES
                        ('".$_POST["nombre"]."',
                        '".clt_to_mysql($_POST["fecha"])."',
                        '".$_POST["ciudad"]."',
                        '".$_POST["lugar"]."'
                        );";

                $result = mysql_query($query);
                if($result){
                    echo"<div class=\"main_container\">
                           <div class=\"notification success hideit\">
                              <strong>&Eacute;xito: </strong> Se ha creado el cammpeonato!
                           </div>
                        </div>";
                }
                else{
                    echo"<div class=\"main_container\">
                           <div class=\"notification failure hideit\">
                              <strong>FALLO: </strong>Algo sali&oacute; mal, no se cre&oacute; el campeonato.
                           </div>
                        </div>";
                }

         }


         ?>
         </div>

      </div>
    </div>
<?php require_once("footer.php"); ?>
