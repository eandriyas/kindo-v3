<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//memanggil file base untuk melakukan penurunan
require_once 'application/controllers/base/base.php';


class kompetisi extends base {
	//membuat construktor
	public function __construct() {
		parent::__construct();
	}

	public function pages(){ //menampilkan berdasarkan pages yang dimaksud

		$data['title'] = "pages | ";
		$this->defaultdisplay('public/pages', $data);
		$this->footerdisplay();
	}

	//berisi detal kompetisi
	public function detail($id){
		//encrypt
		$dec = base64_decode(base64_decode($id));
		$id_kompetisi = str_replace('', '=', $dec);

		//jika ada user login
		if(!empty($this->session->userdata('id_user'))) {
			$params = array($id_kompetisi, $this->session->userdata('id_user'));
			$this->m_kompetisi->kompetisi_btn($params);
		}
		$params = array($id_kompetisi, $this->session->userdata('id_user'));
		$data['btn'] = $this->m_kompetisi->cek_btn($params);
		$data['ditandai'] = $this->m_kompetisi->count_tandai($id_kompetisi);
		$data['gabung'] = $this->m_kompetisi->count_gabung($id_kompetisi);
		$data['view'] = $this->m_kompetisi->get_competition_by_id_kompetisi($id_kompetisi);
		//judul di title bar
		$tit = $this->m_kompetisi->title_kompetisi($id_kompetisi);
		$data['title'] = $tit['judul_kompetisi'].' |';
		$this->defaultdisplay('public/kompetisi', $data);
		$this->footerdisplay();
	}
}