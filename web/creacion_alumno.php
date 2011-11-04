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
                  <form action="creacion_alumno.php" method="post" name="nuevomiembro">
                     <div id="total-column"><label>Nombres:</label> <input type="text" name="nombre" /></div>
                     <div id="half-column"><label>A. Paterno: </label><input type="text" name="rut" maxlength="10"/></div>
                     <div id="half-column"><label>A. Materno: </label><input type="text" name="rut" maxlength="10"/></div>
                     <div id="total-column"><label>Email: </label><input type="text" name="email" /></div>
                     <div id="half-column"><label>R.U.T: </label><input type="text" name="rut" maxlength="10"/></div>
                     <div id="half-column"><label>Actividad: </label><input type="text" name="actividad" /></div>
                     <div id="total-column"><label>Domicilio: </label><input type="text" name="domicilio"/></div>
                     <div id="half-column"><label>F. Nac.: </label><input type="text" id="fecha_nac" name="fecha_nac" /></div>
                     <div id="half-column"><label>F. Inicio: </label><input type="text" name="fecha_inicio" id="fecha_inicio" /></div>
                     <div id="total-column"><label>Direcci&oacute;n: </label><input type="text" name="direccion"/></div>
                     <div id="half-column"><label>Actividad: </label><input type="text" name="actividad"/></div>
                     <div id="half-column"><label>Instituci&oacute;n: </label><input type="text" name="institucion"/></div>
                     <div id="half-column"><label>Telefono: </label><input type="text" name="telefono"/></div>
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
                     <div id="total-column"><label>Foto: </label><input type="file" name="foto"/></div>
                     <div id="total-column"><label>Club: </label>
                        <select name="club">

                           <?php
                              require_once("connect.php");
                              $query = "SELECT rut_club,razon_social FROM club";
                              $result = mysql_query($query);
                              if($result){
                                 while ($row = mysql_fetch_assoc($result)) {
                                    echo "<option value=\"".$row["rut_club"]."\">".$row["razon_social"]."</option>";
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
                     <div id="total-column"><label>Apoderados: </label>
                        <select name="apoderado-select" id="apoderado-select">

                           <?php
                              require_once("connect.php");
                              $query = "SELECT rut_apoderado,nombre FROM apoderado";
                              $result = mysql_query($query);
                              if($result){
                                 while ($row = mysql_fetch_assoc($result)) {
                                    echo "<option value=\"".$row["rut_apoderado"]."\">".$row["nombre"]."</option>";
                                 }
                              }
                              else {
                                 echo "<option value=\"0\">Sin clubes</option>";
                              }
                              mysql_free_result($result);
                           ?>
                        </select>
                     </div>
                     <div id="half-column"><input type="radio" name="cb" id="old" value="Existente" checked> Usar apoderado existente</div>
                     <div id="half-column"><input type="radio" name="cb" id="new" value="Nuevo"> Crear un nuevo apoderado </div>
                     <div id="total-column"><label>Nombre: </label><input type="text" name="apoderado" id="apoderado" disabled/></div>
                     <div id="half-column"><label>R.U.T: </label><input type="text" id="apoderado_rut"name="apoderado_rut" disabled /></div>
                     <div id="half-column"><label>Telefono: </label><input type="text" id="apoderado_telefono" name="apoderado_telefono" disabled/></div>
                     <div id="total-column"><label>Email: </label><input type="text" id="apoderado_email"  name="apoderado_email" disabled /></div>
                     <div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear Alumno" id="crear" name="crear" disabled/></div>
                  </form>
               <?php }?>
         <?php
         if (isset($_POST["nombre"]) && $_POST["nombre"] != "" &&
            isset($_POST["rut"])   && $_POST["rut"]  != "" && 
            isset($_POST["domicilio"])   && $_POST["domicilio"]  != "" && 
            isset($_POST["fecha_nacimiento"])   && $_POST["fecha_nacimiento"]  != "" && 
            isset($_POST["fecha_inicio"])   && $_POST["fecha_inicio"]  != "" && 
            isset($_POST["actividad"])   && $_POST["actividad"]  != "" && 
            isset($_POST["telefono"])   && $_POST["telefono"]  != "" && 
            isset($_POST["direccion"])   && $_POST["direccion"]  != "" &&
            isset($_POST["grado"])   && $_POST["grado"]  != "" &&
            isset($_POST["peso"])   && $_POST["peso"]  != "" &&
            isset($_POST["altura"])   && $_POST["altura"]  != "" &&
            isset($_POST["apoderado"])   && $_POST["apoderado"]  != "" &&
            isset($_POST["apoderado_rut"])   && $_POST["apoderado_rut"]  != "" &&
            isset($_POST["apoderado_telefono"])   && $_POST["apoderado_telefono"]  != "" &&
            isset($_POST["apoderado_email"])   && $_POST["apoderado_email"]  != "" 
            ){

            echo $_POST["rut"];
         }
         ?>
         </div>

      </div>
    </div>
<?php require_once("footer.php"); ?>
