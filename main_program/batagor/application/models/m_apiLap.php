<?php 

class M_apiLap extends CI_Model{	
	function getLap($where = false){
		if(!$where){
			return 0;
		}else{	
			$this->db->where('lapangan_id', $where);
			return $this->db->get('lapangans')->row_array();
		}	
	}	
	function insertCarts($data){
		$this->db->insert('carts',$data);
	}
	function insertDetailCarts($data){
		$this->db->insert('detail_carts',$data);
	}
}