<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_home');
		$this->load->model('M_transaksi','mt');

	}
	
	public function index(){		
		if($this->session->userdata('is_login')!='logged_in'){
			redirect('Login');
		} 
		else{	 
				$dtls['kobar'] = $this->mt->getKobar();
				$dtls['nips'] = $this->mt->getNip();
				$dtls['idp'] = $this->mt->getIdPetugas();
				$dtls['dp'] = $this->mt->getInfoPeminjaman();
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('transaksi/peminjaman',$dtls);
				$this->load->view('layout/footer',$data);
			}
		}
	public function addDataPeminjaman(){
				$this->mt->addPeminjaman();
				redirect('Peminjaman');
	}
	public function Report($kode_pinjam){
	$dtls['kp'] = $this->mt->getReportPinjam($kode_pinjam);
    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-peminjman.pdf";
    $this->pdf->load_view('transaksi/print_peminjaman',$dtls);
	}
	public function ReportAll(){
	$dtls['dp'] = $this->mt->getInfoPeminjaman();
    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'landscape');
    $this->pdf->filename = "laporan-peminjman.pdf";
    $this->pdf->load_view('transaksi/reportallpeminjaman',$dtls);
	}
}
