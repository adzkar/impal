<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeOwners extends CI_Controller {

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
		if($this->session->login_pemilik){
			$this->load->view('homeOwner');
		}else{
			redirect(base_url('pemilik/login'));

		}
		
	}

}
