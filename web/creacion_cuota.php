<?php require_once("header.php");
 ?>
    <div id="content">

    	<div class="wrapper">
		<?php require_once("sidebar.php"); ?>
			<div class="mainContent">
	        	<h2>Creaci&oacute;n Cuota</h2>
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

						<form action="creacion_alumno.php" method="post">
							<p><label>Nombre:</label> <input type="text" name="nombre" /></p>
							<p><label>R.U.T: </label><input type="text" name="rut" /></p>
							<p><label>Domicilio: </label><input type="text" name="domicilio" /></p>
							<p><label>Fecha de Nacimiento: </label><input type="text" name="fecha_nacimiento" /></p>
							<p><label>Fecha Inicio: </label><input type="text" name="fecha_inicio" /></p>
							<p><label>Actividad: </label><input type="text" name="actividad" /></p>
							<p><label>Telefono: </label><input type="text" name="telefono" /></p>
							<p><label>Direcci&oacute;n: </label><input type="text" name="direccion" /></p>
							<p><label>Grado: </label><input type="text" name="grado" /></p>
							<p><label>Peso: </label><input type="text" name="peso" /></p>
							<p><label>Altura: </label><input type="text" name="altura" /></p>
							<br/><br/>
							<p><label>Apoderado: </label><input type="text" name="apoderado" /></p>
							<p><label>R.U.T: </label><input type="text" name="apoderado_rut" /></p>
							<p><label>Telefono: </label><input type="text" name="apoderado_telefono" /></p>
							<p><label>Email: </label><input type="text" name="apoderado_email" /></p>
							<p><label>&nbsp;</label><input type="submit" /></p>
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
