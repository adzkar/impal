<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gor extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('m_register');
		$this->load->model('m_gor');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->input->get('id_gor')){
			$where = $this->input->get('id_gor');
			$res = $this->m_gor->get_gor($where);
			$lapangan = $this->m_gor->get_lapangan($where);
			$ratings = $this->m_gor->get_rating($where);
		}else{
			$res = $this->m_gor->get_gor(0);
		}
		$res['res'] = $res;
		$res['lapangan'] = $lapangan;
		$res['ratings'] = $ratings;
		$this->load->view('Gor',$res);
	}
	function getAllLap($many = false, $start = false){
		$arr = $this->m_gor->getAllLap($many, $start);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
	}
	
	function getLap($id){
		$arr = $this->m_gor->getLap($id);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
	}
	function getGorOwner(){
		$id = $this->session->login_pemilik;
		$arr = $this->m_gor->getGorOwner($id);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
	}
	function getLapGor($id){
		$arr = $this->m_gor->get_lapangan($id);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
	}
	function editLapangan(){
		$lapangan_id = $this->input->post('lapangan_id');
		$namaLap = $this->input->post('namaLapangan');
		$jenisLap = $this->input->post('jenisLapangan');
		$hargaLap = $this->input->post('hargaLapangan');
		$deskripsiLap = $this->input->post('deskripsiLapangan');
		$data = array(
	        'nama_lapangan' => $namaLap,
	        'harga' => $hargaLap,
	        'jenis' => $jenisLap,
	        'detail' => $deskripsiLap
		);
		$this->db->where('lapangan_id', $lapangan_id);
		$this->db->update('lapangans', $data);
	}
	function hapus_lap($lapangan_id = false){
		if($lapangan_id){
			$this->db->where('lapangan_id', $lapangan_id);
			$this->db->delete('images');
			$this->db->where('lapangan_id', $lapangan_id);
			$this->db->delete('lapangans');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			redirect($_SERVER['HTTP_REFERER']);

		}
	}
	function add_lap(){
		$gor_id = $this->input->post('gor_id');
		$imageLap = $this->input->post('imageLap');
		$namaLap = $this->input->post('namaLapangan');
		$jenisLap = $this->input->post('jenisLapangan');
		$hargaLap = $this->input->post('hargaLapangan');
		$deskripsiLap = $this->input->post('deskripsiLapangan');

		$dataLap = array(
			'nama_lapangan' => $namaLap , 
			'harga' => $hargaLap , 
			'detail' => $deskripsiLap , 
			'jenis' => $jenisLap , 
			'gor_id' => $gor_id , 
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		);
		$this->db->insert('lapangans', $dataLap);
		$id = $this->db->insert_id();

		$dataImage = array(
			'file_name' => $imageLap, 
			'gor_id' => $gor_id, 
			'lapangan_id' => $id,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		);
		$this->db->insert('images', $dataImage);
		redirect($_SERVER['HTTP_REFERER']);
	}

	function hapus_gor($gor_id = false){
		if($gor_id){
			$this->db->from('ratings');
			$this->db->where('gor_id', $gor_id);
			$this->db->delete();
			$this->db->from('images');
			$this->db->where('gor_id', $gor_id);
			$this->db->delete();
			$this->db->from('lapangans');
			$this->db->where('gor_id', $gor_id);
			$this->db->delete();
			$this->db->from('gors');
			$this->db->where('gor_id', $gor_id);
			$this->db->delete();
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			redirect($_SERVER['HTTP_REFERER']);

		}
	}

	function add_gor(){ 
		$namaGor = $this->input->post('namaGor');
		$alamatGor = $this->input->post('alamatGor');
		$user_id = $this->session->login_pemilik;

		$data = array(
			'user_id' => $user_id,
			'nama_gor' => $namaGor, 
			'alamat' => $alamatGor,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		);
		$this->db->insert('gors', $data);
		$id = $this->db->insert_id();
	}

	function editGor(){
		$namaGor = $this->input->post('namaGor');
		$alamatGor = $this->input->post('alamatGor');
		$gor_id = $this->input->post('gor_id');
		$data = array(
			'gor_id' => $gor_id,
	        'nama_gor' => $namaGor,
	        'alamat' => $alamatGor
		);
		$this->db->where('gor_id', $gor_id);
		$this->db->update('gors', $data);
	}
	function getJamTersedia($lapId,$tanggal){
		$jam = array();
		$this->db->from('carts a');
		$this->db->join('detail_carts b', 'a.carts_id = b.carts_id', 'left');
		$this->db->where('lapangan_id',$lapId);
		$this->db->where('tanggal_main',$tanggal);
		$res = $this->db->get()->result_array();
		$i = 0;
		while($i < 16){
			$jam[$i]['jam'] = ($i+7).':00';
			$jam[$i]['status'] = 'tersedia';
			$i++;
		}
		for ($j=0; $j < count($res); $j++) { 
			$idx = $res[$j]['jam_main'];
			$durasi = $res[$j]['durasi'];
			$idx_explode = explode(':',$idx);
			$jam_main = $idx_explode[0];
			$idx_start = (int)$jam_main-7;
			$idx_stop = $idx_start + $durasi;
			for ($i=$idx_start; $i < $idx_stop; $i++) { 
				$jam[$i]['status'] = 'tidak_tersedia';
			}
		}
		header('Content-Type: application/json');
		echo json_encode( $jam );
	}
}
