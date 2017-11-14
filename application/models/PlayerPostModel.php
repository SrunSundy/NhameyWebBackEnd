<?php
	class PlayerPostModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function listPlayerPost($setting){
		
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
		 
		 $sql = " SELECT p.user_id, p.post_id, TRIM( COALESCE( user_photo, '' ) ) user_photo, user_fullname, u.type, post_status, (

				SELECT count( post_image_id )
				FROM nham_user_post_image
				WHERE post_id = p.post_id
				) AS amount_post, p.post_caption, p.post_created_date,(
				SELECT post_image_src
				FROM nham_user_post_image
				WHERE post_id = p.post_id  LIMIT 1) as image_src, (

				SELECT shop_name_kh
				FROM nham_shop
				WHERE shop_id = p.shop_id
				) AS checked_in, (

				SELECT count( report_id )
				FROM nham_report_post
				WHERE post_id = p.post_id
				) AS count_report
				FROM nham_user u
				INNER JOIN nham_user_post p ON p.user_id = u.user_id
				WHERE REPLACE( user_fullname, ' ', '' ) LIKE REPLACE( ?, ' ', '' ) 
				ORDER BY  count_report DESC
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
				FROM nham_user u
				INNER JOIN nham_user_post p ON p.user_id = u.user_id
				WHERE REPLACE(user_fullname,' ','') LIKE REPLACE(?,' ','')";
		
		$query = $this->db->query($sql, array($row, $row, $row, "%".$countsetting["whole_search"]."%"));
		$response = $query->result();
		return  $response;
		
	}
		public function togglePlayerPost( $request ){
		
		$response = array();
		
		$status = $request["user_status"];
		$post_id = $request["user_id"];
		
		if($status != 0 && $status != 1){
			$response["is_updated"] = false;
			$response["message"] = "User_status is invalid!";
			return  $response;
		}
		if(!$post_id){
			$response["is_updated"] = false;
			$response["message"] = "post_id is invalid!";
			return  $response;
		}
		$this->db->trans_start();
		$sql = "UPDATE nham_user_post SET post_status = ? WHERE post_id = ?";
		$this->db->query($sql, array((int)$status, (int)$post_id));
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