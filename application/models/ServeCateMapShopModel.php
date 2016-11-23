<?php
class ServeCateMapShopModel extends  CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function deleteServeCategoryMapShop( $serve_map_id ){
		
		$sql = "DELETE FROM nham_serve_cate_map_shop WHERE serve_cate_map_shop_id = ?";
		$query = $this->db->query($sql, $serve_map_id);
		
		return $query;
	}
}
?>