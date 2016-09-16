<?php
class ShopTypeModel extends CI_Model{
	
	function getShopTypeByNameCombo( $shoptype , $limit ){
		
    	$sql = "SELECT shop_type_id,shop_type_name from nham_shop_type 
    			WHERE shop_type_name LIKE ? AND shop_type_status = 1 
    			ORDER BY shop_type_id DESC 
    			LIMIT ?";
    	$shoptype = "%".$shoptype."%";
    	$limit = (int)$limit;
    	$query = $this->db->query($sql, array($shoptype, $limit) );
    	$data = $query->result();
    	return $data;
    	
	}
	
	function insertShopType( $shoptypearr ){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_shop_type(shop_type_name, shop_type_remark) values (? , ?)', $shoptypearr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["shop_type_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
	
}
?>