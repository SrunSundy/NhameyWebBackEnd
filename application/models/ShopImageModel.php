<?php
class ShopImageModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function listShopImageByShopId( $request ){
		
		if(!isset($request["row"]) || $request["row"] <= 0) $request["row"] = 16;
		
		$status = (int)$request["sh_img_status"];
		$img_type = (int)$request["sh_img_type"];
		$shop_id = (int)$request["shop_id"];
		$limit = (int)$request["row"];
		$params = array();
		
		$sql = "SELECT  
					sh_img_id,
					sh_img_name,
					sh_img_remark
					
				FROM nham_shop_image
				WHERE sh_img_type = ?
				AND shop_id = ?";
		
		array_push($param, $img_type, $shop_id);
		if($status == 0 || $statis == 1){
			$sql .= "AND sh_img_status = ?";
			array_push($param, $status);
		}
		$sql .="ORDER BY sh_img_dis_order LIMIT ?";
		array_push($param, $limit);
		$query = $this->db->query($sql , $params);
		
		$logo_count = 0;
		$cover_count = 0;
		$detail_count = 0;
		
		if(count($query->result()) >= 0){
			
			$request_count["sh_img_status"] = $status;
			$request_count["shop_id"] = $shop_id;
			
			$request_count["sh_img_type"] = 1;		
			$logo_count = $this->countShopImageByImgtypeAndShopId($request_count);
			
			$request_count["sh_img_type"] = 2;
			$cover_count = $this->countShopImageByImgtypeAndShopId($request_count);
			
			$request_count["sh_img_type"] = 3;
			$detail_count = $this->countShopImageByImgtypeAndShopId($request_count);
		}
		
		$response["total_logo"] = $logo_count;
		$response["total_cover"] = $cover_count;
		$response["total_detail"] = $detail_count;
		$response["response_data"] = $query->result();
		
		return $response;		
	}
	
	public function countShopImageByImgtypeAndShopId($request){
		
		$status = (int)$request["sh_img_status"];
		$img_type = (int)$request["sh_img_type"];
		$shop_id = (int)$request["shop_id"];
		$params = array();
		
		$sql = "SELECT  
					COUNT(*) as image_count
				FROM nham_shop_image image
				WHERE sh_img_type = ?
				AND shop_id = ?";
		array_push($param, $img_type, $shop_id);
		if($status == 0 || $statis == 1){
			$sql .= "AND sh_img_status = ?";
			array_push($param, $status);
		}
		$query = $this->db->query($sql , $params);
		$response = $query->row();
		
		return $response->image_count;
	}
}
?>