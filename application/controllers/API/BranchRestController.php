<?php
class BranchRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("BranchModel");			
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getAllBranch(){
		
		$data = $this->BranchModel->getAllBranch();
		$json = json_encode($data);
		echo $json;
	}
	
	public function getBranchByNameCombo(){
		
		$branchname = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
		{
			$limit = 10;
		}	
		$status["statusA"] = 1;
		$status["statusB"] = 1;
		$data = $this->BranchModel->getBranchByName($branchname , $limit , $status);
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function getDistance(){
		
		$coordinates1 = $this->get_coordinates('Tychy', 'Jana Pawła II', 'Śląskie');
		$coordinates2 = $this->get_coordinates('Lędziny', 'Lędzińska', 'Śląskie');
		if ( !$coordinates1 || !$coordinates2 )
		{
			echo 'Bad address.';
		}
		else
		{ 
			$dist = $this->GetDrivingDistance($coordinates1['lat'], $coordinates2['lat'], $coordinates1['long'], $coordinates2['long']);
			echo 'Distance: <b>'.$dist['distance'].'</b><br>Travel time duration: <b>'.$dist['time'].'</b>';
		}
		
	}
	
	function get_coordinates($city, $street, $province)
	{
		$address = urlencode($city.','.$street.','.$province);
		$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Poland";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$response = curl_exec($ch);
		curl_close($ch);
		$response_a = json_decode($response);
		$status = $response_a->status;
	
		if ( $status == 'ZERO_RESULTS' )
		{
			return FALSE;
		}
		else
		{
			$return = array('lat' => $response_a->results[0]->geometry->location->lat, 'long' => $long = $response_a->results[0]->geometry->location->lng);
			return $return;
		}
	}
	//https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522,151.1957362&radius=500&type=restaurant&keyword=cruise&key=AIzaSyCSDjBA-4xhfV7TGP1jrTBcBJ4p70mmezo
	function GetDrivingDistance($lat1, $lat2, $long1, $long2)
	{
		$url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat1.",".$long1."&destinations=".$lat2.",".$long2."&mode=driving&language=pl-PL";
		echo $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$response = curl_exec($ch);
		curl_close($ch);
		$response_a = json_decode($response, true);
		
	 	$dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
		$time = $response_a['rows'][0]['elements'][0]['duration']['text'];
	
		return array('distance' => $dist, 'time' => $time); 
	}
	
	public function getBranchById(){
		$tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
		
		print_r(json_encode($tzlist));
	}
	
	
	
	public function insertBranch(){
		
		$branchdata = json_decode($this->input->raw_input_stream,true);
		$branchdata = $branchdata["BranchData"];
		
		$brancharr = array($branchdata['branch_name'],$branchdata['branch_remark']);
		$data = $this->BranchModel->insertBranch( $brancharr );
		$json = json_encode($data); 
		echo $json;
	}
}
?>