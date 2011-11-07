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
                        <li>Creaci&oacute;n Club</li>
                    </ul>
            </div></div>
            <h2>Creaci&oacute;n Club</h2>
               <div class="line-hor"></div>
               <?php
               if (!isset($_SESSION['username'])) {
                  echo"<SCRIPT LANGUAGE=\"javascript\">location.href = \"login.php\";</SCRIPT>";
               }
               else{
               ?>

               <h3>Datos Club</h3>
                  <form action="creacion_club.php" method="post">
                     <div id="half-column"><label>Raz&oacute;n Social:</label> <input type="text" name="razon"/></div>
                     <div id="half-column"><label>R.U.T: </label><input type="text" name="rut" size="20"/></div>
                     <div id="total-column"><label>Domicilio: </label><input type="text" name="domicilio" /></div>
                     <div id="total-column"><div class="line-hor"></div></div>
                     <h3>Datos Presidente</h3>
                     <div id="total-column"><label>Nombre: </label><input type="text" name="presidente" /></div>
                     <div id="half-column"><label>R.U.T: </label><input type="text" name="presidente_rut"  /></div>
                     <div id="half-column"><label>Telefono: </label><input type="text" name="presidente_telefono" /></div>
                     <div id="total-column"><label>Domicilio: </label><input type="text" name="presidente_domicilio" /></div>
                     <div id="total-column"><label>Email: </label><input type="text" name="presidente_email"/></div>
                     <div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear"/></div>
                  </form>
         <?php }?>
      <?php
         if (isset($_POST["razon"])               && $_POST["razon"] != ""                 &&
            isset($_POST["rut"])                  && $_POST["rut"]  != ""                  &&
            isset($_POST["domicilio"])            && $_POST["domicilio"]  != ""            &&
            isset($_POST["presidente"])           && $_POST["presidente"]  != ""           &&
            isset($_POST["presidente_rut"])       && $_POST["presidente_rut"]  != ""       &&
            isset($_POST["presidente_domicilio"]) && $_POST["presidente_domicilio"]  != "" &&
            isset($_POST["presidente_telefono"])  && $_POST["presidente_telefono"]  != ""  &&
            isset($_POST["presidente_email"])     && $_POST["presidente_email"]  != ""
            ){

                require_once("connect.php");
                $query = "INSERT INTO club
                     (rut,razon_social,domicilio,presidente,presidente_rut,
                      presidente_domicilio,presidente_telefono,presidente_email)
                      VALUES (".$_POST["rut"].",
                        '".$_POST["razon"]."',
                        '".$_POST["domicilio"]."',
                        '".$_POST["presidente"]."',
                        ".$_POST["presidente_rut"].",
                        '".$_POST["presidente_domicilio"]."',
                        ".$_POST["presidente_telefono"].",
                        '".$_POST["presidente_email"]."');";

                $result = mysql_query($query);
                if($result){
                    echo"<div class=\"main_container\">
                           <div class=\"notification success hideit\">
                              <strong>&Eacute;xito: </strong> Se ha creado el club!
                           </div>
                        </div>";
                }
                else{
                    echo"<div class=\"main_container\">
                           <div class=\"notification failure hideit\">
                              <strong>FALLO: </strong>Algo sali&oacute; mal, no se cre&oacute; el club.
                           </div>
                        </div>";
                }
            }
            ?>
            </div>

        </div>
    </div>
<?php require_once("footer.php"); ?>
