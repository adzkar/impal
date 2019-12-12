<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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
	}
	function getLap($id){
		$arr = $this->m_apiLap->getLap($id);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
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
	function getPesanan($userId){
		
	}

}
