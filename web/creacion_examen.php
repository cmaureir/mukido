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
                        <li>Creaci&oacute;n Examen</li>
                    </ul>
            </div></div>
            <h2>Creaci&oacute;n Examen</h2>
               <div class="line-hor"></div>
               <?php
                  if (!isset($_SESSION['username'])) {
                  echo"
                  <SCRIPT LANGUAGE=\"javascript\">location.href = \"login.php\";</SCRIPT>";
                  }
               else{?>

                  <form action="creacion_examen.php" method="post">
                     <div id="total-column"><label>Descripci&oacute;n: </label><input type="text" name="descripcion" /></div>
                     <div id="half-column"><label>Ciudad: </label><input type="text" name="ciudad"  /></div>
                     <div id="half-column"><label>Lugar: </label><input type="text" name="lugar" /></div>
                     <div id="half-column"><label>Fecha: </label><input type="text" name="fecha" id="fecha"/></div>
                     <div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear"/></div>
                  </form>
               <?php }?>
         <?php
         if (isset($_POST["descripcion"]) && $_POST["descripcion"] != "" &&
            isset($_POST["ciudad"])       && $_POST["ciudad"]  != ""     &&
            isset($_POST["lugar"])        && $_POST["lugar"]  != ""      &&
            isset($_POST["fecha"])        && $_POST["fecha"]  != ""
            ){

               require_once("connect.php");
               $query = "INSERT INTO examen
                        (descripcion,f_examen,ciudad,lugar)
                        VALUES
                        ('".$_POST["descripcion"]."',
                        '".clt_to_mysql($_POST["fecha"])."',
                        '".$_POST["ciudad"]."',
                        '".$_POST["lugar"]."'
                        );";

                $result = mysql_query($query);
                if($result){
                    echo"<div class=\"main_container\">
                           <div class=\"notification success hideit\">
                              <strong>&Eacute;xito: </strong> Se ha creado el examen!
                           </div>
                        </div>";
                }
                else{
                    echo"<div class=\"main_container\">
                           <div class=\"notification failure hideit\">
                              <strong>FALLO: </strong>Algo sali&oacute; mal, no se cre&oacute; el examen.
                           </div>
                        </div>";
                }

         }
         ?>
         </div>

      </div>
    </div>
<?php require_once("footer.php"); ?>
