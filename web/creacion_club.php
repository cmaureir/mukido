<?php require_once("header.php");
 ?>
    <div id="content">

    	<div class="wrapper">
		<?php require_once("sidebar.php"); ?>
			<div class="mainContent">
	        	<h2>Creaci&oacute;n Club</h2>
					<div class="line-hor"></div>
						<form action="creacion_club.php" method="post">
							<p><label>Raz&oacute;n Social:</label> <input type="text" name="razon" /><br/></p>
							<p><label>R.U.T: </label><input type="text" name="rut" /><br/></p>
							<p><label>Domicilio: </label><input type="text" name="domicilio" /><br/></p>
							<p><label>Presidente: </label><input type="text" name="presidente" /><br/></p>
							<p><label>R.U.T Presidente: </label><input type="text" name="presidente_rut" /><br/></p>
							<p><label>Domicilio Presidente: </label><input type="text" name="presidente_domicilio" /><br/></p>
							<p><label>Telefono: </label><input type="text" name="presidente_telefono" /><br/></p>
							<p><label>Email: </label><input type="text" name="presidente_email" /><br/></p>
							<p align="center"><input type="submit" /></p>
						</form>
			</div>

		</div>
    </div>
<?php require_once("footer.php"); ?>
