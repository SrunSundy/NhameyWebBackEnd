<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions



// push notification
require_once $_SERVER['DOCUMENT_ROOT'].'/plugin/push_notification/vendor/autoload.php';

use Sly\NotificationPusher\PushManager,
    Sly\NotificationPusher\Adapter\Gcm as GcmAdapter,
    Sly\NotificationPusher\Collection\DeviceCollection,
    Sly\NotificationPusher\Model\Device,
    Sly\NotificationPusher\Model\Message,
    Sly\NotificationPusher\Model\Push
;



//==========end notification=========

class Pushnotification extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();		
		$this->load->model("DeviceKeyModel");
	}
	
   
	
	public function index(){
		$this->load->view('index');
	}	
	
	
	
	
	function push_notification(){
		$userId = $this->input->post('userId');
		$message=$this->input->post('message');
		$keys= $this->getkey($userId);
	    foreach ($keys as $key){
			$type=$key->type;
			if($type=="android"){
				$tokenAnd[]=new Device($key->token_id);
			}else{
				$tokenIos[]=new Device($key->token_id);
			}
		}
		$pushManager = new PushManager(PushManager::ENVIRONMENT_DEV);
		
		// Then declare an adapter.
		$gcmAdapter = new GcmAdapter(array(
		    'apiKey' => 'AAAAVFtZTBU:APA91bEznrS4pit-LclbbPUxn-EHKTs1omj-Fx2I1NS3-Zso5t-Oz_ifnmv1prL_av-xMAXVBtl-BFjRJhXumAFtidAD_bio29bevwlLXM_z4q0ijmQUMaV-VaMrBs63RQyr4ALLgtnz',
		));
		$devices = new DeviceCollection($tokenAnd);

		$message = new Message($message);
		
		// Finally, create and add the push to the manager, and push it!
		$push = new Push($gcmAdapter, $devices, $message);
		$pushManager->add($push);
		$pushManager->push(); /// Returns a collection of notified devices
		echo "success";
			
	}
	function push_notificationAll(){
		$message=$this->input->post('message');
		$keys= $this->getkeyAll();
	    foreach ($keys as $key){
			$type=$key->type;
			if($type=="android"){
				$tokenAnd[]=new Device($key->token_id);
			}else{
				$tokenIos[]=new Device($key->token_id);
			}
		}
		$pushManager = new PushManager(PushManager::ENVIRONMENT_DEV);
		
		// Then declare an adapter.
		$gcmAdapter = new GcmAdapter(array(
		    'apiKey' => 'AAAAVFtZTBU:APA91bEznrS4pit-LclbbPUxn-EHKTs1omj-Fx2I1NS3-Zso5t-Oz_ifnmv1prL_av-xMAXVBtl-BFjRJhXumAFtidAD_bio29bevwlLXM_z4q0ijmQUMaV-VaMrBs63RQyr4ALLgtnz',
		));
		$devices = new DeviceCollection($tokenAnd);

		$message = new Message($message);
		
		// Finally, create and add the push to the manager, and push it!
		$push = new Push($gcmAdapter, $devices, $message);
		$pushManager->add($push);
		$pushManager->push(); /// Returns a collection of notified devices
		echo "success";
			
	}
	private function getkey($userId){
		return $this->DeviceKeyModel->getKeyById($userId);
		
	}
    private function getkeyAll(){
		return $this->DeviceKeyModel->getKeyAll();
		
	}
	
	
}

?>