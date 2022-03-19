<?php

class Dbh {
	// PROPERTIES
	private $dbServername = "localhost";
	private $dbUsername = "root";
	private $dbPassword = "";
	private $dbName = "php_lessons";

	// METHOD

	protected function ConnectToDb() {
		$dsn = 'mysql:host=' . $this->dbServername . ';dbname=' . $this->dbName; 
		$pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    	return $pdo;
	}
}