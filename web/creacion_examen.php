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
                        <li>Creaci&oacute;n Examen</li>
                    </ul>
            </div></div>
	        	<h2>Creaci&oacute;n Examen</h2>
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

						<form action="creacion_examen.php" method="post">
							<div id="total-column"><label>Descripci&oacute;n: </label><input type="text" name="descripcion" /></div>
							<div id="half-column"><label>Ciudad: </label><input type="text" name="ciudad"  /></div>
							<div id="half-column"><label>Lugar: </label><input type="text" name="lugar" /></div>
							<div id="half-column"><label>Fecha: </label><input type="text" name="fecha" id="fecha" class="date-pick"/></div>
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
