<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogUser extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_home');
		$this->load->model('M_logger');
	}

	function index(){		
		if($this->session->userdata('username')!='admin'){
			
			$this->session->set_flashdata('Info','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-danger">Maaf Menu ini Khusus Admin Tampilan Hanyalah Pemanis</h4></center>
			   	</div></div>');
			redirect('Home');
		} 
		else{
				$data['dp'] = $this->M_logger->dataLogUser();	
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('admin/loguser',$data);
				$this->load->view('layout/footer',$data);
			}
		}
}