<?php

	function connectToDb() {
		try {
			$dsn = "mysql:host=localhost; db=database";
			$pdo = new PDO($dsn,"username","password");
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected to database successfully.";
			return $pdo;
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}
	}	

?>