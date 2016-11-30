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
					sh_img_remark,
					sh_img_created_date
				FROM nham_shop_image
				WHERE sh_img_type = ?
				AND shop_id = ? ";
		
		array_push($params, $img_type, $shop_id);
		if($status == 0 || $status == 1){
			$sql .= " AND sh_img_status = ? ";
			array_push($params, $status);
		}
		$sql .=" ORDER BY sh_img_dis_order LIMIT ? ";
		array_push($params, $limit);
		$query = $this->db->query($sql , $params);
		
		$response = $query->result();		
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
		array_push($params, $img_type, $shop_id);
		if($status == 0 || $status == 1){
			$sql .= "AND sh_img_status = ?";
			array_push($params, $status);
		}
		$query = $this->db->query($sql , $params);
		$response = $query->row();
		
		return $response->image_count;
	}
}
?>