<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//memanggil file base untuk melakukan penurunan
require_once 'application/controllers/base/base.php';


class jelajah extends base {
	//membuat construktor
	public function __construct() {
		parent::__construct();
	}

	public function index() {
	
		$data['title'] = "Feed | ";		
		$data['kategori'] = $this->m_kompetisi->list_kategori(); //menampilkan kategori di top menu

		//pagination set up
		$this->load->library('pagination');
		$config['base_url'] = site_url('start/kompetisi/jelajah');
		$config['total_rows'] = $this->m_kompetisi->count_kompetisi();
		$config['per_page'] = 15;
		$config['uri_segment'] = 4;
		$config['num_link'] = 5;
		$uri = $this->uri->segment(4);
		$this->pagination->initialize($config); 		
		if(!$uri) {
			$uri = 0;
		}
		if($config['total_rows'] < 15) {
			$data['page'] = 1;
		} else {
			$data['page'] = $this->pagination->create_links();
		}
		//end of pagination set up
		
		if(isset($_GET['kat'])) { //jika melakukan sortir
			$kat = $_GET['kat']; //mengambil data kategori
			$month= $_GET['bln']; //mengambil data bulan
			$year = $_GET['thn']; //mengambil data tahun

			$params = array($kat, $kat, $month, $year); //data untuk sortir
			$data['list'] = $this->m_kompetisi->sort_jelajah($params); //fungsi sorting kompetisi
			

		} else if(isset($_GET['q'])) { //jika melakukan search
			$q = $_GET['q'];
			$data['list'] = $this->m_kompetisi->search_jelajah($q); //kompetisi yang ditampilkan
		} else {
			$data['list'] = $this->m_kompetisi->list_kompetisi($config['per_page'],$uri); //kompetisi yang ditampilkan
		}

		$this->defaultdisplay('public/jelajah', $data);

	}
}