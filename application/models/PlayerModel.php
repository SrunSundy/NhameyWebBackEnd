<?php
	class PlayerModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function listPlayer($setting){
		
		/*============ This doesn't support timezone ==============*/
		
		
		
		if(!isset($setting["row"])) $setting["row"] = 10;
		if(!isset($setting["page"])) $setting["page"] = 1;
		if(!isset($setting["whole_search"])) $setting["whole_search"] = "";
				
		$row = (int)$setting["row"];
		$page = (int)$setting["page"];
		$whole_search = $setting["whole_search"];

		if(!$row) $row = 10;
		if(!$page) $page = 1;
		if(!$whole_search) $whole_search = "";
		$limit = $row;
		$offset = ($row*$page)-$row;
		 $sql = "SELECT user_id,
					TRIM(COALESCE(user_photo,'')) user_photo,
					user_fullname,
					user_gender,
					user_email,
					user_phone,
					user_quote,
					user_status,
		 			FLOOR(100*( 
						+(case when COALESCE(TRIM(user_phone),'') = '' then 0 else 1  end)
						+(case when COALESCE(TRIM(user_quote),'') = '' then 0 else 1  end)
						+4
	  				)/5) as data_complete
		
				FROM nham_user
				WHERE REPLACE(CONCAT_WS(user_fullname,user_email,user_phone),' ','') LIKE REPLACE(?,' ','')
				LIMIT ? OFFSET ?";
		
		$query = $this->db->query($sql , array("%".$whole_search."%" ,$limit,$offset));
		$responsequery = $query->result();
		

		
		$countsetting["row"] = $row;
		$countsetting["whole_search"] = $whole_search;
		
		$response["total_page"] = (int)$this->totalPlayer($countsetting)[0]->total_page;
		$response["total_record"] = $this->totalPlayer($countsetting)[0]->total_record;
		$response["response_data"] = $responsequery;
		
		return $response; 
	}
		public function totalPlayer($countsetting){
		
		$row = $countsetting["row"];
		$sql = "SELECT count(*) as total_record,CASE WHEN count(*)% ? != 0 THEN count(*)/ ? +1
						ELSE count(*)/ ? 
						END as total_page 
				FROM nham_user
				WHERE REPLACE(CONCAT_WS(user_fullname,user_email,user_phone),' ','') LIKE REPLACE(?,' ','')";
		
		$query = $this->db->query($sql, array($row, $row, $row, "%".$countsetting["whole_search"]."%"));
		$response = $query->result();
		return  $response;
		
	}
		public function togglePlayer( $request ){
		
		$response = array();
		
		$status = $request["user_status"];
		$shopid = $request["user_id"];
		
		if($status != 0 && $status != 1){
			$response["is_updated"] = false;
			$response["message"] = "User_status is invalid!";
			return  $response;
		}
		if(!$shopid){
			$response["is_updated"] = false;
			$response["message"] = "user_id is invalid!";
			return  $response;
		}
		$this->db->trans_start();
		$sql = "UPDATE nham_user SET user_status = ? WHERE user_id = ?";
		$this->db->query($sql, array((int)$status, (int)$shopid));
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === FALSE)
		{
			$response["is_updated"] = false;
			$response["message"] = "update error!";
		}else{
			$response["is_updated"] = true;
			$response["message"] = "update success!";
		}
		return  $response;
		
	}
}
?>