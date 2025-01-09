<?php
	$nomServeur = "127.0.0.1"; 	
	$nomUtil = "root";		
	$mdpUtil = "";		
	$nomBD = "gdp";	
	
	try {
		$cnx = new PDO("mysql:host=$nomServeur;dbname=$nomBD;charset=UTF8", $nomUtil, $mdpUtil);
		$cnx -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
	}			
