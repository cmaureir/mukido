<?php require_once("header.php");
 ?>
    <div id="content">

    	<div class="wrapper">
		<?php require_once("sidebar.php"); ?>
			<div class="mainContent">
            <div class="breadCrumbHolder module"><div id="breadCrumb0" class="breadCrumb module">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="listados.php">Listados</a></li>
                    </ul>
            </div></div>
	        	<h2>Listados</h2>
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
               <p align="center">
					<a class="button blue" href="listado_alumnos.php">Alumnos</a>
					<a class="button blue" href="listado_cuotas.php">Cuotas</a>
               <br/><br/><br/>
					<a class="button blue" href="listado_resultados.php">Resultados</a>
					<a class="button blue" href="listado_examenes.php">Examenes</a>
					<a class="button blue" href="listado_actividades.php">Actividades</a>
               </p>
					<?php }?>
			</div>

		</div>
    </div>
<?php require_once("footer.php"); ?>
