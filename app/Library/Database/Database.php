<?php

namespace App\Library\Database;

class Database {

	private $hots;
	private $user;
	private $password;
	private $dbName;

	public function __construct()
	{
		$this->setData();
		$this->connect();
	}

	function setData() {
		$this->host 	= 'localhost';
		$this->user    	= 'root';
		$this->password = 'root';
		$this->dbName 	= 'autoload';
	}

	function connect() {
		try {
			$connection = new \PDO ("mysql:localhost=$this->host;dbname=$this->dbName",$this->user,$this->password,array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION));
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}
