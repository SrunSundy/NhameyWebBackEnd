<?php
class ServeCateMapProModel extends  CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
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