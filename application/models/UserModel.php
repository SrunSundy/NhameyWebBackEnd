<?php
	class UserModel extends  CI_Model{
		
		function getAllUser(){
			
			$query = $this->db->query('SELECT * FROM nham_admin_user WHERE Name LIKE ? ', 'S%');
			$data = $query->result();
			return $data;
			
		}
		
		function insertUser($data){
			$this->db->trans_begin();
			$fullname = $req_data["fullname"];
			$gender = $req_data["gender"];
			$email = $req_data["email"];
			$username = $req_data["username"];
			$password = $req_data["password"];
			$remark = $req_data["remark"];
			$admin_id = $req_data["admin_id"];
			$photo = $req_data["photo"];
			
			$validate = $this->validateInput($fullname);
			$validate2 = $this->validateInput($gender);
			$validate3 = $this->validateInput($email);
			$validate4 = $this->validateInput($username);
			$validate5 = $this->validateInput($password);
			$validate7 = $this->validateInput($admin_id);
			$validate6 = $this->validateInput($remark);
			
			if($this->IsNullOrEmptyString($validate) && $this->IsNullOrEmptyString($validate2) && $this->IsNullOrEmptyString($validate3) && $this->IsNullOrEmptyString($validate4) && $this->IsNullOrEmptyString($validate5) ){
					$strsql = "INSERT INTO nham_user_admin(fullname, gender, email, username, password, admin_id, remark, photo, status) VALUES (?,?,?,?,?,?,?,?,?)";
					$params = array($fullname, $gender, $email, $username, $password, $admin_id, $remark, $photo, 1);
				
				$query = $this->db->query($strsql , $params);
				$insert_get_id = $this->db->insert_id();
				$response=$insert_get_id;
				if($this->IsNullOrEmptyString($insert_get_id)){
					$response["is_insert"] = false;
					$response["message"] = "Invalid ID!";
				}
				return $response;
					
			}else{
				$response["is_insert"] = false;
				$response["message"] = $validate;
			}
		}
	}
?>