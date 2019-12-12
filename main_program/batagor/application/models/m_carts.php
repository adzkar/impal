<?php 

class M_carts extends CI_Model{	
	function getCarts($where = false){
		if(!$where){
			return 0;
		}else{	
			$this->db->from('carts a'); 
			$this->db->join('lapangans b', 'b.lapangan_id=a.lapangan_id', 'left');
			$this->db->join('gors c', 'c.gor_id=b.gor_id', 'left');
			$this->db->join('detail_carts d', 'a.carts_id=d.carts_id', 'left');
			$this->db->where('cust_id', $where);
			return $this->db->get()->result_array();
		}	
	}
	function getCartsOwner($where = false){
		if(!$where){
			return 0;
		}else{	
			$this->db->from('carts a'); 
			$this->db->join('lapangans b', 'b.lapangan_id=a.lapangan_id', 'left');
			$this->db->join('gors c', 'c.gor_id=b.gor_id', 'left');
			$this->db->join('detail_carts d', 'a.carts_id=d.carts_id', 'left');
			$this->db->join('users e', 'a.cust_id = e.id', 'left');
			$this->db->select('a.carts_id, name,nama_gor,nama_lapangan,jenis,tanggal_main,jam_main,durasi,total, status, bukti_upload');
			$this->db->where('user_id', $where);
			return $this->db->get()->result_array();
		}	
	}
}