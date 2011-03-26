<?php require_once("header.php");
 ?>
    <div id="content">

    	<div class="wrapper">
		<?php require_once("sidebar.php"); ?>
			<div class="mainContent">

	        	<h2>Creaci&oacute;n Alumnos</h2>
					<div class="txt1">
					</div>
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
                  <h3>Datos Alumno</h3>
						<form action="creacion_alumno.php" method="post">
							<div id="total-column"><label>Nombres:</label> <input type="text" name="nombre" /></div>
							<div id="half-column"><label>Apellido Paterno: </label><input type="text" name="rut" maxlength="10"/></div>
							<div id="half-column"><label>Apellido Materno: </label><input type="text" name="rut" maxlength="10"/></div>
							<div id="total-column"><label>Email: </label><input type="text" name="email" /></div>
							<div id="half-column"><label>R.U.T: </label><input type="text" name="rut" maxlength="10"/></div>
							<div id="half-column"><label>Actividad: </label><input type="text" name="actividad" /></div>
							<div id="total-column"><label>Domicilio: </label><input type="text" name="domicilio"/></div>
							<div id="half-column"><label>Fecha de Nacimiento: </label><input type="text" name="fecha_nac" id="fecha_nac" class="date-pick"/></div>
							<div id="half-column"><label>Fecha Inicio: </label><input type="text" name="fecha_inicio" id="fecha_inicio" class="date-pick"/></div>
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
							<div id="total-column"><div class="line-hor"></div></div>
                     <div id="total-column"><h3>Datos Apoderado</h3></div>
							<div id="total-column"><label>Nomnre: </label><input type="text" name="apoderado"/></div>
							<div id="half-column"><label>R.U.T: </label><input type="text" name="apoderado_rut" /></div>
							<div id="half-column"><label>Telefono: </label><input type="text" name="apoderado_telefono"/></div>
							<div id="total-column"><label>Email: </label><input type="text" name="apoderado_email"/></div>
							<div id="submit-column"><label>&nbsp;</label><input type="submit" value="Agregar"/></div>
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
