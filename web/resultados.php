<?php require_once("header.php");
 ?>
    <div id="content">

    	<div class="wrapper">
		<?php require_once("sidebar.php"); ?>
			<div class="mainContent">
	        	<h2>Resultados</h2>
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
					<a class="button blue" href="resultado_examen.php">Examen</a>
					<a class="button blue" href="resultado_campeonato.php">Campeonato</a>
					<a class="button blue" href="resultado_actividad.php">Actividad</a>
               </p>
					<?php }?>
			</div>

		</div>
    </div>
<?php require_once("footer.php"); ?>
