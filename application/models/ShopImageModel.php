<?php
class ShopImageModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function listShopImageByShopId( $request ){
		
		$status = (int)$request["sh_img_status"];
		$img_type = (int)$request["sh_img_type"];
		$shop_id = (int)$request["shop_id"];
		$limit = (int)$request["row"];
		$page = (int)$request["page"];
		
		$offset = ($limit*$page)-$limit;
		$params = array();
		
		$sql = "SELECT  
					sh_img_id,
					sh_img_name,
					sh_img_remark,
					sh_img_created_date,
					sh_img_is_front_show,
					sh_img_type
				FROM nham_shop_image
				WHERE sh_img_type = ?
				AND shop_id = ? ";
		
		array_push($params, $img_type, $shop_id);
		if($status == 0 || $status == 1){
			$sql .= " AND sh_img_status = ? ";
			array_push($params, $status);
		}
		
		$this->load->helper('ValidateInput');
		if(isset($request["start_date_srch"]) && isset($request["end_date_srch"]) 
			&&!IsNullOrEmptyString($request["start_date_srch"]) && !IsNullOrEmptyString($request["end_date_srch"])){
			
			$sql .=" AND sh_img_created_date BETWEEN ? AND ? ";
			
			$request["start_date_srch"] = date('Y-m-d', strtotime($request["start_date_srch"]));
			$request["end_date_srch"] = date('Y-m-d', strtotime($request["end_date_srch"]));
			array_push($params, $request["start_date_srch"], $request["end_date_srch"]);
		}
		
		$sql .=" ORDER BY sh_img_dis_order LIMIT ? OFFSET ?";
		array_push($params, $limit,$offset);

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
		
		$this->load->helper('ValidateInput');
		if(isset($request["start_date_srch"]) && isset($request["end_date_srch"])
		&&!IsNullOrEmptyString($request["start_date_srch"]) && !IsNullOrEmptyString($request["end_date_srch"])){
				
			$sql .=" AND sh_img_created_date BETWEEN ? AND ? ";
				
			$request["start_date_srch"] = date('Y-m-d', strtotime($request["start_date_srch"]));
			$request["end_date_srch"] = date('Y-m-d', strtotime($request["end_date_srch"]));
			array_push($params, $request["start_date_srch"], $request["end_date_srch"]);
		}
		
		$query = $this->db->query($sql , $params);
		$response = $query->row();
		
		return $response->image_count;
	}
	
	public function updateShopImageField($request){
		
		$this->db->trans_begin();
		$response = array(); 
		
		if(!isset($request["param"])){
			$response["is_updated"] = false;
			$response["message"] = "PARAM is invalid";
			return $response;
		}		
		if(!isset($request["updated_value"])){
			$response["is_updated"] = false;
			$response["message"] = "UPDATED_VALUE is invalid";
			return $response;
		}		
		if(!isset($request["sh_img_id"])){
			$response["is_updated"] = false;
			$response["message"] = "SH_IMG_ID is invalid";
			return $response;
		}
		
		$param = $request["param"];
		$value = $request["updated_value"];
		$sh_img_id = $request["sh_img_id"];
		
		$this->load->helper('ValidateInput');
		if(IsNullOrEmptyString($param)){
			$response["is_updated"] = false;
			$response["message"] = "PARAM is invalid";
			return $response;
		}
		if(IsNullOrEmptyString($value)){
			$response["is_updated"] = false;
			$response["message"] = "UPDATED_VALUE is invalid";
			return $response;
		}
		if(IsNullOrEmptyString($sh_img_id)){
			$response["is_updated"] = false;
			$response["message"] = "SH_IMG_ID is invalid";
			return $response;
		}
			
		$input_params = array();
		$sql = "UPDATE nham_shop_image SET ".trim($param)." = ? WHERE sh_img_id = ? ";
		array_push($input_params, $value, $sh_img_id);
		
		if($param == "sh_img_is_front_show"){
			$sql .=" AND sh_img_type = ?";
			$this->load->helper('ImageType');
			array_push($input_params, ImageType::Detail);
		}
		$this->db->query($sql , $input_params);
		$affected_row = $this->db->affected_rows();
	
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			$response["is_updated"] = false;
			$response["message"] = "Transaction rollback!";
		}
		else
		{
			$this->db->trans_commit();
			if($affected_row >0){
				$response["is_updated"] = true;
				$response["message"] = "update successfully!";
			}else{
				$response["is_updated"] = false;
				$response["message"] = "update error!";
			}
		}
		return $response;
	}
	
	
	
}
?>