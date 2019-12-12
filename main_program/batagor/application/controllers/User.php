<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->model('m_apiLap');
		$this->load->model('m_carts');
		$this->load->model('m_user');
	}
	function pesanLap(){
		$date = date('Y-m-d H:i:s');
		if((int)$this->input->post('user') == $this->session->login){
			$data = array(
					'status' => 'belum',
					'lapangan_id' => $this->input->post('id'),
					'user_id' => $this->input->post('user'),
			);
			$data1 = array(
					'tanggal_main' => $this->input->post('tanggal_main'),
					'jam_main' => $this->input->post('jam_main'),
					'durasi' => $this->input->post('durasi'),	
					'total' => $this->input->post('total_harga'),
					'created_at' => $date,
					'updated_at' => $date,
					'bukti_upload' => 'none'
			);
			$this->m_apiLap->insertCarts($data);
			$this->m_apiLap->insertDetailCarts($data1);
		}
	}
	function getInfoUser(){
		if($this->session->login){
			$arr = $this->m_user->getUserInfo($this->session->login);    
			header('Content-Type: application/json');
			echo json_encode( $arr );
		}

	}

	function editProfile(){
		$error_msg['error_msg'] = '';
		$this->load->view('editProfileCust',$error_msg);
	}
	function edit(){
		$fullName = $this->input->post('fullName');
		$mobileNumber = $this->input->post('mobileNumber');
		$emailAddress = $this->input->post('emailAddress');
		$currentPassword = $this->input->post('currentPassword');
		$newPassword = $this->input->post('newPassword');
		if($newPassword == ''){
			$newPassword = $currentPassword;
		}
		if($currentPassword == ''){
			$this->session->set_userdata('error_msg', 'Current password harus diisi!');
		}
		if($this->session->login_pemilik){
			$user_id = $this->session->login_pemilik;
		}else{
			$user_id = $this->session->login;
		}
		$this->db->from('users');
		$this->db->where('id',$user_id);
		$res = $this->db->get()->row_array();
		if($res['password'] == md5($currentPassword)){
			$data = array(
				'name' => $fullName,
		        'phone_number' => $mobileNumber,
		        'email' => $emailAddress,
		        'password' => md5($newPassword)
			);
			$this->db->where('id', $user_id);
			$this->db->update('users', $data);
			$this->session->set_userdata('error_msg', 'Informasi berhasil diperbarui!');
		}else{
			$this->session->set_userdata('error_msg', 'informasi gagal diperbarui, current password salah!');
		}
	}

}
