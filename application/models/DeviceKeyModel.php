<?php
	class DeviceKeyModel extends  CI_Model{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		   
				
		}
		
		
		public function getKeyById($userId){
			$userarr= array();
			$userarr=$userId;
			$sql = "SELECT token_id, type FROM nham_device_token WHERE user_id IN ?";
		
			$query = $this->db->query($sql, array($userId));
		
			$data = $query->result();
		
			return $data;
				
		
		}
		public function getKeyAll(){
			$sql = "SELECT token_id, type FROM nham_device_token";
		
			$query = $this->db->query($sql);
		
			$data = $query->result();
		
			return $data;
				
		
		}
		


	
	}
?>
