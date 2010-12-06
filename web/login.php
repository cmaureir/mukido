<?php require_once("header.php"); ?>
    <div id="content">
    	<div class="wrapper">
			<div class="mainContent">
		        	<h2>Login:</h2>
					<p align="center">
						<div class="txt1">
					<?php			
					if (isset($_SESSION['username'])) {
						
						echo"
						<SCRIPT LANGUAGE=\"javascript\">
        				location.href = \"index.php\";
        				</SCRIPT>
						";
					}
					else{?>
      						<form action="userValidation.php" method="post">
      						Usuario:<br/>
							<input type="text" name="usuario" size="15" maxlength="15" />
      						<br /><br />
      						Password:<br/>
							<input type="password" name="password" size="15" maxlength="15" />
      						<br /><br />
      						<input type="submit" value="Ingresar" />
      						</form>
					<?php }?>
						</div>
					</p>
			</div>

		</div>
    </div>
<?php require_once("footer.php"); ?>
