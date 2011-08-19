<?php session_start();


$file = fopen('../../info.txt','r');
$url = trim(fgets($file));
$user = trim(fgets($file));
$pass = trim(fgets($file));
fclose($file);

mysql_connect($url,$user, $pass)or die ('Ha fallado la conexión: '.mysql_error().'Valores'.'"'.$user.'"'.$pass.'"');
mysql_select_db('mukido_adm')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}
if(trim($_POST["username"]) != "" && trim($_POST["password"]) != "")
{
	//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
	//$password = $HTTP_POST_VARS["password"];
	$usuario = strtolower(htmlentities($_POST["username"], ENT_QUOTES));
	$password = sha1($_POST["password"]);
       
	$result = mysql_query('SELECT password, username FROM administrador WHERE username=\''.$usuario.'\'');

	if($row = mysql_fetch_array($result))
	{
		if($row['password'] == $password)
		{
			$_SESSION['username'] = $row['username'];
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
