<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawai extends CI_Controller {
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
				$data['dp'] = $this->mi->dataPegawai();
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/pegawai/dataPegawai',$data);
				$this->load->view('layout/footer',$data);
			}
		}
	public function Delete($nip){
				$this->mi->deletePegawai($nip);
				redirect('DataPegawai');
	}
	public function addDataPegawai(){
				$this->mi->addPegawai();
				redirect('DataPegawai');
	}
	public function updatePegawai($nip){
				$detail = $this->mi->detail_data($nip);
				$dtls['detail'] = $detail;
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/pegawai/updatePegawai',$dtls);
				$this->load->view('layout/footer',$data);
		}
	public function detailPegawai($nip){
				$detail = $this->mi->detail_data($nip);
				$dtls['detail'] = $detail;
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/pegawai/detailPegawai',$dtls);
				$this->load->view('layout/footer',$data);
		}
	public function updateDataPegawai($nip){
				$this->mi->updateDataPegawai($nip);
				redirect('DataPegawai');
	}
}
