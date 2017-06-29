<?php
class DashboardRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("DashboardModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getinitializeddata(){
		
		$response["total_place"] = $this->DashboardModel->countTotalShop()->total_record;
		$response["total_user"] = $this->DashboardModel->countTotalUser()->total_record;
		$response["total_post"] = $this->DashboardModel->countTotalPost()->total_record;
		$response["total_product"] = $this->DashboardModel->countTotalProduct()->total_record;
		
		$req_admin["admin_type"] = 2;
		$response["total_admin"] = $this->DashboardModel->getTotalAdmin($req_admin)->total_record;
		$req_admin["row"] = 4;
		$response["admin_rec"] = $this->DashboardModel->getAdmin($req_admin);
		
		$req_sup_admin["admin_type"] = 1;
		$response["total_sup_admin"] = $this->DashboardModel->getTotalAdmin($req_sup_admin)->total_record;
		$req_sup_admin["row"] = 4;
		$response["sup_admin_rec"] = $this->DashboardModel->getAdmin($req_sup_admin);
		
		/*places's statistic*/

		
		for ($i = 0; $i < 12; $i++) {
			$year = date("Y", strtotime( date( 'Y-m-01' )." -$i months"));
			$month = date("m", strtotime( date( 'Y-m-01' )." -$i months"));
			
			$req["created_month"] = $month;
			$req["created_year"] = $year;
			
			$name = $year."-".$month;
			$response["shop_monthly"]["all_shop"][$i][$name] =  $this->DashboardModel->countShopByMonth($req)->cnt;
			
			$req_u["created_month"] = $month;
			$req_u["created_year"] = $year;
			$req_u["shop_status"] = 2;
			
			$name_u = $year."-".$month;
			$response["shop_monthly"]["u_shop"][$i][$name_u] =  $this->DashboardModel->countShopByMonth($req_u)->cnt;
			
		}
				
		
		$req_pop_sh["row"] = 4;
		$response["pop_shop"] = $this->DashboardModel->getPopularShop($req_pop_sh);
		
		$req_last_one_month_sh_cnt["duration"] = 30;
		$response["thirty_day_shop_cnt"] = $this->DashboardModel->countShopByDuration($req_last_one_month_sh_cnt);
		$req_last_one_month_sh["row"] = 4;
		$req_last_one_month_sh["duration"] = 30;
		$response["thirty_day_shop"] = $this->DashboardModel->getShopByDuration($req_last_one_month_sh);
		
		$req_disabled_shop_cnt["shop_status"] = 0;
		$response["shop_disability_cnt"] = $this->DashboardModel->countShopByStatus($req_disabled_shop_cnt);
		$req_disabled_shop["shop_status"] = 0;
		$req_disabled_shop["row"] = 10;
		$response["shop_disability"] = $this->DashboardModel->getShopByStatus($req_disabled_shop);
		
		$req_unauthorized_shop_cnt["shop_status"] = 2;
		$response["shop_unauth_cnt"] = $this->DashboardModel->countShopByStatus($req_unauthorized_shop_cnt);
		$req_unauthorized_shop["shop_status"] = 2;
		$req_unauthorized_shop["row"] = 10;
		$response["shop_unauth"] = $this->DashboardModel->getShopByStatus($req_unauthorized_shop);
		/*end places's statistic*/
		
		
		header('Content-Type: application/json');
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
	}
	
	
}

?>