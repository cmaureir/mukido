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
						<SCRIPT LANGUAGE=\"javascript\">
        				location.href = \"login.php\";
        				</SCRIPT>
						";
					}
					else{?>

						<form action="creacion_campeonato.php" method="post">
							<div id="total-column"><label>Nombre: </label>
                        <select name="alumno" />
                           <!-- llenar esto con BD -->
                           <option value="rut"> A. Paterno A.Materno, Nombres</option>
                        </select>
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
							<div id="half-column"><label>Monto: </label><input type="text" name="monton" /> CLP</div>



							<div id="submit-column"><label>&nbsp;</label><input type="submit" value="Crear"/></div>
						</form>
					<?php }?>
			<?php
			if (isset($_POST["razon"]) && $_POST["razon"] != "" &&
				isset($_POST["rut"])   && $_POST["rut"]  != "" && 
				isset($_POST["domicilio"])   && $_POST["domicilio"]  != "" && 
				isset($_POST["presidente"])   && $_POST["presidente"]  != "" && 
				isset($_POST["presidente_rut"])   && $_POST["presidente_rut"]  != "" && 
				isset($_POST["presidente_domicilio"])   && $_POST["presidente_domicilio"]  != "" && 
				isset($_POST["presidente_telefono"])   && $_POST["presidente_telefono"]  != "" && 
				isset($_POST["presidente_email"])   && $_POST["presidente_email"]  != ""
				){

				echo $_POST["rut"];
			}
			?>
			</div>

		</div>
    </div>
<?php require_once("footer.php"); ?>
