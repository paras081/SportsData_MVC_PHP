<?php

	class sportsModel{

		function __construct($consetup){
			$this->host = $consetup->host;
			$this->user = $consetup->user;
			$this->pass = $consetup->pass;
			$this->db   = $consetup->db;
		}

		public function open_db(){
			$this->condb = new mysqli($this->host,$this->user,$this->pass,$this->db);
			if($this->condb->connect_error){
				die("Error in connection:".$this->condb->connect_error);
			}
		}

		public function close_db(){
			$this->condb->close();
		}

		public function selectRecord(){

			$this->open_db();
			$query = $this->condb->prepare("SELECT * FROM sports");
			$query->execute();
			$result = $query->get_result();
			$this->close_db();
			return $result;
		}

		public function insertRecord($obj){

			$this->open_db();
			
			$query = $this->condb->prepare("INSERT INTO sports (category, name) VALUES (?,?)");

			$query->bind_param("ss", $obj->category, $obj->name);

			$query->execute();
			
			$result = $query->get_result();

			$last_id =  $this->condb->insert_id;
			
			$this->close_db();
			
			return $last_id;
		}

		public function updateRecord($obj){
				$this->open_db();
			
			$query = $this->condb->prepare("INSERT INTO sports (category, name) VALUES (?,?)");

			$query->bind_param("ss", $obj->category, $obj->name);

			$query->execute();
			
			$result = $query->get_result();

			$last_id =  $this->condb->insert_id;
			
			$this->close_db();
			
		}

		public function deleteRecord(){
			
		}


	}

?>