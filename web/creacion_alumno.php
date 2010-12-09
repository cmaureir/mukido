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

						<form action="creacion_alumno.php" method="post">
							<div id="total-column"><label>Nombre:</label> <input type="text" name="nombre" size="40" /></div>
							<div id="half-column"><label>R.U.T: </label><input type="text" name="rut" size="10" maxlength="10"/></div>
							<div id="half-column"><label>Actividad: </label><input type="text" name="actividad" /></div>
							<div id="total-column"><label>Domicilio: </label><input type="text" name="domicilio" size="40"/></div>
							<div id="half-column"><label>Fecha de Nacimiento: </label><input type="text" name="fecha_nacimiento" /></div>
							<div id="half-column"><label>Fecha Inicio: </label><input type="text" name="fecha_inicio" /></div>
							<div id="total-column"><label>Direcci&oacute;n: </label><input type="text" name="direccion" size="40"/></div>
							<div id="half-column"><label>Telefono: </label><input type="text" name="telefono" size="10"/></div>
							<div id="half-column"><label>Celular: </label><input type="text" name="telefono" size="11"/></div>
							<div id="sq-column"><label>Grado: </label><input type="text" name="grado" size="2"/></div>
							<div id="sq-column"><label>Peso: </label><input type="text" name="peso" size="3"/></div>
							<div id="sq-column"><label>Altura: </label><input type="text" name="altura" size="3"/></div>
							<div id="total-column"><div class="line-hor"></div></div>
							<div id="total-column"><label>Apoderado: </label><input type="text" name="apoderado" size="40"/></div>
							<div id="q-column"><label>R.U.T: </label><input type="text" name="apoderado_rut" size="10"/></div>
							<div id="half-column"><label>Telefono: </label><input type="text" name="apoderado_telefono" size="10"/></div>
							<div id="total-column"><label>Email: </label><input type="text" name="apoderado_email" size="30"/></div>
							<div id="total-column"><label>&nbsp;</label><input type="submit" value="Agregar"/></div>
						</form>
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
