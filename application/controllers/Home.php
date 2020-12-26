<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_home','m');
	}

	function index(){		
		if($this->session->userdata('is_login')!='logged_in'){
			redirect('Login');
		} 
		else{	
				$data['totalPegawai'] = $this->m->totalPegawai();
				$data['totalPetugas'] = $this->m->totalPetugas();
				$data['totalBarang'] = $this->m->totalBarang();
				$data['totalRuangan'] = $this->m->totalRuangan();
				$data['totalMenu'] = $this->m->totalMenu();
				$data['totalKembali'] = $this->m->totalKembali();
				$data['totalPinjam'] = $this->m->totalPinjam();
				$data['totalLogin'] = $this->m->totalLogin();
				$data['main_menu'] = $this->m->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('admin/index',$data);
				$this->load->view('layout/footer',$data);
			}
		}
}
