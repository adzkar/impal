<?php 

//controller Login
public function create_GOR(){
	$this->m_regist->bikin();
	$this->session->set_flashdata('email', $this->input->post('email'));
	redirect(site_url('Login_GOR'));
}

//model M_regist
public function bikin(){
	return $this->db->insert('db_GOR', [
		'email' => $this->input->post('email'),
		'GOR_name' => $this->input->post('GOR_name'),
		'detail_GOR' => $this->input->post('detail_GOR'),
		'alamat_GOR' => $this->input->post('alamat_GOR'),
		'price_GOR' => $this->input->post('price_GOR'),
		'password' => $this->input->post('pass')
	]);
}
?>

