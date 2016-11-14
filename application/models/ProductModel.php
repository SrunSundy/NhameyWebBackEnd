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
}

?>