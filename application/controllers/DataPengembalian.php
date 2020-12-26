<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPengembalian extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_home','m');
		$this->load->model('M_laporan');
	}

	function index(){		
		if($this->session->userdata('is_login')!='logged_in'){
			redirect('Login');
		} 
		else{	
				$data['main_menu'] = $this->m->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('laporan/pengembalian',$data);
				$this->load->view('layout/footer',$data);
			}
		}
	public function cari_Pengembalian()
    {
        
        $tanggal1 = $this->input->post('tanggal1');
        $tanggal2 = $this->input->post('tanggal2');
        $data['time1'] = $tanggal1;
        $data['time2'] = $tanggal2;
        $data['hasil_search'] = $this->M_laporan->searchPengembalian($tanggal1,$tanggal2);
        $this->load->view('laporan/viewpengembalian', $data);
    }
    public function cetakPDF()
    {
    	$this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'landscape');
	    $this->pdf->filename = "laporan-pengembalian.pdf";
        $tanggal1 = $this->input->post('tanggal1');
        $tanggal2 = $this->input->post('tanggal2');
        $data['time1'] = $tanggal1;
        $data['time2'] = $tanggal2;
        $object = new stdClass();
        $object->kode_kembali = $this->input->post('kode_pengembalian');
        $object->tanggal_kembali = $this->input->post('tanggal_pengembalian');
        $object->kode_barang = $this->input->post('kode_barang');
        $object->nama_barang = $this->input->post('nama_barang');
        $object->nama_pegawai = $this->input->post('nama_pegawai');
        $object->nama_petugas = $this->input->post('nama_petugas');
        $object->jumlah_kembali = $this->input->post('jumlah_pengembalian');
        $data['object'] = $object;
        // var_dump($data); 
        $this->pdf->load_view('laporan/printpengembalian', $data);
    }
}
