<?php 
/*
	1- Verifica si existe la variable "$_POST".

	2- Si la variable "$_POST", que es un arraw,
	tiene un elemento llamado "user_writed", retornará
	a la web un mensaje concatenando el dato que el
	usuario mandó.

	(Resumen: Si el usuario ha mandado datos, retorna
	el mensaje + los datos).

	3- Si la variable "$_POST", que es un arraw, viene
	vacía retorna un mensaje. 

	(Resumen: Si el usuario solicita datos, retorna
	los datos).
*/

	
	if (isset($_POST)) {
		// var_dump($_POST);
		if ($_POST['user_writed']) {
			echo "Mensaje escrito por usuario: ".$_POST['user_writed'];
		}
		
		if (empty($_POST)) {
			echo "holaa, mensaje desde el back-end";
		}
	}

?>