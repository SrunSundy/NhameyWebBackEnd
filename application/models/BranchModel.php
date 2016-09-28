<?php
class BranchModel extends CI_Model{
	
	function getAllBranch(){
		
		$query = $this->db->query('SELECT * FROM nham_branch');
		$data = $query->result();
		return $data;
		
	}
	
	function getBranchByName($branchname , $limit , $status){
		
		$sql = "SELECT branch_id,branch_name,branch_remark FROM nham_branch
				WHERE REPLACE(branch_name, ' ', '') LIKE REPLACE(?,' ','') and branch_status in (?,?)
				ORDER BY branch_id DESC 
				limit ?";
		$branchname = "%".$branchname."%";
		$limit = (int)$limit;
		$query = $this->db->query($sql, array($branchname, $status["statusA"] , $status["statusB"] ,$limit) );
		$data = $query->result();
		return $data;
		
	}
	
	function getBranchById($branchid){
		
		$query = $this->db->query('SELECT * FROM nham_branch WHERE branch_id = ?', $branchid);
		$data = $query->result();
		return $data;
		
	}
	
	function insertBranch( $brancharr ){
		
	 	$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_branch(branch_name, branch_remark) values (? , ?)', $brancharr); 
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["branch_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
}
?>