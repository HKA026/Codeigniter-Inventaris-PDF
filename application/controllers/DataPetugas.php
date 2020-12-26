<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPetugas extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_home');
		$this->load->model('M_data','mi');

	}
	
	public function index(){		
		if($this->session->userdata('username')!='admin'){
			
			$this->session->set_flashdata('Info','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-danger">Maaf Menu ini Khusus Admin Tampilan Hanyalah Pemanis</h4></center>
			   	</div></div>');
			redirect('Home');
		} 
		else{	
				$data['dp'] = $this->mi->dataPetugas();
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/petugas/dataPetugas',$data);
				$this->load->view('layout/footer',$data);
			}
		}
	public function Delete($id_petugas){
				$this->mi->deletePetugas($id_petugas);
				redirect('DataPetugas');
	}
	public function addDataPetugas(){
				$this->mi->addPetugas();
				redirect('DataPetugas');
	}
	public function updatePetugas($id_petugas){
				$detail = $this->mi->detailPetugas($id_petugas);
				$dtls['detail'] = $detail;
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/petugas/updatePetugas',$dtls);
				$this->load->view('layout/footer',$data);
		}
	public function detailPetugas($id_petugas){
				$detail = $this->mi->detailPetugas($id_petugas);
				$dtls['detail'] = $detail;
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('data/petugas/detailPetugas',$dtls);
				$this->load->view('layout/footer',$data);
		}
	public function updateDataPetugas($id_petugas){
				$this->mi->updateDataPetugas($id_petugas);
				redirect('DataPetugas');
	}
}
