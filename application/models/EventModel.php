<?php
class EventModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function listEvent($request){
	    
      
        $row = (int)$request["row"];
        $page = (int)$request["page"];
        
        $offset = ($row*$page)-$row;
        
        $params = array();
        
        $sql = "SELECT 
                     eve.evt_id,
                	 eve.evt_cntt,
                	 eve.evt_img,
                     eve.created_date,
                     eve.status,
                     eve.shop_id,
                     s.shop_name_en,
                	 s.shop_name_kh,
                     eve.creator_id,
                     a.admin_name
                   
                FROM nham_event eve
                LEFT JOIN nham_shop s ON eve.shop_id = s.shop_id
                LEFT JOIN nham_admin a ON eve.creator_id = a.admin_id ";
        
        $query_record = $this->db->query($sql);
        $total_record = count($query_record->result());
        $total_page = $total_record / $row;
        if( ($total_record % $row) > 0){
            $total_page += 1;
        }
        
        $sql .=" ORDER BY eve.evt_id DESC LIMIT ? OFFSET ? ";
        
        array_push($params, $row ,$offset);
        $query = $this->db->query($sql , $params);
        
        $response["total_page"] = (int)$total_page;
        $response["total_record"] = $total_record;
        $response["response_data"] = $query->result();
        return $response;
	    
	}
}

?>