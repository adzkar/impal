<?php 

class M_gor extends CI_Model{	
	function get_gor($where = false){
		if(!$where){
			redirect(base_url());
		}else{	
			$this->db->where('gor_id', $where);
			return $this->db->get('gors')->row_array();
		}	
	}	
	function get_lapangan($where = false){
		if(!$where){
			redirect(base_url());
		}else{	
			$this->db->where('gor_id', $where);
			return $this->db->get('lapangans', $where)->result_array();
		}
	}
	function get_rating($where = false){
		if(!$where){
			redirect(base_url());
		}else{	
			$this->db->where('gor_id', $where);
			return $this->db->get('ratings', $where)->result_array();
		}
	}
	function getLap($where = false){
		if(!$where){
			return 0;
		}else{	
			$this->db->where('lapangan_id', $where);
			return $this->db->get('lapangans')->row_array();
		}	
	}
	function getAllLap($many = false,$start = false){
		if (!$many){
			$many = 100;
		}
		if (!$start){
			$start = 0;
		}
			$this->db->from('lapangans a'); 
			$this->db->join('gors b', 'b.gor_id=a.gor_id', 'left');
			$this->db->limit($many,$start);
			return $this->db->get()->result_array();
	}
	function getGorOwner($id){
		$this->db->from('gors');
		$this->db->where('user_id',$id);
		return $this->db->get()->result_array();
	}
	function getLapOwner($id){
		$this->db->from('lapangans');
		$this->db->where('gor_id',$id);
		return $this->db->get()->result_array();
	}
	function editLap($id,$nama,$jenis,$harga,$detail){
		$this->db->set('lapangan_id', $id);
		$this->db->set('nama_lapangan', $nama);
		$this->db->set('harga', $harga);
		$this->db->set('jenis', $jenis);
		$this->db->set('detail', $detail);
		$this->db->insert('lapangans');
		}
}