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
                        <li>Creaci&oacute;n Alumnos</li>
                    </ul>
            </div></div>

              <h2>Creaci&oacute;n Alumnos</h2>
               <div class="txt1">
               </div>
               <div class="line-hor"></div>

               <?php
               if (!isset($_SESSION['username'])) {
                  echo"
                  <SCRIPT LANGUAGE=\"javascript\">location.href = \"login.php\";</SCRIPT>";
               }
               else{?>
                  <h3>Datos Alumno</h3>
                  <form action="creacion_alumno.php" method="post" name="nuevomiembro" enctype="multipart/form-data">
                     <div id="total-column"><label>Nombres:</label> <input type="text" name="nombres" /></div>
                     <div id="half-column"><label>A. Paterno: </label><input type="text" name="paterno" maxlength="10"/></div>
                     <div id="half-column"><label>A. Materno: </label><input type="text" name="materno" maxlength="10"/></div>
                     <div id="total-column"><label>Email: </label><input type="text" name="email" /></div>
                     <div id="half-column"><label>R.U.T: </label><input type="text" name="rut" maxlength="10"/></div>
                     <div id="half-column"><label>Actividad: </label><input type="text" name="actividad" /></div>
                     <div id="total-column"><label>Instituci&oacute;n: </label><input type="text" name="institucion"/></div>
                     <div id="total-column"><label>Direcci&oacute;n: </label><input type="text" name="direccion"/></div>
                     <div id="half-column"><label>F. Nac.: </label><input type="text" id="fnac" name="fnac" /></div>
                     <div id="half-column"><label>F. Inicio: </label><input type="text" name="finicio" id="finicio" /></div>
                     <div id="half-column"><label>Telefono: </label><input type="text" name="celular"/></div>
                     <div id="half-column"><label>Celular: </label><input type="text" name="telefono"/></div>
                     <div id="half-column"><label>Grado: </label>
                        <select name="grado" >
                           <option value="10">Blanco</option>
                           <option value="9">Punta Amarillo</option>
                           <option value="8">Amarillo</option>
                           <option value="7">Punta Verde</option>
                           <option value="6">Verde</option>
                           <option value="5">Punta Azul</option>
                           <option value="4">Azul</option>
                           <option value="3">Punta Roja</option>
                           <option value="2">Rojo</option>
                           <option value="1">Punta Negra</option>
                           <option value="0">1er DAN</option>
                           <option value="-1">2do DAN</option>
                           <option value="-2">3er DAN</option>
                           <option value="-3">4to DAN</option>
                           <option value="-4">5to DAN</option>
                           <option value="-5">6to DAN</option>
                           <option value="-6">7mo DAN</option>
                           <option value="-7">8vo DAN</option>
                           <option value="-8">9no DAN</option>
                           <option value="-9">10mo DAN</option>
                        </select>
                     </div>
                     <div id="half-column"><label>Sexo: </label>
                        <select name="sexo">
                           <option value="M">Masculino</option>
                           <option value="F">Femenino</option>
                        </select>
                     </div>
                     <div id="half-column"><label>Peso: </label><input type="text" name="peso"/> kg</div>
                     <div id="half-column"><label>Altura: </label><input type="text" name="altura"/> cm</div>
                     <div id="total-column"><label>Foto: </label><input type="file" name="foto" /></div>
                     <div id="total-column"><label>Club: </label>
                        <select name="club">

                           <?php
                              require_once("connect.php");
                              $query = "SELECT rut,razon_social FROM club";
                              $result = mysql_query($query);
                              if(mysql_num_rows($result) > 0){
                                 while ($row = mysql_fetch_assoc($result)) {
                                    echo "<option value=\"".$row["rut"]."\">".$row["razon_social"]."</option>";
                                 }
                              }
                              else {
                                 echo "<option value=\"0\">Sin clubes</option>";
                              }
                              mysql_free_result($result);
                           ?>
                        </select>
                     </div>
                     <div id="total-column"><div class="line-hor"></div></div>
                     <div id="total-column"><h3>Seleccionar Apoderado</h3></div>
                     <div id="half-column"><input type="radio" name="cb" id="old" value="old" checked> Usar existente</div>
                     <div id="half-column"><input type="radio" name="cb" id="new" value="new"> Crear nuevo</div>
                     <div id="total-column"><label>Apoderados: </label>
                        <select name="apoderado_select" id="apoderado_select">

                           <?php
                              require_once("connect.php");
                              $query = "SELECT rut,nombre FROM apoderado";
                              $result = mysql_query($query);
                              if(mysql_num_rows($result) > 0){
                                 while ($row = mysql_fetch_assoc($result)) {
                                    echo "<option value=\"".$row["rut"]."\">".$row["nombre"]."</option>";
                                 }
                              }
                              else {
                                 echo "<option value=\"0\">Sin apoderados</option>";
                              }
                              mysql_free_result($result);
                           ?>
                        </select>
                     </div>

                     <div id="total-column"><label>Nombre: </label><input type="text" name="apoderado" id="apoderado" disabled/></div>
                     <div id="half-column"><label>R.U.T: </label><input type="text" id="apoderado_rut"name="apoderado_rut" disabled /></div>
                     <div id="half-column"><label>Telefono: </label><input type="text" id="apoderado_tel" name="apoderado_tel" disabled/></div>
                     <div id="total-column"><label>Email: </label><input type="text" id="apoderado_email"  name="apoderado_email" disabled /></div>
                     <div id="total-column"><label>Direcci&oacute;n: </label><input type="text" id="apoderado_dir"  name="apoderado_dir" disabled /></div>
                     <div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear Alumno" id="crear" name="crear"/></div>
                  </form>
               <?php }?>
         <?php
         if (isset($_POST["nombres"])    && $_POST["nombres"]     != "" &&
            isset($_POST["paterno"])     && $_POST["paterno"]     != "" &&
            isset($_POST["materno"])     && $_POST["materno"]     != "" &&
            isset($_POST["email"])       && $_POST["email"]       != "" &&
            isset($_POST["rut"])         && $_POST["rut"]         != "" &&
            isset($_POST["actividad"])   && $_POST["actividad"]   != "" &&
            isset($_POST["institucion"]) && $_POST["institucion"] != "" &&
            isset($_POST["direccion"])   && $_POST["direccion"]   != "" &&
            isset($_POST["fnac"])        && $_POST["fnac"]        != "" &&
            isset($_POST["finicio"])     && $_POST["finicio"]     != "" &&
            isset($_POST["celular"])     && $_POST["celular"]     != "" &&
            isset($_POST["telefono"])    && $_POST["telefono"]    != "" &&
            isset($_POST["grado"])       && $_POST["grado"]       != "" &&
            isset($_POST["sexo"])        && $_POST["sexo"]        != "" &&
            isset($_POST["peso"])        && $_POST["peso"]        != "" &&
            isset($_POST["altura"])      && $_POST["altura"]      != "" &&
            isset($_POST["club"])        && $_POST["club"]        != "" &&
            isset($_POST["cb"])
            ){
            // Usando apoderado existente
            if($_POST["cb"] == "old"){
               $apoderado = $_POST["apoderado_select"];
            }
            // Creando nuevo apoderado
            else if ($_POST["cb"] == "new"){
               // Crear nuevo
               if(isset($_POST["apoderado"])       && $_POST["apoderado"]       != "" &&
                  isset($_POST["apoderado_rut"])   && $_POST["apoderado_rut"]   != "" &&
                  isset($_POST["apoderado_tel"])   && $_POST["apoderado_tel"]   != "" &&
                  isset($_POST["apoderado_dir"])   && $_POST["apoderado_dir"]   != "" &&
                  isset($_POST["apoderado_email"]) && $_POST["apoderado_email"] != "" ) {

                      require_once("connect.php");
                      $query = "INSERT INTO apoderado
                           (rut,nombre,direccion,telefono,email)
                            VALUES (".$_POST["apoderado_rut"].",
                              '".$_POST["apoderado"]."',
                              '".$_POST["apoderado_dir"]."',
                              '".$_POST["apoderado_tel"]."',
                              '".$_POST["apoderado_email"]."');";
                      $result = mysql_query($query);
                      if($result){
                          echo"<div class=\"main_container\">
                                 <div class=\"notification success hideit\">
                                    <strong>&Eacute;xito: </strong> Se ha creado un nuevo apoderado!
                                 </div>
                              </div>";
                      }
                      else{
                          echo"<div class=\"main_container\">
                                 <div class=\"notification failure hideit\">
                                    <strong>FALLO: </strong>Algo sali&oacute; mal, no se cre&oacute; el apoderado (Error BD).
                                 </div>
                              </div>";
                      }
               }
               else {
                     echo"<div class=\"main_container\">
                            <div class=\"notification failure hideit\">
                               <strong>FALLO: </strong>Algo sali&oacute; mal, no se cre&oacute; el apoderado (Error datos).
                            </div>
                         </div>";
               }
               // Seleccionarlo
               $apoderado = $_POST["apoderado_rut"];
            }

            // Subir foto

            $tamano = $_FILES["foto"]['size'];
            $tipo = $_FILES["foto"]['type'];
            $archivo = $_FILES["foto"]['name'];
            $prefijo = substr(md5(uniqid(rand())),0,6);

            if ($archivo != "") {
                $destino =  "fotos/".$prefijo."_".$archivo;
                if (copy($_FILES['foto']['tmp_name'],$destino)) {
                    echo"<div class=\"main_container\">
                           <div class=\"notification success hideit\">
                              <strong>&Eacute;xito: </strong> Foto subida con &eacute;xito.
                           </div>
                        </div>";
                } else {
                    echo"<div class=\"main_container\">
                           <div class=\"notification failure hideit\">
                              <strong>FALLO: </strong>Error al subir la foto (copiar).
                           </div>
                        </div>";
                }
            } else {
                    echo"<div class=\"main_container\">
                           <div class=\"notification failure hideit\">
                              <strong>FALLO: </strong>Error al subir la foto (vacio).
                           </div>
                        </div>";
            }


            // Crear alumno
                require_once("connect.php");
                $query = "INSERT INTO alumno
                     (rut,rut_apoderado,nombres,apellido_paterno,apellido_materno,email,actividad,institucion,direccion,
                      f_nacimiento,f_inicio,telefono,celular,grado,sexo,peso,altura,foto,club,vigente)
                      VALUES (".$_POST["rut"].",".$apoderado.",'".$_POST["nombres"]."',
                        '".$_POST["paterno"]."','".$_POST["materno"]."','".$_POST["email"]."',
                        '".$_POST["actividad"]."','".$_POST["institucion"]."','".$_POST["direccion"]."',
                        '".clt_to_mysql($_POST["fnac"])."', '".clt_to_mysql($_POST["finicio"])."',".$_POST["telefono"].",
                        ".$_POST["celular"].",".$_POST["grado"].", '".$_POST["sexo"]."', ".$_POST["peso"].",
                        ".$_POST["altura"].",'".$destino."','".$_POST["club"]."', TRUE);";
                $result = mysql_query($query);
                if($result){
                    echo"<div class=\"main_container\">
                           <div class=\"notification success hideit\">
                              <strong>&Eacute;xito: </strong> Se ha creado el alumno!
                           </div>
                        </div>";
                }
                else{
                    echo"<div class=\"main_container\">
                           <div class=\"notification failure hideit\">
                              <strong>FALLO: </strong>Algo sali&oacute; mal, no se cre&oacute; el alumno (Error BD).
                           </div>
                        </div>";
                }
         }
         ?>
         </div>

      </div>
    </div>
<?php require_once("footer.php"); ?>
