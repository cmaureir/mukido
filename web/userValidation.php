<?php session_start();

//datos para establecer la conexion con la base de mysql.
mysql_connect('http://mysql.mukido.cl','mukidoadmin','sky19saint')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('mukido_adm')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}
if(trim($_POST["username"]) != "" && trim($_POST["password"]) != "")
{
	// Puedes utilizar la funcion para eliminar algun caracter en especifico
	//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
	//$password = $HTTP_POST_VARS["password"];
	// o puedes convertir los a su entidad HTML aplicable con htmlentities
	$usuario = strtolower(htmlentities($_POST["username"], ENT_QUOTES));
	$password = sha1($_POST["password"]);

	$result = mysql_query('SELECT password, username FROM administrador WHERE username=\''.$usuario.'\'');
	
//	//tmp
//	if ($usuario == "admin" && $password == "trololo")
//	{
//		$_SESSION["username"] = $usuario;
//		echo"
//		<SCRIPT LANGUAGE=\"javascript\">
//        location.href = \"index.php\";
//        </SCRIPT>
//		";
//		
//	}

	if($row = mysql_fetch_array($result))
	{
		if($row["password"] == $password)
		{
			$_SESSION["username"] = $row['usuario'];
			//echo 'Has sido logueado correctamente '.$_SESSION['username'].' <p>';
			//echo '<a href="index.php">Index</a></p>';
            echo "
			<SCRIPT LANGUAGE=\"javascript\">
			location.href = \"index.php\";
			</SCRIPT>
            ";
		}
		else
		{
			echo 'Password incorrecto';
		}
	}
	else
	{
		echo 'Usuario no existente en la base de datos';
	}
	mysql_free_result($result);
}
else{
	echo 'Debe especificar un usuario y password';
}
mysql_close();
?>
