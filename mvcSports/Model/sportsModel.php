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
			
			
		}

		public function selectRecord(){

			$query = $this->condb->prepare("SELECT * FROM sports");
			$query->execute();
			$result = $query->get_result();

			return $result;
		}


	}

?>