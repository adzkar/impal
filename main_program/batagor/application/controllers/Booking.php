<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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
		$this->load->model('m_booking');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->input->get('kata_kunci')){
			$res = $this->m_booking->get_gor($this->input->get('kata_kunci'));
		}else{
			$res = $this->m_booking->get_gor(0);
		}
		
		$res['res'] = $res;
		$this->load->view('Booking', $res);
	}

}
