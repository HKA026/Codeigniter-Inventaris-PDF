<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataRuangan extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_home');
		$this->load->model('M_data','mi');

	}
	
	public function index(){		
		if($this->session->userdata('is_login')!='logged_in'){
			redirect('Login');
		} 
		else{	
				$data['dp'] = $this->mi->dataRuangan();
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/ruangan/dataRuangan',$data);
				$this->load->view('layout/footer',$data);
			}
		}
	public function Delete($kode_Ruangan){
				$this->mi->deleteRuangan($kode_Ruangan);
				redirect('DataRuangan');
	}
	public function addDataRuangan(){
				$this->mi->addRuangan();
				redirect('DataRuangan');
	}
	public function updateRuangan($kode_Ruangan){
				$detail = $this->mi->detailRuangan($kode_Ruangan);
				$dtls['detail'] = $detail;
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/ruangan/updateRuangan',$dtls);
				$this->load->view('layout/footer',$data);
		}
	public function updateDataRuangan($kode_Ruangan){
				$this->mi->updateDataRuangan($kode_Ruangan);
				redirect('DataRuangan');
	}
}
