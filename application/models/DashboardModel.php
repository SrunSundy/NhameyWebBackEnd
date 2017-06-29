<?php
class DashboardModel extends  CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function countTotalShop(){		
		$sql = "SELECT count(*) as total_record FROM nham_shop sh ";
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	public function countTotalUser(){
		$sql = "SELECT count(*) as total_record FROM nham_user sh ";
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	public function countTotalProduct(){
		$sql = "SELECT count(*) as total_record FROM nham_product sh ";
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	public function countTotalPost(){
		$sql = "SELECT count(*) as total_record FROM nham_user_post sh ";
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	public function getAdmin( $req ){
		
		$row = (int)$req["row"];	
		if(!isset($req["page"])) $req["page"] = 1;
		$page = (int)$req["page"];
		
		$sql = "SELECT a.admin_id,
					a.admin_name,
					a.admin_photo
				FROM nham_admin a
				WHERE  admin_type = ? 			
				ORDER BY a.admin_created_date
				LIMIT ?
				OFFSET ? ";
		$limit = $row;
		$offset = ($row*$page)-$row;
		
		$params = array($req["admin_type"], $limit, $offset);
		$query = $this->db->query($sql, $params);
		return $query->result();
		
	}
	
	public function getTotalAdmin( $req ){
		
		$sql = "SELECT count(*) as total_record
				FROM nham_admin 
				WHERE admin_type = ? ";
		
		$params = array($req["admin_type"]);
		$query = $this->db->query($sql, $params);
		return $query->row();
		
	}	
	
	public function getShopByStatus($req){
		
		
		$row = (int)$req["row"];
		if(!isset($req["page"])) $req["page"] = 1;
		$page = (int)$req["page"];
		
		$sql = " SELECT
					shop_id,
					shop_logo
				FROM nham_shop
				WHERE
				shop_status = ?
				LIMIT ? OFFSET ? ";
		$limit = $row;
		$offset = ($row*$page)-$row;
		
		$params = array($req["shop_status"] ,$limit, $offset);
		$query = $this->db->query($sql, $params);
		return $query->result();
		
	}
	
	public function countShopByStatus($req){
		
		$sql = " SELECT count(*) as sh_cnt FROM nham_shop WHERE shop_status = ? ";
		
		$params = array($req["shop_status"]);
		$query = $this->db->query($sql, $params);
		return $query->row();
		
	}

	
	public function getShopByDuration($req){
		
		$row = (int)$req["row"];
		if(!isset($req["page"])) $req["page"] = 1;
		$page = (int)$req["page"];
		
		$sql = " SELECT 
					shop_id,
					shop_logo
				FROM nham_shop
				WHERE 
				shop_created_date BETWEEN CURDATE() - INTERVAL ? DAY AND CURDATE() 
				LIMIT ? OFFSET ? ";
		$limit = $row;
		$offset = ($row*$page)-$row;
		
		$params = array($req["duration"] ,$limit, $offset);
		$query = $this->db->query($sql, $params);
		return $query->result();
	}
	
	public function countShopByDuration($req){
		
		$sql = " SELECT count(*) as sh_cnt FROM nham_shop WHERE  shop_created_date BETWEEN CURDATE() - INTERVAL ? DAY AND CURDATE() ";
		
		$params = array($req["duration"]);
		$query = $this->db->query($sql, $params);
		return $query->row();
		
	}
	
	public function countShopByMonth($req){
		
		$month = $req["created_month"];
		$year = $req["created_year"];
		
		$sql = " SELECT count(*) as cnt  FROM nham_shop WHERE 
		 		 MONTH(shop_created_date) = ?
				 AND YEAR(shop_created_date) = ? ";
		
		$params = array($month, $year);
		if(isset($req["shop_status"])){
			$sql .= " AND shop_status = ? ";
			array_push($params, $req["shop_status"]);
		}	
		$query = $this->db->query($sql, $params);
		return $query->row();
		
	}
	
	public function getPopularShop($req){
		
		$row = (int)$req["row"];
		if(!isset($req["page"])) $req["page"] = 1;
		$page = (int)$req["page"];
		
		$sql = "SELECT 
					shop_id,
					shop_name_en,
					shop_logo
				FROM nham_shop 
				ORDER BY shop_dis_order , shop_view_count DESC
				LIMIT ? OFFSET ?";
		$limit = $row;
		$offset = ($row*$page)-$row;
		
		$params = array($limit, $offset);
		$query = $this->db->query($sql, $params);
		return $query->result();
		
	}

}

