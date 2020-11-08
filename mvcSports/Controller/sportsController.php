<?php

	require 'Model/sports.php';
	require 'Model/sportsModel.php';
	require 'config.php';

	class sportsController{

		function __construct(){
			$this->objConfig = new config();
			$this->objSportsModel = new sportsModel($this->objConfig);
		}

		public function mvcHandler(){

			$action=isset($_GET['act']) ? $_GET['act'] : NULL;


			//default view-->database select,insert,update,delete	
			switch ($action) {
				case 'insert':
					$this->insert();
					break;
				case 'update':
					$this->update();
					break;
				case 'delete':
					$this->delete();
				default:
					$this->list();
					break;
			}
			
		}

		public function list(){

			$result = $this->objSportsModel->selectRecord();
			include "View/list.php";
		}

		public function insert(){

			include "View/insert.php";
		}

		public function update(){

			include "View/update.php";
		}

		public function delete(){

			include "View/delete.php";
		}
	}

?>