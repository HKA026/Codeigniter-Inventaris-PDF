	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model{

	public function getInfoPeminjaman(){
	$this->db->select('kode_pinjam,tanggal_pinjam,inv_barang.kode_barang,nama_barang,nama_pegawai,nama_petugas,jumlah_pinjam');
	$this->db->from('inv_peminjaman');
	$this->db->join('inv_petugas','inv_peminjaman.id_petugas = inv_petugas.id_petugas');
	$this->db->join('inv_barang','inv_peminjaman.kode_barang = inv_barang.kode_barang');
	$this->db->join('inv_pegawai','inv_peminjaman.nip = inv_pegawai.nip');
	$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
  }
  public function addPeminjaman(){
		$data = array(
			"tanggal_pinjam" => $this->input->post('tanggal_pinjam'),
			"kode_barang" => $this->input->post('kode_barang'),
			"nip" => $this->input->post('nip'),
			"id_petugas" => $this->input->post('id_petugas'),
			"jumlah_pinjam" => $this->input->post('jumlah_pinjam'),
		);
		
		$this->db->insert('inv_peminjaman', $data);
		$this->session->set_flashdata('AddSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-info">Data Added Successfully </h4></center>
			   	</div></div>');
	}

	public function deletePinjam($kode_pinjam){
		$this->db->where('kode_pinjam', $kode_pinjam);
		$this->db->delete('inv_peminjaman');
		$this->session->set_flashdata('DeleteSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-danger">Data Deleted Successfully </h4></center>
			   	</div></div>');
	}
	public function getReportPinjam($kode_pinjam){
		$this->db->select('kode_pinjam,inv_peminjaman.nip,nama_pegawai,alamat,nomor_telepon,tanggal_pinjam,inv_peminjaman.kode_barang,nama_barang,kondisi_barang,id_jenis,jumlah,inv_peminjaman.id_petugas,nama_petugas,jumlah_pinjam');
		$this->db->from('inv_peminjaman');
		$this->db->where('kode_pinjam',$kode_pinjam);
		$this->db->join('inv_petugas','inv_peminjaman.id_petugas = inv_petugas.id_petugas');
		$this->db->join('inv_pegawai','inv_peminjaman.nip = inv_pegawai.nip');
		$this->db->join('inv_barang','inv_peminjaman.kode_barang = inv_barang.kode_barang');
		return $this->db->get()->row();
	}





	public function getKobar(){
		$query = $this->db->get('inv_barang');
		return $query->result();
	}
	public function getIdPetugas(){
		$query = $this->db->get('inv_petugas');
		return $query->result();

	}
	public function getNip(){
		$query = $this->db->get('inv_pegawai');
		return $query->result();
	}
	public function getKore(){
		$query = $this->db->get('inv_ruangan');
		return $query->result();
	}
	public function getInfoPengembalian(){
	$this->db->select('kode_pengembalian,tanggal_pengembalian,inv_barang.kode_barang,nama_barang,nama_pegawai,nama_petugas,jumlah_pengembalian');
	$this->db->from('inv_Pengembalian');
	$this->db->join('inv_petugas','inv_Pengembalian.id_petugas = inv_petugas.id_petugas');
	$this->db->join('inv_barang','inv_Pengembalian.kode_barang = inv_barang.kode_barang');
	$this->db->join('inv_pegawai','inv_Pengembalian.nip = inv_pegawai.nip');
	$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
  }
  public function addPengembalian(){
		$data = array(
			"tanggal_pengembalian" => $this->input->post('tgl_kembali'),
			"kode_barang" => $this->input->post('kode_barang'),
			"nip" => $this->input->post('nip'),
			"id_petugas" => $this->input->post('id_petugas'),
			"jumlah_pengembalian" => $this->input->post('jml_kembali'),
		);
		
		$this->db->insert('inv_Pengembalian', $data);
		$this->session->set_flashdata('AddSuccess','
				<div id="infoModal" class="modal fade" role="dialog">
			    <div class="modal-dialog modal-sm">
			    <center> <h4 class="alert alert-info">Data Added Successfully </h4></center>
			   	</div></div>');
	}
	public function getReportKembali($kode_pengembalian){
		$this->db->select('kode_pengembalian,inv_pengembalian.nip,nama_pegawai,alamat,nomor_telepon,tanggal_pengembalian,inv_pengembalian.kode_barang,nama_barang,kondisi_barang,id_jenis,jumlah,inv_petugas.id_petugas,nama_petugas,jumlah_pengembalian');
		$this->db->from('inv_pengembalian');
		$this->db->where('kode_pengembalian',$kode_pengembalian);
		$this->db->join('inv_petugas','inv_pengembalian.id_petugas = inv_petugas.id_petugas');
		$this->db->join('inv_pegawai','inv_pengembalian.nip = inv_pegawai.nip');
		$this->db->join('inv_barang','inv_pengembalian.kode_barang = inv_barang.kode_barang');
		return $this->db->get()->row();
	}
}