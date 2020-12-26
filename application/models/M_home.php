<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_home extends CI_Model{
	public function all_menu($id_usermenu){
		$this->db->where('id_usermenu',$id_usermenu);
		return $this->db->get('sis_user_menu')->row();
	}
	public function allMenu(){
		return $this->db->get('sis_user_menu')->result();
	}
	public function deleteMenu($id_usermenu){
		$this->db->where('id_usermenu',$id_usermenu);
		$this->db->delete('sis_user_menu');
		$this->session->set_flashdata('DeleteSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-danger">Data Deleted Successfully </h4></center>
			   	</div></div>');
	}
	public function addMenu(){
		$data = array(
			"id_usermenu" => $this->input->post('id_usermenu'),
			"i_user" => $this->input->post('i_user'),
			"i_menu" => $this->input->post('i_menu'),
			"menuname" => $this->input->post('menuname'),
			"f_menulink" => $this->input->post('f_menulink'),
			"f_status" => $this->input->post('f_status'),
			"f_nav" => $this->input->post('f_nav'),
			"icon" => $this->input->post('f_icon'),
		);
		
		$this->db->insert('sis_user_menu', $data);
		$this->session->set_flashdata('AddSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-info">Data Added Successfully </h4></center>
			   	</div></div>');
	}

	public function cek_user($username,$userpass){
		$this->db->where('e_username', $username);
		$this->db->where('e_password', $userpass);
		$this->db->where('f_status','1');
		$query = $this->db->get('sis_user');
		
		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	public function cek_menu($username){
		$this->db->where('i_user', $username);
		$this->db->where('f_status', '1');
		$this->db->where('f_nav', '0');
		$query = $this->db->get('sis_user_menu');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function cek_submenu($username,$imenu){
		$this->db->where('i_user', $username);
		$this->db->where('f_status', '1');
		$this->db->where('f_nav', '1');
		$this->db->where('i_menu', $imenu);
		$query = $this->db->get('sis_user_menu');

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

		public function updateMenu	($id_usermenu){
		$data = array(
					"id_usermenu" => $this->input->post('id_usermenu'),
					"i_user" => $this->input->post('i_user'),
					"i_menu" => $this->input->post('i_menu'),
					"menuname" => $this->input->post('menuname'),
					"f_menulink" => $this->input->post('f_menulink'),
					"f_status" => $this->input->post('f_status'),
					"f_nav" => $this->input->post('f_nav'),
				);
				$this->db->where('id_usermenu', $id_usermenu);
				$this->db->update('sis_user_menu', $data);
				$this->session->set_flashdata('updateSuccess','
						<div id="infoModal" class="modal fade" role="dialog">
					    <div class="modal-dialog modal-sm">
					    <center> <h4 class="alert alert-success">Data Changed Successfully </h4></center>
					   	</div></div>');
			}
	public function totalPegawai(){
	 	return $this->db->get('inv_pegawai');
	 }
	 public function totalPetugas(){
	 	return $this->db->get('inv_petugas');
	 }
	 public function totalBarang(){
	 	return $this->db->get('inv_barang');
	 }
	 public function totalRuangan(){
	 	return $this->db->get('inv_ruangan');
	 }
	 public function totalMenu(){
	 	return $this->db->get('sis_user_menu');
	 }
	 public function totalPinjam(){
	 	return $this->db->get('inv_peminjaman');
	 }
	 public function totalKembali(){
	 	return $this->db->get('inv_pengembalian');
	 }
	 public function totalLogin(){
	 	return $this->db->get('sis_user_log');
	 }
}