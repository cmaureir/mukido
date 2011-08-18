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
						
						echo"
						<SCRIPT LANGUAGE=\"javascript\">
        				location.href = \"login.php\";
        				</SCRIPT>
						";
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
							<div id="half-column"><label>Mes inicio: </label>
                        <select name="mes_ini" />
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
							<div id="half-column"><label>A&ntilde;o inicio: </label><input type="text" name="anio_ini" /></div>
							<div id="half-column"><label>Mes final: </label>
                        <select name="mes_fin" />
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
							<div id="half-column"><label>A&ntilde;o final: </label><input type="text" name="anio_fin" /></div>
				      	<div id="half-column"><label>Monto: </label><input type="text" name="monto" /> CLP</div>
                     <input type="hidden" name="ruts" value="">
							<div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear" onClick="javascript:document.cuotas.ruts.value = values"/></div>
						</form>
					<?php }?>
			<?php
			if (isset($_POST["ruts"]) && $_POST["ruts"] != "" &&
				isset($_POST["mes_ini"])   && $_POST["mes_ini"]  != "" && 
				isset($_POST["anio_ini"])   && $_POST["anio_ini"]  != "" && 
				isset($_POST["mes_fin"])   && $_POST["mes_fin"]  != "" && 
				isset($_POST["anio_fin"])   && $_POST["anio_fin"]  != "" && 
				isset($_POST["monto"])   && $_POST["monto"]  != ""
				){

            // DB stuff
			}
			?>
			</div>

		</div>
    </div>
<?php require_once("footer.php"); ?>
