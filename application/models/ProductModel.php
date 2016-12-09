<?php

class ProductModel extends CI_Model{


	
	public function insertProduct( $data, $pro_servertype,$tag){
		$this->db->trans_begin();
		$this->db->insert('nham_product', $data);
		$insert_id = $this->db->insert_id();
		
		$servecategories = array();
		$shopdata = array_unique($pro_servertype);
		for($i=0; $i< count($shopdata); $i++){
		
			$cateitem["serve_category_id"] = $shopdata[$i];
			$cateitem["pro_id"] = $insert_id;
			array_push($servecategories , $cateitem);
		}
		$this->db->insert_batch('nham_serve_cate_map_pro', $servecategories);
		
		
		$tag_map = array();
		$tagdata = array_unique($tag);
		for($i=0; $i< count($tagdata); $i++){
		
			$tagitem["tag_id"] = $tagdata[$i];
			$tagitem["pro_id"] = $insert_id;
			array_push($tag_map , $tagitem);
		}
		$this->db->insert_batch('nham_product_tag_map', $tag_map);
			
		if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				$response["is_insert"] = false;
				$response["message"] = "Transaction rollback!";
			}
			else
			{
				$this->db->trans_commit();
				$response["is_insert"] = true;
				$response["message"] = "success";
			}
			
			return $response;	
	}
	
	public function listProductByShopId ($request){
		
		$status = (int)$request["pro_status"];
		$shop_id = (int)$request["shop_id"];
		$limit = (int)$request["row"];
		$page = (int)$request["page"];
			
		$offset = ($limit*$page)-$limit;
		
		if(isset($request["row_minus"])){				
			$row_minus = (int)$request["row_minus"];
			if( $row_minus > 0){
		
				$offset = $offset - $row_minus;
			}				
		}
		
		$params = array();
		$sql = "SELECT 
				pro_id,
				pro_name_en,
				pro_name_kh,
				pro_image,
				pro_price,
				pro_promote_price,
				pro_local_popularity,
				pro_description,
				pro_created_date,
				pro_status
			FROM nham_product 
			WHERE shop_id = ? ";
		
		array_push($params, $shop_id);
		if($status == 0 || $status == 1){
			$sql .= " AND sh_img_status = ? ";
			array_push($params, $status);
		}
		$sql .=" ORDER BY pro_dis_order LIMIT ? OFFSET ? ";
		array_push($params, $limit,$offset);
		$query = $this->db->query($sql , $params);
		
		$response = $query->result();
		return $response;
		
	}
}

?>