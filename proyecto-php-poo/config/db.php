<?php 

	class Database
	{
		public static function connect(){
			$db = new mysqli('localhost', 'root','','proyecto-php-poo-mvc');

			$db->query("SET NAMES 'utf8'");

			return $db;
		}
	}



 ?>