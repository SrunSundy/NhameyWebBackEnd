<?php
	class First extends  CI_Controller{
		
		public function index(){
			echo "Hello world PHP !!!!!!!";
		}
		
		public function theSecond(){
			//echo "THIS IS THE SECOND STEP!!!";
			$json = '{
			    "type": "donutsssss",
			    "name": "Cakddddddddddsvvvvvvvvvvve"
			}';
		
		    $data['json'] = $json;
		   // echo json_encode($data);     
			$this->load->view('haha', $data);
		}
	}
?>