<?php
class UserRestController extends  CI_Controller{

	public function index(){
		//$this->load->view('haha');
	}

	public function theSecond(){
		//echo "THIS IS THE SECOND STEP!!!";
		$this->db->select('*');
		//$this->db->from('user');



		$query = $this->db->get('user');

		if ( $query->num_rows() > 0 )
		{
			$data = $query->result();
			$json = json_encode($data);
			echo $json;
			//$this->load->view('haha', $json);


		}
			
	}
}
?>