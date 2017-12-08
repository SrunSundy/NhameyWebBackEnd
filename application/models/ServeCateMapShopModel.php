<?php
class ServeCateMapShopModel extends  CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function deleteServeCategoryMapShop( $serve_map, $shop_id ){
		
		$q_mark = "(";
		$param = array();
		for($i=0 ; $i<count($serve_map); $i++){
			$q_mark .= "(?,?),";
			array_push($param, $serve_map[$i] , $shop_id);
		}
		$q_mark = substr($q_mark, 0, -1);
		$q_mark .= ")";
		
		$sql = "DELETE FROM nham_serve_cate_map_shop  WHERE (serve_category_id, shop_id) in ".$q_mark;
		$query = $this->db->query($sql, $param);
		
		return $query;
		
	}
	public function deleteServeCategoryMapProduct( $serve_map, $pro_id ){
		
		$q_mark = "(";
		$param = array();
		for($i=0 ; $i<count($serve_map); $i++){
			$q_mark .= "(?,?),";
			array_push($param, $serve_map[$i] , $pro_id);
		}
		$q_mark = substr($q_mark, 0, -1);
		$q_mark .= ")";
		
		$sql = "DELETE FROM nham_serve_cate_map_pro  WHERE (serve_category_id, pro_id) in ".$q_mark;
		$query = $this->db->query($sql, $param);
		
		return $query;
		
	}
}
?>