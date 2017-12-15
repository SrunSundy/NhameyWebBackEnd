<?php
class AdvertisementModel extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    
    public function listAdvert($request){
        
        
        $row = (int)$request["row"];
        $page = (int)$request["page"];
        
        $whole_search = $request["srch_key"];
        
        $offset = ($row*$page)-$row;
        
        $params = array();
        
        $sql = "SELECT a.id,
                	a.title,
                	a.description,
                	a.image,
                	a.shop_id,
                    sh.shop_name_en,
                    sh.shop_name_kh,
                    a.sponsor_name,
                    a.created_date,
                    a.status,
                    a.type
                FROM nham_advertisement a
                LEFT JOIN nham_shop sh ON a.shop_id = sh.shop_id 
                WHERE 1=1 ";
        
        if(isset($whole_search) && $whole_search != ""){
            $sql .= " AND a.sponsor_name LIKE ?  ";
            array_push($params, "%".$whole_search."%" );
        }
       
        if(isset($request["type"])){
            $sql .= " AND a.type = ? ";
            array_push($params, $request["type"] );
        }
        
        $query_record = $this->db->query($sql, $params);
        $total_record = count($query_record->result());
        $total_page = $total_record / $row;
        if( ($total_record % $row) > 0){
            $total_page += 1;
        }
        
        $sql .=" ORDER BY a.id DESC LIMIT ? OFFSET ? ";
        
        array_push($params, $row ,$offset);
        $query = $this->db->query($sql , $params);
        
        $response["total_page"] = (int)$total_page;
        $response["total_record"] = $total_record;
        $response["response_data"] = $query->result();
        return $response;
        
    }
    
    public function addAdvertisement($request){
        
        $params = array();
        $sql = "INSERT INTO nham_advertisement(
                                title,
                                description,
                                image,
                                type,
                                shop_id,
                                sponsor_name,
                                created_date,
                                admin_id )
                        VALUES(?,?,?,?,?,?,?,?) ";
        
        $current_time = new DateTime();
        $current_time = $current_time->format('Y-m-d H:i:s');
        array_push($params, $request["title"] , $request["description"], $request["image"],
                    $request["type"] , $request["shop_id"], $request["sponsor_name"],
                    $current_time,$_SESSION['admin_id']);
        
        return  $this->db->query($sql , $params);
        
    }
    
    public function toggleStatus($request){
        
        $sql = " UPDATE nham_advertisement SET status = ? WHERE id = ? ";
        return $this->db->query($sql, array((int)$request["status"], (int)$request["id"]));
        
    }
    
   
}

?>