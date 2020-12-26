<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{

	public function dataPegawai(){
		return $this->db->get('inv_pegawai')->result();
	}
	public function deletePegawai($nip){
		$this->db->where('nip', $nip);
		$this->db->delete('inv_pegawai');
		$this->session->set_flashdata('DeleteSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-danger">Data Deleted Successfully </h4></center>
			   	</div></div>');
	}
	public function addPegawai(){
		$data = array(
			"nip" => $this->input->post('nip'),
			"nama_pegawai" => $this->input->post('namap'),
			"alamat" => $this->input->post('alamat'),
			"nomor_telepon" => $this->input->post('telp')
		);
		
		$this->db->insert('inv_pegawai', $data);
		$this->session->set_flashdata('AddSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-info">Data Added Successfully </h4></center>
			   	</div></div>');
	}
	public function updateDataPegawai($nip){
		$data = array(
			"nip" => $this->input->post('nip'),
			"nama_pegawai" => $this->input->post('namap'),
			"alamat" => $this->input->post('alamat'),
			"nomor_telepon" => $this->input->post('telp')
		);
		$this->db->where('nip', $nip);
		$this->db->update('inv_pegawai', $data);
		$this->session->set_flashdata('updateSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-success">Data Changed Successfully </h4></center>
			   	</div></div>');
	}
	public function detail_data($nip){
		$this->db->where('nip', $nip);
		return $this->db->get('inv_pegawai')->row();
		}
	public function dataPetugas(){
		return $this->db->get('inv_petugas')->result();
	}
	public function addPetugas(){
		$username= $this->input->post('username');
		$us = strtolower($username);
		$pw= $this->input->post('password');
		$data = array(
			"username" => $us,
			"password" => md5($pw),
			"nama_petugas" => $this->input->post('nama_petugas'),
			"level" => $this->input->post('level')
		);
		
		$this->db->insert('inv_petugas', $data);
		$this->session->set_flashdata('AddSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-info">Data Added Successfully </h4></center>
			   	</div></div>');
	}
	public function deletePetugas($id_petugas){
		$this->db->where('id_petugas', $id_petugas);
		$this->db->delete('inv_petugas');
		$this->session->set_flashdata('DeleteSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-danger">Data Deleted Successfully </h4></center>
			   	</div></div>');
	}
	public function detailPetugas($id_petugas){
		$this->db->where('id_petugas', $id_petugas);
		return $this->db->get('inv_petugas')->row();
		}
	public function updateDataPetugas($id_petugas){
		$username= $this->input->post('username');
		$us = strtolower($username);
		$pw= $this->input->post('password');
		$data = array(
			"id_petugas" => $this->input->post('id_petugas'),
			"username" => $us,
			"password" => md5($pw),
			"nama_petugas" => $this->input->post('nama_petugas'),
			"level" => $this->input->post('level'),
			"status" => $this->input->post('status'),
			
		);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->update('inv_petugas', $data);
		$this->session->set_flashdata('updateSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-success">Data Changed Successfully </h4></center>
			   	</div></div>');
	}

		
	
	public function dataBarang(){

		$this->db->select('kode_barang,nama_barang,kondisi_barang,id_jenis,jumlah,inv_ruangan.nama_ruangan');
		$this->db->from('inv_barang');
		$this->db->join('inv_ruangan','inv_barang.kode_ruangan=inv_ruangan.kode_ruangan');
		return $this->db->get()->result();
	}
	public function deleteBarang($kode_barang){
		$this->db->where('kode_barang', $kode_barang);
		$this->db->delete('inv_barang');
		$this->session->set_flashdata('DeleteSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-danger">Data Deleted Successfully </h4></center>
			   	</div></div>');
	}
	public function detailBarang($kode_barang){
		$this->db->where('kode_barang', $kode_barang);
		return $this->db->get('inv_barang')->row();
		}
	public function updateDataBarang($kode_barang){
		$data = array(
			"kode_barang" => $this->input->post('kode_barang'),
			"nama_barang" => $this->input->post('nama_barang'),
			"kondisi_barang" => $this->input->post('kndisi_bar'),
			"id_jenis" => $this->input->post('id_jenis'),
			"jumlah" => $this->input->post('jumlah'),
			"kode_ruangan" => $this->input->post('kode_ruangan'),
			
		);
		$this->db->where('kode_barang', $kode_barang);
		$this->db->update('inv_barang', $data);
		$this->session->set_flashdata('updateSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-success">Data Changed Successfully </h4></center>
			   	</div></div>');
	}
	public function addBarang(){
		$data = array(
			"kode_barang" => $this->input->post('kode_barang'),
			"nama_barang" => $this->input->post('nama_barang'),
			"kondisi_barang" => $this->input->post('kondisi_barang'),
			"id_jenis" => $this->input->post('id_jenis'),
			"jumlah" => $this->input->post('jumlah'),
			"kode_ruangan" => $this->input->post('kode_ruangan'),
			
		);
		$this->db->insert('inv_barang', $data);
		$this->session->set_flashdata('AddSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-info">Data Added Successfully </h4></center>
			   	</div></div>');
	}
	
	public function dataRuangan(){
		return $this->db->get('inv_ruangan')->result();
	}
	public function addRuangan(){
		$data = array(
			"kode_ruangan" => $this->input->post('kode_ruangan'),
			"nama_ruangan" => $this->input->post('nama_ruangan'),
		);
		
		$this->db->insert('inv_ruangan', $data);
		$this->session->set_flashdata('AddSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-info">Data Added Successfully </h4></center>
			   	</div></div>');
	}
	public function deleteRuangan($kode_ruangan){
		$this->db->where('kode_ruangan', $kode_ruangan);
		$this->db->delete('inv_ruangan');
		$this->session->set_flashdata('DeleteSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-danger">Data Deleted Successfully </h4></center>
			   	</div></div>');
	}
	public function detailRuangan($kode_ruangan){
		$this->db->where('kode_ruangan', $kode_ruangan);
		return $this->db->get('inv_ruangan')->row();
		}
	public function updateDataruangan($kode_ruangan){
		$data = array(
			"kode_ruangan" => $this->input->post('kode_ruangan'),
			"nama_ruangan" => $this->input->post('nama_ruangan'),
			
		);
		$this->db->where('kode_ruangan', $kode_ruangan);
		$this->db->update('inv_ruangan', $data);
		$this->session->set_flashdata('updateSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-success">Data Changed Successfully </h4></center>
			   	</div></div>');
	}
	
}

