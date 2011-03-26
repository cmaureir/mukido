<?php require_once("header.php"); ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#username, #password").focus(function () {
        
        if ($(this).val() === $(this).attr("value")) 
        {
        $(this).val("");
        }
    }).blur(function () {
                    if ($(this).val() === "") {
                    $(this).val($(this).attr("value"));
                                                            }
                                        });
                        });
</script>


   <div id="content">
    	<div class="wrapper">
		<?php require_once("sidebar.php"); ?>
			<div class="mainContent">
<!--		        	<h2>Login:</h2>-->
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
                        <!--
      						<form action="userValidation.php" method="post">
      						Usuario:<br/>
							<input type="text" name="usuario" size="15" maxlength="15" />
      						<br /><br />
      						Password:<br/>
							<input type="password" name="password" size="15" maxlength="15" />
      						<br /><br />
      						<input type="submit" value="Ingresar" />
      						</form>
                        -->
                        <form action="userValidation.php" method="post">
                          <table width="250" border="0" align="center" cellpadding="05" cellspacing="1" id="logintable">
                            <tr>
                              <td width="192"><div class="message">Inicio sesi&oacute;n</div>
                        </td>
                            </tr>
                            <tr>
                              <td><input name="username" type="text" id="username" value="Usuario">
                                </td>
                            </tr>
                            <tr>
                              <td><input name="password" type="password" id="password" value="Contrase&ntilde;a">
                                </td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><input type="submit" name="button" class="submit" value="Entrar"</td>
                            </tr>
                          </table>
                        </form>

					<?php }?>
						</div>
					</p>
			</div>

		</div>
    </div>
<?php require_once("footer.php"); ?>
