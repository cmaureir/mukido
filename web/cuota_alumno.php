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
                        <li><a href="creacion_cuota.php">Creaci&oacute;n cuota</a></li>
                        <li>Alumno</li>
                    </ul>
            </div></div>
              <h2>Creaci&oacute;n cuota alumno</h2>
               <div class="line-hor"></div>
               <?php
               if (!isset($_SESSION['username'])) {
                  echo"
                  <SCRIPT LANGUAGE=\"javascript\">location.href = \"login.php\";</SCRIPT>
                  ";
               }
               else{?>

                  <form action="cuota_alumno.php" method="post">
                     <div id="total-column"><label>Nombre: </label>
                        <select name="alumno" />
                           <?php
                              require_once("connect.php");
                              $query = "SELECT rut,nombres,apellido_paterno,apellido_materno FROM alumno";
                              $result = mysql_query($query);
                              if(mysql_num_rows($result) > 0){
                                 while ($row = mysql_fetch_assoc($result)) {
                                    $nombre = $row["apellido_paterno"]." ".$row["apellido_materno"].", ".$row["nombres"];
                                    echo "<option value=\"".$row["rut"]."\">".$nombre."</option>";
                                 }
                              }
                              else {
                                 echo "<option value=\"0\">Sin alumnos</option>";
                              }
                              mysql_free_result($result);

                           ?>
                        </select>
                     </div>
                     <div id="total-column"></div>
                     <div id="half-column"><label>Mes inicio: </label>
                        <select name="m_ini" />
                           <option value="1">Enero</option>
                           <option value="2">Febrero</option>
                           <option value="3">Marzo</option>
                           <option value="4">Abril</option>
                           <option value="5">Mayo</option>
                           <option value="6">Junio</option>
                           <option value="7">Julio</option>
                           <option value="8">Agosto</option>
                           <option value="9">Septiembre</option>
                           <option value="10">Octubre</option>
                           <option value="11">Noviembre</option>
                           <option value="12">Diciembre</option>
                        </select>
                     </div>
                     <div id="half-column"><label>A&ntilde;o inicio: </label><input type="text" name="a_ini" /></div>
                     <div id="total-column"></div>
                     <div id="half-column"><label>Mes final: </label>
                        <select name="m_fin" />
                           <option value="1">Enero</option>
                           <option value="2">Febrero</option>
                           <option value="3">Marzo</option>
                           <option value="4">Abril</option>
                           <option value="5">Mayo</option>
                           <option value="6">Junio</option>
                           <option value="7">Julio</option>
                           <option value="8">Agosto</option>
                           <option value="9">Septiembre</option>
                           <option value="10">Octubre</option>
                           <option value="11">Noviembre</option>
                           <option value="12">Diciembre</option>
                        </select>
                     </div>
                     <div id="half-column"><label>A&ntilde;o final: </label><input type="text" name="a_fin" /></div>
                     <div id="total-column"></div>
                     <div id="half-column"><label>Monto: </label><input type="text" name="monto" /> CLP</div>
                     <div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear"/></div>
                  </form>
               <?php }?>
         <?php
         if (isset($_POST["alumno"]) && $_POST["alumno"] != "" &&
            isset($_POST["m_ini"])   && $_POST["m_ini"]  != "" &&
            isset($_POST["a_ini"])   && $_POST["a_ini"]  != "" &&
            isset($_POST["m_fin"])   && $_POST["m_fin"]  != "" &&
            isset($_POST["a_fin"])   && $_POST["a_fin"]  != "" &&
            isset($_POST["monto"])   && $_POST["monto"]  != ""
            ){

               require_once("connect.php");

               $a_ini = $_POST["a_ini"];
               $m_ini = $_POST["m_ini"];
               $a_fin = $_POST["a_fin"];
               $m_fin = $_POST["m_fin"];
               $i=0;
               $j=0;
               $ini = 1;
               $fin = 12;
               $status = FALSE;
               // Verificar fechas
               if ($a_ini > $a_fin){
                    echo"<div class=\"main_container\">
                           <div class=\"notification failure hideit\">
                              <strong>FALLO: </strong>El a&ntilde;o inicial es mayor al a&ntilde;o final.
                           </div>
                        </div>";

               }
               else if ($a_ini == $a_fin && $m_ini > $m_fin) {
                    echo"<div class=\"main_container\">
                           <div class=\"notification failure hideit\">
                              <strong>FALLO: </strong>El mes inicial es mayor al mes final.
                           </div>
                        </div>";
               }
               else {

                  for($i=$a_ini;$i<=$a_fin;$i++){
                        if($a_ini == $a_fin){
                           $ini = $m_ini;
                           $fin = $m_fin;
                        }
                        else if($i == $a_ini){
                           $ini = $m_ini;
                           $fin = 12;
                        }
                        else if ($i == $a_fin){
                           $ini = 1;
                           $fin = $m_fin;
                        }
                        else {
                           $ini = 1;
                           $fin = 12;
                        }

                        for ($j = $ini; $j <= $fin; $j++) {


                           // verificamos si existe cuota
                           $query = "SELECT rut_alumno FROM cuota WHERE rut_alumno=".$_POST["alumno"]." AND mes=".$j." AND anio=".$i."";
                           $result = mysql_query($query);

                           if(mysql_num_rows($result) > 0){

                              echo"<div class=\"main_container\">
                                     <div class=\"notification failure hideit\">
                                        <strong>FALLO: </strong>La cuota ".$j."/".$i." del alumno ".$_POST["alumno"]." ya existe.
                                     </div>
                                  </div>";
                              $status = TRUE;
                              break;
                           }
                           mysql_free_result($result);

                           // Ingresamos cuota
                            $query = "INSERT INTO cuota
                                 (rut_alumno, mes, anio, monto, pagado)
                                  VALUES (".$_POST["alumno"].",
                                    ".$j.",
                                    ".$i.",
                                    ".$_POST["monto"].",
                                    FALSE);";
                            $result = mysql_query($query);
                            if(!$result){
                              $status = TRUE;
                            }
                            mysql_free_result($result);
                        }
                  }
                  if(!$status){
                      echo"<div class=\"main_container\">
                             <div class=\"notification success hideit\">
                                <strong>&Eacute;xito: </strong> Se han creado las cuotas!
                             </div>
                          </div>";
                  }
                  else{
                      echo"<div class=\"main_container\">
                             <div class=\"notification failure hideit\">
                                <strong>FALLO: </strong>Algo sali&oacute; mal, no se crearon las cuotas.
                             </div>
                          </div>";
                  }
               }

            }
         ?>
         </div>

      </div>
    </div>
<?php require_once("footer.php"); ?>
