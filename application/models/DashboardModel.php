<?php
class DashboardModel extends  CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function countUnreadNotification( $admin ){
	    $sql = "SELECT count(*) as CNT FROM(
                	SELECT 
                		 sum(ar.already_read) read_cnt 
                	FROM nham_admin_notification an 
                	INNER JOIN nham_admin_read ar ON an.notification_id = ar.notification_id AND ar.admin_id = ".$admin."
                	GROUP BY an.object_id,an.report_type) a 
                WHERE a.read_cnt > 0 ";
	    $query = $this->db->query($sql);
	    return $query->row();
	}
	
	public function updateNotification($post_id , $report_type, $admin){
	    
	    $sql = " UPDATE nham_admin_read SET already_read = 0 
                    WHERE admin_id = ?  
                    AND notification_id IN (SELECT notification_id FROM nham_admin_notification WHERE object_id = ".$post_id." AND report_type = ".$report_type." )  ";
	    $query = $this->db->query($sql, $admin);
	    return $query;
	}
	
	public function listNotification( $request ){
	    
	    $page = $request["page"];
	    $limit = $request["row"];
	    
	    
	    if($page == null) $page = 1;
	    if($limit == null) $limit = 10;
	    $offset = ($limit*$page)-$limit;
	    
	    $sql = " SELECT 
                   an.object_id,
                   an.notification_id,
                   pm.post_image_src,
                   count(an.reporter_id) as reporter_cnt,
                   max(an.created_date) as created_date,
                   an.report_type,
                   sum(ar.already_read) read_cnt 
                FROM nham_admin_notification an 
                INNER JOIN nham_admin_read ar ON an.notification_id = ar.notification_id AND ar.admin_id = ".$request["admin"]."
                INNER JOIN nham_user_post p ON an.object_id = p.post_id AND an.report_type = 1
                INNER JOIN nham_user_post_image pm ON p.post_id = pm.post_id
                GROUP BY an.object_id,an.report_type
                ORDER BY max(an.created_date) DESC, max(an.notification_id) DESC ";
	    
	    $query_record = $this->db->query($sql);
	    $total_record = count($query_record->result());
	    $total_page = $total_record / $limit;
	    if( ($total_record % $limit) > 0){
	        $total_page += 1;
	    }
	    
	    $response["total_record"] = $total_record;
	    $response["total_page"] = (int)$total_page;
	    
	    
	    $sql .= " limit ? offset ? ";
	    $limit = (int)$limit;
	    $query = $this->db->query($sql, array($limit, $offset) );
	    $data = $query->result();
	    
	    $response["response_data"] = $data;
	    
	    return $response;
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
	
	public function countPostReporter(){
		$sql = "SELECT count(*) as cnt FROM nham_report_post WHERE status = 1";
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
				WHERE  admin_status = 1 AND admin_type = ? 			
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
				WHERE admin_status = 1 AND admin_type = ? ";
		
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
		$current_time = new DateTime();
		$current_time = $current_time->format('Y-m-d H:i:s');
		
		$sql = " SELECT 
					shop_id,
					shop_logo,
					shop_name_en
				FROM nham_shop
				WHERE 
				shop_created_date BETWEEN '".$current_time."' - INTERVAL ? DAY AND '".$current_time."' 
                ORDER BY shop_created_date DESC
				LIMIT ? OFFSET ? ";
		$limit = $row;
		$offset = ($row*$page)-$row;
		
		$params = array($req["duration"] ,$limit, $offset);
		$query = $this->db->query($sql, $params);
		return $query->result();
	}
	
	public function countShopByDuration($req){
	    
	    $current_time = new DateTime();
	    $current_time = $current_time->format('Y-m-d H:i:s');
	    
		$sql = " SELECT count(*) as sh_cnt FROM nham_shop WHERE  shop_created_date BETWEEN '".$current_time."' - INTERVAL ? DAY AND '".$current_time."'  ";
		
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
	
	/* public function countDisabledShopByMonth($req){
		
		$month = $req["created_month"];
		$year = $req["created_year"];
		
		$sql = " SELECT count(*) as cnt  FROM nham_shop WHERE
		 		 MONTH(shop_last_update) = ?
				 AND YEAR(shop_last_update) = ? 
				 AND shop_status = 0 ";
		
		$params = array($month, $year);
		$query = $this->db->query($sql, $params);
		return $query->row();
	} */
	
	public function getPopularShop($req){
		
		$row = (int)$req["row"];
		if(!isset($req["page"])) $req["page"] = 1;
		$page = (int)$req["page"];
		
		$sql = "SELECT 
					shop_id,
					shop_name_en,
					shop_logo
				FROM nham_shop 
                WHERE shop_status = 1
				ORDER BY shop_dis_order , shop_view_count DESC
				LIMIT ? OFFSET ?";
		$limit = $row;
		$offset = ($row*$page)-$row;
		
		$params = array($limit, $offset);
		$query = $this->db->query($sql, $params);
		return $query->result();
		
	}
	
	
	//****************** USER SECTION ******************************//
	public function getTopUser($req){
	    
	    $row = (int)$req["row"];
	    if(!isset($req["page"])) $req["page"] = 1;
	    $page = (int)$req["page"];
	    
	    $sql = " SELECT 
                	u.user_id,
                	u.user_fullname,
                    u.user_photo,
                	count(f.follower_id) as f_cnt,
                	(SELECT count(user_id) FROM nham_user_post WHERE user_id = u.user_id) as p_cnt
                FROM nham_user u
                LEFT JOIN nham_user_follow f
                ON u.user_id = f.follower_id
                WHERE u.user_status = 1
                GROUP BY u.user_id
                ORDER BY f_cnt desc,p_cnt desc
                LIMIT ? OFFSET ? ";
	    
	    $limit = $row;
	    $offset = ($row*$page)-$row;
	    
	    $params = array($limit, $offset);
	    $query = $this->db->query($sql, $params);
	    return $query->result();
	}
	
	public function getUserByMonth($req){
	    
	    $month = $req["created_month"];
	    $year = $req["created_year"];
	    
	    $sql = " SELECT count(*) as cnt 
                FROM nham_user WHERE 
                MONTH(created_date) = ?
                AND YEAR(created_date) = ? ";
	    
	    $params = array($month, $year);
	    if(isset($req["user_status"])){
	        $sql .= " AND user_status = ? ";
	        array_push($params, $req["user_status"]);
	    }
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	}
	
	public function getUserByDuration($req){
	    
	    $row = (int)$req["row"];
	    if(!isset($req["page"])) $req["page"] = 1;
	    $page = (int)$req["page"];
	    
	    $current_time = new DateTime();
	    $current_time = $current_time->format('Y-m-d H:i:s');
	    
	    $sql = " SELECT 
                	user_id,
                	user_fullname,
                	user_photo
                FROM nham_user
                WHERE created_date BETWEEN '".$current_time."' - INTERVAL ? DAY AND '".$current_time."' 
                ORDER BY created_date DESC
                LIMIT ? OFFSET ? ";
	    $limit = $row;
	    $offset = ($row*$page)-$row;
	    
	    $params = array($req["duration"] ,$limit, $offset);
	    $query = $this->db->query($sql, $params);
	    return $query->result();
	}
	
	public function countUserByDuration($req){
	    
	    $current_time = new DateTime();
	    $current_time = $current_time->format('Y-m-d H:i:s');
	    
	    $sql = " SELECT count(*) as u_cnt FROM nham_user WHERE  created_date BETWEEN '".$current_time."' - INTERVAL ? DAY AND '".$current_time."'  ";
	    
	    $params = array($req["duration"]);
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	    
	}
	
	public function getUserByStatus($req){
	    
	    
	    $row = (int)$req["row"];
	    if(!isset($req["page"])) $req["page"] = 1;
	    $page = (int)$req["page"];
	    
	    $sql = "SELECT
                	user_id,
                	user_photo
                FROM nham_user
                WHERE
                user_status = ?
                LIMIT ? OFFSET ? ";
	    $limit = $row;
	    $offset = ($row*$page)-$row;
	    
	    $params = array($req["user_status"] ,$limit, $offset);
	    $query = $this->db->query($sql, $params);
	    return $query->result();
	    
	}
	
	public function countUserByStatus($req){
	    
	    $sql = " SELECT count(*) as u_cnt FROM nham_user WHERE user_status = ? ";
	    
	    $params = array($req["user_status"]);
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	    
	}
	
	//******************** POST SECTION ***********************//

	public function getTopPost($req){
	  
	    $row = (int)$req["row"];
	    if(!isset($req["page"])) $req["page"] = 1;
	    $page = (int)$req["page"];
	    
	    $sql = "SELECT
                	p.post_id,
                	p_image.post_image_src,
                	count(p.post_id) as post_image,
					u.user_id,
					u.user_fullname,
					u.user_photo,
                    (SELECT count(f.follower_id)  FROM nham_user_follow f WHERE f.follower_id = p.post_id ) as f_cnt,
                	(SELECT count(p_like.post_id) FROM nham_user_like p_like WHERE p_like.post_id = p.post_id) as cnt_like
                FROM nham_user_post p
								LEFT JOIN nham_user u
								ON p.user_id = u.user_id
                LEFT JOIN nham_user_post_image p_image								
                ON p.post_id = p_image.post_id
                WHERE p.post_status = 1
                GROUP BY p_image.post_id
                ORDER BY cnt_like DESC, f_cnt DESC
                LIMIT ? OFFSET ? ";
	    
	    $limit = $row;
	    $offset = ($row*$page)-$row;
	    
	    $params = array($limit, $offset);
	    $query = $this->db->query($sql, $params);
	    return $query->result();
	}
	
	public function getPostByMonth($req){
	    $month = $req["created_month"];
	    $year = $req["created_year"];
	    
	    $sql = "SELECT count(*) as cnt
                FROM nham_user_post WHERE
                MONTH(post_created_date) = ?
                AND YEAR(post_created_date) = ? ";
	    
	    $params = array($month, $year);
	    if(isset($req["post_status"])){
	        $sql .= " AND post_status = ? ";
	        array_push($params, $req["post_status"]);
	    }
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	}
	
/* 	public function getPostByDuration($req){
	    
	    $row = (int)$req["row"];
	    if(!isset($req["page"])) $req["page"] = 1;
	    $page = (int)$req["page"];
	    
	    $sql = "  SELECT
                      p.post_id,
                      p.post_caption,
                			i.post_image_src
                FROM nham_user_post p
                LEFT JOIN nham_user_post_image i
                ON p.post_id = i.post_id
                WHERE p.post_created_date BETWEEN CURDATE() - INTERVAL ? DAY AND CURDATE()
                GROUP BY i.post_id
                ORDER BY p.post_created_date DESC
                LIMIT ? OFFSET ? ";
	    $limit = $row;
	    $offset = ($row*$page)-$row;
	    
	    $params = array($req["duration"] ,$limit, $offset);
	    $query = $this->db->query($sql, $params);
	    return $query->result();
	} */
	
	public function countPostByDuration($req){
	    $current_time = new DateTime();
	    $current_time = $current_time->format('Y-m-d H:i:s');
	    
	    $sql = " SELECT count(*) as p_cnt FROM nham_user_post WHERE  post_created_date BETWEEN '".$current_time."' - INTERVAL ? DAY AND '".$current_time."'  ";
	    
	    $params = array($req["duration"]);
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	    
	}
	
	/* public function getPostByStatus($req){
	    
	    
	    $row = (int)$req["row"];
	    if(!isset($req["page"])) $req["page"] = 1;
	    $page = (int)$req["page"];
	    
	    $sql = "SELECT
                	user_id,
                	user_photo
                FROM nham_user
                WHERE
                user_status = ?
                LIMIT ? OFFSET ? ";
	    $limit = $row;
	    $offset = ($row*$page)-$row;
	    
	    $params = array($req["user_status"] ,$limit, $offset);
	    $query = $this->db->query($sql, $params);
	    return $query->result();
	    
	} */
	
	public function countPostByStatus($req){
	    
	    $sql = "SELECT count(*) as cnt
                FROM nham_user_post p
                WHERE  p.post_status = ? ";
	    $params = array($req["status"]);
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	    
	}
	
	public function countReportedPost(){
	    
	    $sql = "SELECT count(*) as cnt
                FROM nham_user_post p
                WHERE p.post_status = 1 
                AND p.post_id IN (
                	SELECT DISTINCT(r.post_id) FROM nham_report_post r
                	WHERE r.status = 1
                )";
	    $query = $this->db->query($sql);
	    return $query->row();
	}
	
	//******************** PRODUCT SECTION ***********************//
	
	public function getTopProduct($req){
	    
	    $row = (int)$req["row"];
	    if(!isset($req["page"])) $req["page"] = 1;
	    $page = (int)$req["page"];
	    $sql = "SELECT 
                	p.pro_id,
                	p.pro_image,
                    p.pro_name_en,
                    p.pro_name_kh,
                	s.shop_id,
                	s.shop_name_en,
                	s.shop_logo
                FROM nham_product p
                LEFT JOIN nham_shop s
                ON p.shop_id = s.shop_id
                WHERE p.pro_status = 1
                AND p.pro_local_popularity = 1
                ORDER BY p.pro_dis_order
                LIMIT ? OFFSET ? ";
	    $limit = $row;
	    $offset = ($row*$page)-$row;
	    
	    $params = array($limit, $offset);
	    $query = $this->db->query($sql, $params);
	    return $query->result();
	}
	
	public function countProductByMonth($req){
	    
	    $month = $req["created_month"];
	    $year = $req["created_year"];
	    
	    $sql = " SELECT count(*) as cnt
                FROM nham_product WHERE
                MONTH(pro_created_date) = ?
                AND YEAR(pro_created_date) = ? ";
	    
	    $params = array($month, $year);
	    if(isset($req["pro_status"])){
	        $sql .= " AND pro_status = ? ";
	        array_push($params, $req["pro_status"]);
	    }
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	}
	
	public function countProductByDuration($req){
	    
	    $current_time = new DateTime();
	    $current_time = $current_time->format('Y-m-d H:i:s');
	    
	    $sql = " SELECT count(*) as p_cnt FROM nham_product WHERE  pro_created_date BETWEEN '".$current_time."' - INTERVAL ? DAY AND '".$current_time."'  ";
	    
	    $params = array($req["duration"]);
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	    
	}
	
	public function countProByStatus($req){
	    
	    $sql = "SELECT count(*) as cnt
                FROM nham_product p
                WHERE  p.pro_status = ? ";
	    $params = array($req["status"]);
	    $query = $this->db->query($sql, $params);
	    return $query->row();
	    
	}
	
}

?>
