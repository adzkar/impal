<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {

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
		$this->load->model('m_login');
		$this->load->model('m_gor');
		$this->load->model('m_register');
	}
	public function index()
	{
		$this->load->view('Home');
	}
	function generateToken() { 
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	    $randomString = ''; 
	  
	    for ($i = 0; $i < 10; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $randomString .= $characters[$index]; 
	    } 
	  
	    return $randomString; 
	} 	
	function login(){
		$this->load->view('pemilikLogin');
	}
	function register(){
		$this->load->view('pemilikRegister');
	}
	function cek_user_register(){
		$email = $this->input->post('email');
		$where = array(
			'email' => $email
			);
		$cek = $this->m_register->cek_user('users',$where)->num_rows();	
		echo $cek;
		if($cek > 0){
			$this->session->error_register = 1;
			redirect(base_url());
		}else{
			$email = $this->input->post('email');
			$nama = $this->input->post('name');
			$password = $this->input->post('password');
			$notelp = $this->input->post('notelp');
			$data = array(
			        'email' => $email,
			        'name' => $nama,
			        'password' => md5($password),
			        'phone_number' => $notelp,	
			        'email_verified_at' => date('Y-m-d H:i:s'),
			        'created_at' => date('Y-m-d H:i:s'),
			        'updated_at' => date('Y-m-d H:i:s'),
			        'type' => 'pihak_gor',
			        'remember_token' => $this->generateToken()
			);
			$this->db->insert('users', $data);
			$this->session->login = 1;
			$this->session->nama = $nama;
			redirect(redirect(base_url('HomeOwners')));

		}
	}
	function login_pemilik(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password),
			'type' => 'pihak_gor'
			);
		$result = $this->m_login->cek_login("users",$where);
		$result_array = $result -> row_array();
		$cek = $result->num_rows();
		if($cek > 0){
			$this->session->nama = $result_array['name'];
			$this->session->login_pemilik = $result_array['id'];
			$this->session->login = $result_array['id'];
			redirect(base_url('HomeOwners'));
 
		}else{
			$this->session->error_login = 1 ;
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function gor_pemilik(){
		if($this->session->login_pemilik){
			$where = $this->session->login_pemilik;
			$res = $this->m_gor->getGorOwner($where);
			$lapangan = $this->m_gor->get_lapangan($where);
			$ratings = $this->m_gor->get_rating($where);
		}else{
			$res = $this->m_gor->get_gor(0);
		}
		$res['res'] = $res;
		$res['lapangan'] = $lapangan;
		$res['ratings'] = $ratings;
		$this->load->view('gorPemilik',$res);
	}
	function lap_pemilik($gor_id = false){
		if($gor_id){
			$res = $this->m_gor->get_gor($gor_id);
			$lapangan = $this->m_gor->getLapOwner($gor_id);
		}
		$res['res'] = $res;
		$res['lapangan'] = $lapangan;
		$res['gor_id'] = $gor_id;
		$this->load->view('lapPemilik',$res);
	}
	function edit_lap($lapangan_id = false){
		if($lapangan_id){
			$where = $lapangan_id;
			$lapangan = $this->m_gor->getLap($where);
			$res = $this->m_gor->get_gor($lapangan['gor_id']);
			$ratings = $this->m_gor->get_rating($where);
		}else{
			$res = $this->m_gor->get_gor(0);
		}
		$res['res'] = $res;
		$res['ratings'] = $ratings;
		$res['lapangan'] = $lapangan;
		$this->load->view('editLap',$res);
	}
	function editProfile(){
		$this->load->view('editProfileOwner');
	}

	function getGOR($where = false){
		$arr = $this->m_gor->get_gor($where);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
	}
	function getJadwal($idGor,$idLap,$tanggal){
		$jam = array();
		$this->db->from('carts a');
		$this->db->join('detail_carts b', 'a.carts_id = b.carts_id', 'left');
		$this->db->join('users c', 'a.cust_id = c.id', 'left');
		$this->db->where('lapangan_id',$idLap);
		$this->db->where('tanggal_main',$tanggal);
		$this->db->select('jam_main, status, name, durasi');
		$res = $this->db->get()->result_array();
		$i = 0;
		$jadwal = array();
		for ($i=0; $i < 16; $i++) { 
			$jadwal[$i]['jam_main'] = strval($i+7).':00';
			$jadwal[$i]['status'] = '-';
			$jadwal[$i]['customer'] = '-';
		}
		for ($j=0; $j < count($res); $j++) { 
			$idx = $res[$j]['jam_main'];
			$durasi = $res[$j]['durasi'];
			$idx_explode = explode(':',$idx);
			$jam_main = $idx_explode[0];
			$idx_start = (int)$jam_main-7;
			$idx_stop = $idx_start + $durasi;
			for ($i=$idx_start; $i < $idx_stop; $i++) { 
				$jadwal[$i]['status'] = $res[$j]['status'];
				$jadwal[$i]['customer'] = $res[$j]['name'];
			}
		}
		header('Content-Type: application/json');
		echo json_encode( $jadwal );
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('pemilik/login'));
	}
	function getPesanan(){
		
	}
	function rekeningAcc(){

	}


}
