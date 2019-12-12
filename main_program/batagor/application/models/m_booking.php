<?php 

class M_booking extends CI_Model{	
	function get_gor($where = false){
		if(!$where){
			return $this->db->get('gors')->result_array();
		}else{	
			$this->db->like('nama_gor', $where);
			$this->db->or_like('alamat', $where);
			return $this->db->get('gors')->result_array();
		}
		
	}	
}