<?php
class EventRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("EventModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function listevent(){
	    $request = json_decode($this->input->raw_input_stream,true);
	    
	    if(!isset($request["request_data"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "bad request";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	    
	    $request = $request["request_data"];
	    
	    $response = $this->EventModel->listEvent($request);
	    $response["response_code"] = "200";
	    $json = json_encode($response, JSON_PRETTY_PRINT);
	    echo $json;
	}
	
	public function toggleevent(){
	    
	    $request = json_decode($this->input->raw_input_stream,true);
	    
	    if(!isset($request["request_data"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "bad request";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	    
	    $request = $request["request_data"];
	    
	    $response = array();
	    if($this->EventModel->toggleEventStatus($request)){
	        $response["response_code"] = "200";
	        $response["response_msg"] = "update successfully!";
	    }else{
	        $response["response_code"] = "000";
	        $response["response_msg"] = "update failed!";
	    }
	    $json = json_encode($response, JSON_PRETTY_PRINT);
	    echo $json;
	    
	    
	}
	
	public function addevent(){
	    
	    $request = json_decode($this->input->raw_input_stream,true);
	    
	    if(!isset($request["request_data"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "bad request";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	    
	    $request = $request["request_data"];
	    
	    if(!isset($request["shop_id"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "shop_id is required!";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	    
	    if(!isset($request["evt_img"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "evt_img is required!";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	   
	    
	    $response = array();
	    if($this->EventModel->addEvent($request)){
	        $response["response_code"] = "200";
	        $response["response_msg"] = "update successfully!";
	    }else{
	        $response["response_code"] = "000";
	        $response["response_msg"] = "update failed!";
	    }
	    $json = json_encode($response, JSON_PRETTY_PRINT);
	    echo $json;
	}
	
	public function updateevent(){
	    $request = json_decode($this->input->raw_input_stream,true);
	    
	    if(!isset($request["request_data"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "bad request";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	    
	    $request = $request["request_data"];
	    
	    if(!isset($request["evt_id"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "evt_id is required!";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	    
	    if(!isset($request["shop_id"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "shop_id is required!";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	    
	    if(!isset($request["evt_img"])){
	        $response["response_code"] = "000";
	        $response["response_msg"] = "evt_img is required!";
	        
	        echo json_encode($response,  JSON_PRETTY_PRINT);
	        die();
	    }
	    
	    
	    $response = array();
	    if($this->EventModel->updateEvent($request)){
	        $response["response_code"] = "200";
	        $response["response_msg"] = "update successfully!";
	    }else{
	        $response["response_code"] = "000";
	        $response["response_msg"] = "update failed!";
	    }
	    $json = json_encode($response, JSON_PRETTY_PRINT);
	    echo $json;
	}
	
	
}

?>