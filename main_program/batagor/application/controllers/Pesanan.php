<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

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
		$this->load->model('m_carts');
	}
	public function index()
	{
		$this->load->view('pesanan_saya');
	}
	public function getPesanan($id){
		$arr = $this->m_carts->getCarts($id);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
	}
	public function getPesananOwner(){
		$id = $this->session->login_pemilik;
		$arr = $this->m_carts->getCartsOwner($id);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
	}
	public function getDetailCarts($id){
		$arr = $this->m_carts->getDetailCarts($id);    
		header('Content-Type: application/json');
		echo json_encode( $arr );
	}
	public function rubahStatus($id,$status){
		if($status == 'ya'){
			$data = array(
			'status' => 'Lunas'
			);
			$this->db->where('carts_id', $id);
			$this->db->update('carts', $data);
		}elseif($status == 'tidak'){
			$data = array(
			'status' => 'belum'
			);
			$this->db->where('carts_id', $id);
			$this->db->update('carts', $data);
		}
	}

}
