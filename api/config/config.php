<?php
	
	/*
	* 1 = mysql 
	* 2 = sqlserver
	*/

	$dateBase = 1; // base de datos seleccionada
	switch ($dateBase) {

		case '1':

			//CONFIGURACION DB
			if (!defined('DB_USUARIO')) define('DB_USUARIO', 'root');
			if (!defined('DB_CLAVE')) define('DB_CLAVE', '');
			if (!defined('DB_NOMBRE')) define('DB_NOMBRE', 'demolideres');
			if (!defined('DB_HOST')) define('DB_HOST', 'localhost');

			include_once "ez_sql/ez_sql_core.php";
			include_once "ez_sql/ez_sql_mysql.php";

			$db = new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST);
			$setCharacter = "SET CHARACTER SET utf8";
			$db->query($setCharacter);
			$conexion	= 'new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST)';  //esta linea es para las conexiones con clases ej. permisos.php

			//variable con tipo BD
			$tipoConexion = 'ezSQL_mysql';		 
			
			$setCharacter = "SET CHARACTER SET utf8";
			$db->query($setCharacter);
			

		break;
		
		case '2':

			//CONFIGURACION DB
			if (!defined('DB_USUARIO')) define('DB_USUARIO', 'editoria_admin');// server => nuvoll_admin

			if (!defined('DB_CLAVE')) define('DB_CLAVE', 'Milenio*2018*');// server => rafael7961
			if (!defined('DB_NOMBRE')) define('DB_NOMBRE', 'editoria_millas');// server => nuvoll_edificios
			if (!defined('DB_HOST')) define('DB_HOST', 'localhost');

			include_once "ez_sql/ez_sql_core.php";
			include_once "ez_sql/ez_sql_mysql.php";

			$db = new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST);
			$setCharacter = "SET CHARACTER SET utf8";
			$db->query($setCharacter);
			$conexion	= 'new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST)';  //esta linea es para las conexiones con clases ej. permisos.php

			//variable con tipo BD
			$tipoConexion = 'ezSQL_mysql';
			
			$setCharacter = "SET CHARACTER SET utf8";
			$db->query($setCharacter);
			

		break;

		case '3':

			//CONFIGURACION DB
			if (!defined('DB_USUARIO')) define('DB_USUARIO', 'editoria_admin');// server => nuvoll_admin

			if (!defined('DB_CLAVE')) define('DB_CLAVE', 'Milenio*2018*');// server => rafael7961
			if (!defined('DB_NOMBRE')) define('DB_NOMBRE', 'editoria_pruebas');// server => nuvoll_edificios
			if (!defined('DB_HOST')) define('DB_HOST', 'localhost');

			include_once "ez_sql/ez_sql_core.php";
			include_once "ez_sql/ez_sql_mysql.php";

			$db = new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST);
			$setCharacter = "SET CHARACTER SET utf8";
			$db->query($setCharacter);
			$conexion	= 'new ezSQL_mysql(DB_USUARIO,DB_CLAVE,DB_NOMBRE,DB_HOST)';  //esta linea es para las conexiones con clases ej. permisos.php

			//variable con tipo BD
			$tipoConexion = 'ezSQL_mysql';
			
			$setCharacter = "SET CHARACTER SET utf8";
			$db->query($setCharacter);
			

		break;
		
	}
	

?>
