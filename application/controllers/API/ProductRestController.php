<?php
class ProductRestController extends CI_Controller{
    public function __construct() {
        
        parent::__construct();
        
        $this->load->model('ProductModel');
        $this->load->library('session');
        /* if(!isset($_SESSION['admin_id']))
         die("you are kick out"); */
    }
    public function index(){
        $this->load->view('index');
    }
    public function listAllShop(){
        echo "HI";
    }
    
    
    public function insertProduct(){
        
        $shop_id = $this->input->post('shop_id');
        $pro_name_en = $this->input->post('product_engname');
        $pro_name_kh = $this->input->post('product_khname');
        $taste_id  = $this->input->post('tast_id');
        
        $pro_serve_type=$this->input->post('pro_servertype');
        $pro_price=$this->input->post('price');
        $pro_promote_price=$this->input->post('promote_price');
        $pro_image=$this->input->post('pro_logo');
        $pro_short_description=$this->input->post('productshortdes');
        $pro_description=$this->input->post('productdes');
        $pro_remark=$this->input->post('proremark');
        $pro_made_duration=$this->input->post('pro_made_duration');
        $pro_local_popularity=$this->input->post('pro_local_popularity');
        $data=$this->getSomeShopInfo($shop_id);
        foreach ($data as $shop){
            $shop_name_en=$shop->shop_name_en;
            $shop_name_kh=$shop->shop_name_kh;
            $country_id=$shop->country_id;
            $city_id=$shop->city_id;
            $district_id=$shop->district_id;
            $commune_id=$shop->commune_id;
            $pro_lat_point=$shop->shop_lat_point;
            $pro_lng_point=$shop->shop_lng_point;
        }
        $datapro=array("shop_id"=>$shop_id,"shop_name_en"=>$shop_name_en,"shop_name_kh"=>$shop_name_kh,
            "pro_name_en"=>$pro_name_en,"pro_name_kh"=>$pro_name_kh,"country_id"=>$country_id,"city_id"=>$city_id,"district_id"=>$district_id,
            "commune_id"=>$commune_id,"taste_id"=>$taste_id,"pro_lat_point"=>$pro_lat_point,"pro_lng_point"=>$pro_lng_point,
            "pro_serve_type"=>$pro_serve_type,"pro_price"=>$pro_price,"pro_promote_price"=>$pro_promote_price,
            "pro_image"=>$pro_image,"pro_short_description"=>$pro_short_description,"pro_description"=>$pro_description,"pro_remark"=>$pro_remark,
            "pro_made_duration"=>$pro_made_duration,"pro_local_popularity"=>$pro_local_popularity,"admin_id"=>1);
        $pro_servertype = $this->input->post('serve_categories');
        $tags=$this->input->post('tags');
        $response = $this->ProductModel->insertProduct($datapro,$pro_servertype,$tags);
        echo json_encode($response);
        
    }
    private function getSomeShopInfo($id){
        
        $this->load->model('ShopModel');
        $data=$this->ShopModel->getSomeShopInfo($id);
        return $data;
    }
    public function listProduct(){
        
        $setting = json_decode($this->input->raw_input_stream,true);
        $setting = $setting["display-setting"];
        
        $response = $this->ProductModel->listProduct($setting);
        $json = json_encode($response, JSON_PRETTY_PRINT);
        echo $json;
    }
    public function listProductByShopId(){
        
        $request = json_decode($this->input->raw_input_stream,true);
        if(!isset($request["request_data"])){
            $response["response_code"] = "400";
            $response["response_msg"] = "bad request";
            $json = json_encode($response, JSON_PRETTY_PRINT);
            echo $json;
            die;
        }
        $request = $request["request_data"];
        if(!isset($request["row"]) || $request["row"] <= 0) $request["row"] = 16;
        if(!isset($request["page"]) || $request["page"] <= 0) $request["page"] = 1;
        if(!isset($request["pro_status"]) || $request["pro_status"] <= 0) $request["pro_status"] = 3;
        
        if(!isset($request["shop_id"])){
            $response["response_code"] = "400";
            $response["response_msg"] = "shop_id is required!";
            $json = json_encode($response, JSON_PRETTY_PRINT);
            echo $json;
            die;
        }
        
        $response_data = $this->ProductModel->listProductByShopId($request);
        
        $response["total_record"] = $this->ProductModel->countListProductByShopId($request)->total_record;
        $response["total_page"] = (int)$this->ProductModel->countListProductByShopId($request)->total_page;
        $response["response_data"] = $response_data;
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
    
    public function updateProductField(){
        
        $request = json_decode($this->input->raw_input_stream,true);
        $request = $request["request_data"];
        
        $response = $this->ProductModel->updateProductField($request);
        echo json_encode($response);
        
    }
    
    public function deleteProduct(){
        
        $request = json_decode($this->input->raw_input_stream,true);
        if(!isset($request["request_data"])){
            $response["response_code"] = "400";
            $response["response_msg"] = "bad request";
            $json = json_encode($response, JSON_PRETTY_PRINT);
            echo $json;
            die;
        }
        
        $response = array();
        
        if($this->ProductModel->deleteProduct($request["request_data"]["pro_id"])){
            $response["is_deleted"] = true;
            $response["message"] = "Delete successfully!";
        }else{
            $response["is_deleted"] = false;
            $response["message"] = "Delete fail!";
        }
        echo json_encode($response);
        
    }
    public function toggleProduct(){
        
        
        $request = json_decode($this->input->raw_input_stream,true);
        $request = $request["resq_data"];
        if(!$request){
            $response["is_updated"] = false;
            $response["message"] = "No Data";
            $json = json_encode($response, JSON_PRETTY_PRINT);
            echo $json;
            return;
        }
        
        $response = $this->ProductModel->toggleProduct($request);
        $json = json_encode($response, JSON_PRETTY_PRINT);
        echo $json;
    }
}
?>