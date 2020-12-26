<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SetMenu extends CI_Controller {
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
				$dtls['menu'] = $this->M_home->allMenu();
				$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
				$this->load->view('layout/header',$data);
				$this->load->view('admin/setMenu',$dtls);
				$this->load->view('layout/footer',$data);
			}
		}
	public function editMenu($id_usermenu){

		$data['main_menu'] = $this->M_home->cek_menu($this->session->userdata('username'));
		$dtls['all_menu'] = $this->M_home->all_menu($id_usermenu);
		$this->load->view('layout/header',$data);
		$this->load->view('admin/editMenu',$dtls);
		$this->load->view('layout/footer',$data);
	}
	public function addMenu(){
		$this->M_home->addMenu();
		redirect('SetMenu');
	}
	public function updateMenu($id_usermenu){
				$this->M_home->updateMenu($id_usermenu);
				redirect('SetMenu');
	}
	public function Delete($id_usermenu){
		$this->M_home->deleteMenu($id_usermenu);
		redirect('SetMenu');
	}
}