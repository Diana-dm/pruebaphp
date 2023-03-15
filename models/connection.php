<?php 

class Connection{

	static public function db(){


		$link = new PDO("mysql:host=localhost;dbname=formulario_prueba",
			            "root", 
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}




