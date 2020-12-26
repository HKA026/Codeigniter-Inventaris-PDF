<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
function __construct(){
		parent:: __construct();
		$this->load->model('M_home', 'h');
	}
	function index()
	{

		$this->load->view('auth/login');
	}
	public function login(){


		$username = $this->input->post('username');
		$ps = $this->input->post('password');
		$userpass = md5($ps);
		$result = $this->h->cek_user($username,$userpass);;
		if ($result != null || $result != '') {
			foreach ($result as $row) {
			 $iuser = $row->i_user;
			 $name = $row->e_username;
			 $pass = $row->e_password;
			 $nama = $row->nama;
			 $status = $row->f_status;
			 $iduser = $row->id_user;
		 }
			
				$data_session=array(
				'username'=>$iuser,
				'pass' =>$pass,
				'name'=>$name,
				'nama'=>$nama,
				'status'=>$status,
				'iduser'=>$iduser,
				'is_login'=>'logged_in'
				);

				$this->session->set_userdata($data_session);
				$this->load->model('m_logger');
				$id = $this->session->userdata('iduser');
				$ip_address = $this->input->ip_address();
				$pesan = 'user '.$username.' dengan Id '.$id.' berhasil Login';
				$waktu = date("Y-m-d H:i:s");
		        $this->m_logger->log_aktivitas($id, $ip_address, $waktu , $pesan );
		        $this->session->set_flashdata('Info','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-success">Login Sebagai '.$this->session->userdata('username').'  Successfully </h4></center>
			   	</div></div>');
				redirect('home');
		}else{
				$this->session->set_flashdata('WrongPassword','<div class="alert alert-danger alert-dismissible" data-noty><button type="button" class="close" data-dismiss="alert">&times;</button><b>Sorry </b>Your Account is Wrong!</div>');
				redirect('login');
		}
	}
	function end(){
				$this->load->model('m_logger');
				$username=$this->session->userdata('username');
				$id = $this->session->userdata('iduser');
				$ip_address = $this->input->ip_address();
				$pesan = 'user '.$username.' dengan Id '.$id.' berhasil Log out';
				$waktu = date("Y-m-d H:i:s");
		        $this->m_logger->log_aktivitas($id, $ip_address, $waktu , $pesan );
				$this->session->sess_destroy();
				redirect('login');

	}
}
