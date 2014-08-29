<?php

if(!defined('BASEPATH') ) exit ('No direct sript allowed');

//base class
class base extends CI_Controller {
	//constructor
	public function __construct(){
		parent::__construct();
		//auto load model
		$this->load->model('m_request');
		$this->load->model('m_kompetisi');
		$this->load->model('m_user');
		$this->load->model('m_moderator');
		$this->load->model('m_post');
		$this->load->model('m_super');		
	}

	public function defaultdisplay( $view_anak = '',$data = '' ) {
		$data['template_anak'] = $view_anak;
		$this->load->view('base/defaultbase', $data);
	}

	public function superdisplay( $view_anak = '',$data = ''  ){
		$data['template_anak'] = $view_anak;
		$this->load->view('base/superbase', $data);
		$this->load->view('super/footer');
	}

	public function footerdisplay(){		
		$this->load->view('base/defaultbase_footer');
	}
}