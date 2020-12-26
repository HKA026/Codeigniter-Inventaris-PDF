<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarang extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_home');
		$this->load->model('M_data','mi');
		$this->load->library('form_validation');

	}

	
	public function index(){		
		if($this->session->userdata('is_login')!='logged_in'){
			redirect('Login');
		} 
		else{	
				$data['kore'] = $this->mi->getKore();
				$data['dp'] = $this->mi->dataBarang();
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/barang/dataBarang',$data);
				$this->load->view('layout/footer',$data);
			}
		}
	public function Delete($kode_barang){
				$this->mi->deleteBarang($kode_barang);
				redirect('DataBarang');
	}
	public function addDataBarang(){
				$this->mi->addBarang();
				redirect('DataBarang');
	}
	public function updateBarang($kode_barang){
				$data['kore'] = $this->mi->getKore();
				$detail = $this->mi->detailBarang($kode_barang);
				$dtls['detail'] = $detail;
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/barang/updateBarang',$dtls);
				$this->load->view('layout/footer',$data);
		}
	public function detailBarang($kode_barang){
				$detail = $this->mi->detailBarang($kode_barang);
				$dtls['detail'] = $detail;
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/barang/detailBarang',$dtls);
				$this->load->view('layout/footer',$data);
		}
	public function updateDataBarang($kode_barang){
				$this->mi->updateDataBarang($kode_barang);
				redirect('DataBarang');
	}
}
