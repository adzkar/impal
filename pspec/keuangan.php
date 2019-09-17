<?
	//Controller Keuangan
	public function laporanKeuangan()
	{

		$data['judul'] = 'Laporan Keuangan';
		$data['keuangan'] = $this->Keuangan_model->getAllKeuangan();
		if ($this->input->post('dateStart')) {
			$data['keuangan'] = $this->Keuangan_model->cariRenggangTanggal();
		}
		$this->load->view('keuangan/index', $data);
	}
	//Model keuangan
	public function getAllKeuangan()
	{
		$this->load->database();
		return $this->db->get('Status_Pembayaran')->result_array();
	}
	public function cariRenggangTanggal()
	{
		$date_start = $this->input->post('dateStart', true);
		if($this->input->post('dateEnd')){
			$date_end = $this->input->post('dateEnd', true);
		}else{
			$date_end = date('Y-m-d');
		}
		$this->db->where("(tgl_sewa BETWEEN #".$dateStart."# AND #".$dateEnd."#");
		return $this->db->get('Status_Pembayaran')->result_array();
	}

?>
