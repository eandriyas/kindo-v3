
<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//memanggil file base untuk melakukan penurunan
require_once 'application/controllers/base/base.php';

class ajax extends base {
	public function rate(){
		$value = $this->input->get('rate');
		$sql = $this->m_kompetisi->rating();
	}
	public function show_sub_kat_by_id(){
		$id=$this->input->get('id');//get id sub kat
		$data['sub_kat'] = $this->m_kompetisi->show_sub_kat_by_id($id);
		$this->load->view('ajax/all_sub_kat', $data);
	}
	public function show_sub_kat_by_id_on_edit(){
		$id=$this->input->get('id');//get id sub kat
		$data['sub_kat'] = $this->m_kompetisi->show_sub_kat_by_id($id);
		$this->load->view('ajax/only_sub_kat', $data);
	}

}