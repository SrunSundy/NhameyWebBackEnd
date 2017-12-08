<?php
class AdvertisementRestController extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model("AdvertisementModel");
    }
    
    public function index(){
        $this->load->view('index');
    }
    
    public function listadvert(){
        $request = json_decode($this->input->raw_input_stream,true);
        
        if(!isset($request["request_data"])){
            $response["response_code"] = "000";
            $response["response_msg"] = "bad request";
            
            echo json_encode($response,  JSON_PRETTY_PRINT);
            die();
        }
        
        $request = $request["request_data"];
        
        $response = $this->AdvertisementModel->listAdvert($request);
        $response["response_code"] = "200";
        $json = json_encode($response, JSON_PRETTY_PRINT);
        echo $json;
    }
    
    
}
?>