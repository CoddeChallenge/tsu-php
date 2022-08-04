<?php 
	class Database{
		private $handleDB;
		private $host;
		private $db;
		private $user;
		private $pass;
		private $charset;

		public function __construct(){
			$this->host = constant('HOST');
			$this->db = constant('DB');
			$this->user = constant('USER');
			$this->pass = constant('PASS');
			$this->charset = constant('CHARSET');
		}

		function connect(){
			try{
				$connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;

				$options = [
					PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES  => false,

				];

				$this->handleDB = new PDO($connection, $this->user, $this->pass, $options);
				return $this->handleDB;
			}catch(PDOException $e){
				exit(1);
			}
		}

		public function lastInsertId(){
        	return $this->handleDB->lastInsertId();
    	}
	}

?> 