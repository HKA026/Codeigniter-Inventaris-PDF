<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_logger extends CI_Model{
public function log_aktivitas($id, $ip_address, $waktu, $pesan) {
		  $data['user_id'] 	= $id;
		  $data['ip_address']= $ip_address;
		  $data['waktu'] = $waktu;
		  $data['aktivitas'] = $pesan;
		  $this->db->insert('sis_user_log',$data);		
	}
public function dataLogUser(){

		$this->db->select("user_id, ip_address, waktu, aktivitas,e_username,i_user");
		$this->db->from("sis_user_log");
		$this->db->join('sis_user','sis_user_log.user_id=sis_user.id_user');
		$this->db->order_by('waktu', 'desc');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

}