<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
			        'type' => 'customer',
			        'remember_token' => $this->generateToken()
			);
			$this->db->insert('users', $data);
			$this->session->login = 1;
			$this->session->nama = $nama;
			redirect(base_url());
		}
	}
	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$result = $this->m_login->cek_login("users",$where);
		$result_array = $result -> row_array();
		$cek = $result->num_rows();
		if($cek > 0){
			$this->session->nama = $result_array['name'];
			$this->session->login = $result_array['id'];
			redirect($_SERVER['HTTP_REFERER']);
 
		}else{
			$this->session->error_login = 1 ;
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect($_SERVER['HTTP_REFERER']);
	}

}
