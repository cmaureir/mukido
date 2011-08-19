<?php

function add2db($query){
	$file = fopen('../../info.txt','r');
	$url = trim(fgets($file));
	$user = trim(fgets($file));
	$pass = trim(fgets($file));
	fclose($file);
	
	mysql_connect($url,$user, $pass)or die ('Ha fallado la conexión: '.mysql_error().'Valores'.'"'.$user.'"'.$pass.'"');
	mysql_select_db('mukido_adm')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

	$result = mysql_query($query);

	if ($result) {
		echo 'ok';
	}
	else {
		echo 'error';
	}

	mysql_close();
}
