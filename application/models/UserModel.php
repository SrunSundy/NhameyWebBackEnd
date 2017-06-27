<?php
	class UserModel extends  CI_Model{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		    date_default_timezone_set('Asia/Phnom_Penh');
		
				
		}
		
		function insertUser($req_data){
			//$this->db->trans_begin();
			$name = $req_data["name"];
			$type = $req_data["type"];
			$email = $req_data["email"];
			$password = $req_data["password"];
			$remark = $req_data["remark"];
			$photo = $req_data["photo"];
			$validate = $this->validateInput($name);
			$validate2 = $this->validateInput($type);
			$validate3 = $this->validateInput($email);
			$validate4 = $this->validateInput($password);
			$validate5 = $this->validateInput($photo);
			$response = array();
			
			if($this->IsNullOrEmptyString($validate) && $this->IsNullOrEmptyString($validate2) && $this->IsNullOrEmptyString($validate3) && $this->IsNullOrEmptyString($validate5)){
				$strsql = "INSERT INTO nham_admin(admin_name, admin_email, admin_password, admin_photo, admin_remarks, admin_created_date,admin_type, admin_status) VALUES(?,?,?,?,?,?,?,?)";
				$params = array($name, $email, $this->hash_password($password), $photo, $remark,date('Y-m-d H:i:s') ,$type, 1);
				
				$query = $this->db->query($strsql , $params);
				$insert_shop_id = $this->db->insert_id();
				$response=$insert_shop_id;
				if($this->IsNullOrEmptyString($insert_shop_id)){
					$response["is_insert"] = false;
					$response["message"] = "Invalid ID!";
				}
				return $response;
					
			}else{
				$response["is_insert"] = false;
				$response["message"] = $validate;
			}
		
			return $response;
		}
		
		function getUser($srchname,$limit){
			$sql = "SELECT * FROM nham_admin
				WHERE admin_name LIKE ? ORDER BY admin_name ASC limit ?";
			
			$srchname = "%".$srchname."%";
			$limit = (int)$limit;
		
			$query = $this->db->query($sql, array($srchname, $limit));
		
			$data = $query->result();
		
			return $data;
				
		
		}
		
		public function deleteUserAdmin($req_data){
			//$this->db->trans_begin();
			$id = $req_data["id"];
		
			$response = array();
			$validate= $this->validateInput($id);
		
			if($this->IsNullOrEmptyString($validate)){
				$strsql = "DELETE from nham_admin where admin_id=?";
				$params = array($id);		
				$query = $this->db->query($strsql , $params);
				$insert_shop_id = $this->db->insert_id();
				$response=$insert_shop_id;
				if($this->IsNullOrEmptyString($insert_shop_id)){
					$response["is_insert"] = false;
					$response["message"] = "Invalid ID!";
				}
				return $response;
		
			}else{
				$response["is_insert"] = false;
				$response["message"] = $validate;
			}
		
			return $response;
		}
		
		public function updateUserAdmin($req_data){
			//$this->db->trans_begin();
			$id = $req_data["id"];
			$name = $req_data["name"];
			$status = $req_data["status"];
			$email = $req_data["email"];
			$response = array();
			$validate = $this->validateInput($name);
			$validate2 = $this->validateInput($email);
			$validate3 = $this->validateInput($id);
			$validate4 = $this->validateInput($status);
		
			if($this->IsNullOrEmptyString($validate) && $this->IsNullOrEmptyString($validate2) && $this->IsNullOrEmptyString($validate3) && $this->IsNullOrEmptyString($validate4)){
		
				$strsql = "UPDATE nham_admin set admin_name=?, admin_email=?, admin_status=? where admin_id=?";
				$params = array($name, $email, $status, $id);
		
				$query = $this->db->query($strsql , $params);
				$insert_shop_id = $this->db->insert_id();
				$response=$insert_shop_id;
				if($this->IsNullOrEmptyString($insert_shop_id)){
					$response["is_insert"] = false;
					$response["message"] = "Invalid ID!";
				}
				return $response;
		
			}else{
				$response["is_insert"] = false;
				$response["message"] = $validate;
			}
		
			return $response;
		}
		
		function validateInput($data){
		
			if($this->IsNullOrEmptyString($data)){
				return "Invalid Data!";
			}
			return "";
		
		}
		
		
		function IsNullOrEmptyString($variable){
			return (!isset($variable) || trim($variable)==='');
		}
		function resolve_user_login($email, $password) {
		
			$strsql = "SELECT admin_password FROM nham_admin where admin_email=?";
			$params = array($email);
			//$query = $this->db->query($strsql , $params);
			$hash =$this->db->query($strsql , $params)->row('admin_password');
			//$hash = $this->db->get()->row('admin_password');
			return $this->verify_password_hash($password, $hash);
		
		}
		public function get_user_id_from_email($email) {
		
		
			$strsql = "SELECT admin_id FROM nham_admin where admin_email=?";
			$params = array($email);
	
			return  $this->db->query($strsql , $params)->row('admin_id');
		}
		public function get_user($user_id) {
		
			$strsql = "SELECT * FROM nham_admin where admin_id=?";
			$params = array($user_id);
	
			return  $this->db->query($strsql , $params)->row();
		
		}
		function setSession($admin_ID, $ip, $sess_id){
			$sql = "REPLACE INTO a_session VALUES (?, ?,?,?,?,? )";
			$params = array($sess_id,date('Y-m-d H:i:s'),$admin_ID,$ip,'',1);
			return  $this->db->query($sql  , $params);
		}
		function setLoggedin($admin_ID){
			$sql = "UPDATE nham_admin SET admin_loggedin = ? WHERE admin_id =?";
			$params = array(date('Y-m-d H:i:s'),$admin_ID);
			return  $this->db->query($sql , $params);
			
		}
		function setLogout($conn, $admin_ID){
			$sql = "UPDATE a_session SET log_status = '0' WHERE admin_ID ='$admin_ID'";
			
		}

		private function hash_password($password) {
		
			return password_hash($password, PASSWORD_BCRYPT);
		
		}
		
		
		private function verify_password_hash($password, $hash) {
		
			return password_verify($password, $hash);
		
		}
		
	}
?>
