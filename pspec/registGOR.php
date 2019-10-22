<?php 

//controller Login
public function create_GOR(){
	$this->m_regist->bikin();
	redirect(site_url('ViewsGOR'));
}

//model M_regist
public function bikin(){
	return $this->db->insert('db_GOR', [
		'id_user' => $this->input->post('id_user'),
		'id_GOR' => $this->input->post('id_GOR'),
		'GOR_name' => $this->input->post('GOR_name'),
		'detail_GOR' => $this->input->post('detail_GOR'),
		'alamat_GOR' => $this->input->post('alamat_GOR'),
		'price_GOR' => $this->input->post('price_GOR')
	]);
}
?>

