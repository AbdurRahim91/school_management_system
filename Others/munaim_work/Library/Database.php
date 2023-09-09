<?php
    Class Database{
        private $dbhost = "localhost";
        private $dbuser = "root";
        private $dbpass = "";
        private $dbname = "sms";
		public $pdo;

        public function __construct(){
            if(!isset($this->pdo)){
                try{
					$link = new PDO("mysql:host=".$this->dbhost."; dbname=".$this->dbname,$this->dbuser,$this->dbpass);
					$this->pdo = $link;
				} catch(PDOException $e){
					die("Failed to connect with database...".$e->getMessage());
				}
            }
        }
    }
?>