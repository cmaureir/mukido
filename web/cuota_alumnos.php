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
                        <li>Alumnos</li>
                    </ul>
            </div></div>
              <h2>Creaci&oacute;n cuota alumno</h2>
               <div class="line-hor"></div>

               <?php
               if (!isset($_SESSION['username'])) {
                  echo"<SCRIPT LANGUAGE=\"javascript\">location.href = \"login.php\";</SCRIPT>";
               }
               else{?>

                  <form action="cuota_alumnos.php" method="post" name="cuotas">
                     <h3>Seleccione alumnos:</h3>
                     <div id="cuota-column">

                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                            <thead>
                                <tr>
                                    <th>RUT</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombres</th>
                                </tr>
                            </thead>
                            <tbody>

                           <?php
                           //   require_once("connect.php");
                           //   $query = "SELECT rut,nombres,apellido_paterno,apellido_materno FROM alumno";
                           //   $result = mysql_query($query);
                           //   if(mysql_num_rows($result) > 0){
                           //      while ($row = mysql_fetch_assoc($result)) {
                           //         $nombre = $row["apellido_paterno"]." ".$row["apellido_materno"].", ".$row["nombres"];
                           //         echo "<option value=\"".$row["rut"]."\">".$nombre."</option>";
                           //      }
                           //   }
                           //   else {
                           //      echo "<option value=\"0\">Sin alumnos</option>";
                           //   }
                           //   mysql_free_result($result);

                           ?>

                                <tr class="gradeB">
                                    <td class="center">1111</td>
                                    <td>lala</td>
                                    <td>lele</td>
                                    <td>lili</td>
                                </tr>
                                <tr class="gradeB">
                                    <td class="center">2222</td>
                                    <td>sasa</td>
                                    <td>sese</td>
                                    <td>sisi</td>
                                </tr>
                                <tr class="gradeB">
                                    <td class="center">3333</td>
                                    <td>qaqa</td>
                                    <td>qeqe</td>
                                    <td>qiqi</td>
                                </tr>
                                <tr class="gradeB">
                                    <td class="center">4444</td>
                                    <td>rara</td>
                                    <td>rere</td>
                                    <td>riri</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>RUT</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombres</th>
                                </tr>
                            </tfoot>
                        </table>

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
<!--                     <div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear"/></div>-->
                     <input type="hidden" name="test" value="">
                     <div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear" onClick="javascript:document.cuotas.test.value = fnGetSelected().toString();"/></div>
                  </form>
               <?php }?>
         <?php
         if (/*isset($_POST["alumno"]) && $_POST["alumno"] != "" &&
            isset($_POST["m_ini"])   && $_POST["m_ini"]  != "" &&
            isset($_POST["a_ini"])   && $_POST["a_ini"]  != "" &&
            isset($_POST["m_fin"])   && $_POST["m_fin"]  != "" &&
            isset($_POST["a_fin"])   && $_POST["a_fin"]  != "" &&*/
            isset($_POST["monto"])   && $_POST["monto"]  != ""
            ){
            //$valor = $_POST["test"];
            //$arrayphp = explode(',',$valor);
            //echo $arrayphp;
         }
         ?>
         </div>

      </div>
    </div>
<?php require_once("footer.php"); ?>
