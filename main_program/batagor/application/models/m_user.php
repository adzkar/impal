<?php 

class M_user extends CI_Model{	
	function getUserInfo($where = false){
		if(!$where){
			redirect(base_url());
		}else{	
			$this->db->where('id', $where);
			$this->db->select('id,name,email,phone_number,type');
			return $this->db->get('users')->row_array();
		}	
	}	
}