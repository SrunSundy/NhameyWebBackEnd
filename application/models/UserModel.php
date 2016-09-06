<?php
	class UserModel extends  CI_Model{
		
		function getAllUser(){
			
			$query = $this->db->query('SELECT * FROM user WHERE Name LIKE ? ', 'S%');
			$data = $query->result();
			return $data;
			
		}
		
		function insertUser(){
			$data = array(
				'id' => 5,
				'Name' => 'Soksrol',
				'Sex' => 'female',
				'Age' => 20
			);
			$query = $this->db->insert("user", $data);
			return $query;
		}
	}
?>