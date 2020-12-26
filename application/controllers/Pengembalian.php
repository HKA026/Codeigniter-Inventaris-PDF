<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_home');
		$this->load->model('M_transaksi','mt');

	}
	
	public function index(){		
		if($this->session->userdata('is_login')!='logged_in'){
			redirect('Auth');
		} 
		else{	 
				$dtls['kobar'] = $this->mt->getKobar();
				$dtls['nips'] = $this->mt->getNip();
				$dtls['idp'] = $this->mt->getIdPetugas();
				$dtls['dp'] = $this->mt->getInfoPengembalian();
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('transaksi/pengembalian',$dtls);
				$this->load->view('layout/footer',$data);
			}
		}
		public function addDataPengembalian(){
				$this->mt->addPengembalian();
				redirect('Pengembalian');
	}
	public function Report($kode_pengembalian){
	$dtls['kp'] = $this->mt->getReportKembali($kode_pengembalian);
    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-pengembalian.pdf";
    $this->pdf->load_view('transaksi/print_pengembalian',$dtls);
	}
	public function ReportAll(){
	$dtls['dp'] = $this->mt->getInfoPengembalian();
    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'landscape');
    $this->pdf->filename = "laporan-peminjman.pdf";
    $this->pdf->load_view('transaksi/reportallpengembalian',$dtls);
	}
}
