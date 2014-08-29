<?php
//lokasi untuk dashboard  member
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//memanggil file base untuk melakukan penurunan
require_once 'application/controllers/base/base.php';


class dashboard extends base {

	public function __construct() {
		parent::__construct();
		//jika tidak login
		if(empty($this->session->userdata('id_user'))) {
			redirect(site_url());
		}
	}

	public function index() {
		
		$id = $this->session->userdata('id_user'); //mengambil data id user
		$data['title'] = 'Kompetisi diikuti | ';
		//pagination set up
		$this->load->library('pagination');
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$config['num_link'] = 4;	
		$config['page_query_string'] = TRUE;
		$config['base_url'] = site_url().'/dashboard?ki='.$this->input->get('ki',TRUE);
		$config['total_rows'] = $this->m_kompetisi->count_diikuti_kompetisi($id); 
		$this->pagination->initialize($config); 

		if(isset($_GET['per_page'])) {
			if($_GET['per_page'] == '') { 
				$uri = 0;
			} else {
				$uri = $_GET['per_page'];
			}
		} else {
			$uri = 0;
		}

		if($config['total_rows'] < 20) {
			$data['page'] = 1;
		} else {
			$data['page'] = $this->pagination->create_links();
		}
		//end of pagination set up
		//header view
		$data['ikut'] = $this->m_kompetisi->count_diikuti_kompetisi($id);
		$data['tandai'] = $this->m_kompetisi->count_tandai_kompetisi($id);
		$data['kompetisiku'] = $this->m_kompetisi->count_kompetisiku($id);
		$data['total'] = $this->m_kompetisi->count_diikuti_kompetisi($id);
		$data['view'] = $this->m_kompetisi->show_kompetisi_gabung($id, $config['per_page'],$uri);
		$this->defaultdisplay('dashboard/home', $data);
		$this->footerdisplay();
	}

	public function ditandai(){
		$id = $this->session->userdata('id_user'); //mengambil data id user
		$data['title'] = 'Kompetisi diikuti | ';	
		//pagination set up
		$this->load->library('pagination');
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$config['num_link'] = 4;	
		$config['page_query_string'] = TRUE;
		$config['base_url'] = site_url().'/dashboard/ditandai?ki='.$this->input->get('ki',TRUE);
		$config['total_rows'] = $this->m_kompetisi->count_tandai_kompetisi($id); 
		
		$this->pagination->initialize($config); 

		if(isset($_GET['per_page'])) {
			if($_GET['per_page'] == '') { 
				$uri = 0;
			} else {
				$uri = $_GET['per_page'];
			}
		} else {
			$uri = 0;
		}

		if($config['total_rows'] < 20) {
			$data['page'] = 1;
		} else {
			$data['page'] = $this->pagination->create_links();
		}
		//end of pagination set up	
		//header view
		$data['ikut'] = $this->m_kompetisi->count_diikuti_kompetisi($id);
		$data['tandai'] = $this->m_kompetisi->count_tandai_kompetisi($id);
		$data['kompetisiku'] = $this->m_kompetisi->count_kompetisiku($id);
		$data['total'] = $this->m_kompetisi->count_tandai_kompetisi($id); 
		$data['view'] = $this->m_kompetisi->show_kompetisi_diikuti($id,$config['per_page'],$uri);
		$this->defaultdisplay('dashboard/ditandai', $data);
		$this->footerdisplay();
	}

	public function saya(){
		$id = $this->session->userdata('id_user'); //mengambil data id user
		$data['title'] = 'Kompetisi Upload Oleh Saya | ';	
		//pagination set up
		$this->load->library('pagination');
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$config['num_link'] = 4;	
		$config['page_query_string'] = TRUE;
		$config['base_url'] = site_url().'/dashboard/saya?ki='.$this->input->get('ki',TRUE);
		$config['total_rows'] = $this->m_kompetisi->count_kompetisiku($id); 
		
		$this->pagination->initialize($config); 

		if(isset($_GET['per_page'])) {
			if($_GET['per_page'] == '') { 
				$uri = 0;
			} else {
				$uri = $_GET['per_page'];
			}
		} else {
			$uri = 0;
		}

		if($config['total_rows'] < 20) {
			$data['page'] = 1;
		} else {
			$data['page'] = $this->pagination->create_links();
		}
		//end of pagination set up
		$data['ikut'] = $this->m_kompetisi->count_diikuti_kompetisi($id);
		$data['tandai'] = $this->m_kompetisi->count_tandai_kompetisi($id);
		$data['kompetisiku'] = $this->m_kompetisi->count_kompetisiku($id);	
		$data['total'] = $this->m_kompetisi->count_kompetisiku($id); 
		$data['view'] = $this->m_kompetisi->get_competition_by_id_user($id,$config['per_page'],$uri);
		$this->defaultdisplay('dashboard/saya', $data);
		$this->footerdisplay();
	}

	public function pasang(){
		
		//jika by tidak sama dengan username, maka dicancel
		if( isset($_GET['by']) && $_GET['by'] == $this->session->userdata('username')) {			
			$data['kat'] = $this->m_kompetisi->show_kat();
			$data['main_kat'] = $this->m_kompetisi->show_main_kat_by_id();
			$data['title'] = 'Pasang | ';
			$id = $this->session->userdata('id_user');
			$data['ikut'] = $this->m_kompetisi->count_diikuti_kompetisi($id);
			$data['tandai'] = $this->m_kompetisi->count_tandai_kompetisi($id);
			$data['kompetisiku'] = $this->m_kompetisi->count_kompetisiku($id);
			$data['total'] = $this->m_kompetisi->count_diikuti_kompetisi($id);
			$this->defaultdisplay('dashboard/pasang', $data);
			$this->footerdisplay();
		//khusus untuk admin
		} else {
			redirect(site_url('super/super/dashboard')); //kembali ke dashboard
		}
	}

	public function edit(){
		//id kompetisi
		$data['title'] = "Edit Kompetisi | ";
		$dec = base64_decode(base64_decode($_GET['id']));
		$id = str_replace('', '=', $dec);
		$data['view'] = $this->m_kompetisi->get_competition_by_id_kompetisi($id);
		$id_main_kat = $data['view']['id_main_kat'];
		$data['main_kat'] = $this->m_kompetisi->show_main_kat_by_id();
		$data['sub_kat'] = $this->m_kompetisi->show_sub_kat_by_id($id_main_kat);
		$data['view'] = $this->m_kompetisi->get_competition_by_id_kompetisi($id);
		$this->defaultdisplay('dashboard/edit_kompetisi', $data);
		$this->footerdisplay();	
	}

	public function profile(){ //halaman untuk edit data user
		$data['title'] = "Edit Profile | ";
		$id = $this->session->userdata('id_user');
		$data['view'] = $this->m_user->show_user($id);
		$this->defaultdisplay('dashboard/profile', $data);
		$this->footerdisplay();

	}

	//butotn request kompetisi

}
