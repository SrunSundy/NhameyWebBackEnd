<?php

class ShopModel extends CI_Model{

	public function getshopByNameCombo($shopname , $limit){

		

		$sql = "SELECT shop_id,shop_name_en,shop_remark FROM nham_shop

				WHERE shop_name_en LIKE ? AND shop_status=1 

				ORDER BY shop_id DESC 

				limit ?";

		$shopname = "%".$shopname."%";

		$limit = (int)$limit;

		$query = $this->db->query($sql, array($shopname, $limit) );

		$data = $query->result();

		return $data;

		

	}

}

?>