<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inventaris extends CI_Model{

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
		$data = array(
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password'),
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
		$data = array(
			"id_petugas" => $this->input->post('id_petugas'),
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password'),
			"nama_petugas" => $this->input->post('nama_petugas'),
			"level" => $this->input->post('level'),
			
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
	public function getReportPinjam($kode_pinjam){
		$this->db->select('kode_pinjam,inv_peminjaman.nip,nama_pegawai,alamat,nomor_telepon,tanggal_pinjam,inv_peminjaman.kode_barang,nama_barang,kondisi_barang,id_jenis,jumlah,inv_peminjaman.id_petugas,nama_petugas,jumlah_pinjam');
		$this->db->from('inv_peminjaman');
		$this->db->where('kode_pinjam',$kode_pinjam);
		$this->db->join('inv_petugas','inv_peminjaman.id_petugas = inv_petugas.id_petugas');
		$this->db->join('inv_pegawai','inv_peminjaman.nip = inv_pegawai.nip');
		$this->db->join('inv_barang','inv_peminjaman.kode_barang = inv_barang.kode_barang');
		return $this->db->get()->row();
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
	public function searchPinjaman($tanggal1, $tanggal2)
    {
    	$this->db->select('kode_pinjam,inv_peminjaman.nip,nama_pegawai,alamat,nomor_telepon,tanggal_pinjam,inv_peminjaman.kode_barang,nama_barang,kondisi_barang,id_jenis,jumlah,inv_peminjaman.id_petugas,nama_petugas,jumlah_pinjam');
    	$this->db->from('inv_peminjaman');
    	$this->db->join('inv_petugas','inv_peminjaman.id_petugas = inv_petugas.id_petugas');
		$this->db->join('inv_pegawai','inv_peminjaman.nip = inv_pegawai.nip');
		$this->db->join('inv_barang','inv_peminjaman.kode_barang = inv_barang.kode_barang');
    	$this->db->where("tanggal_pinjam BETWEEN'{$tanggal1}' AND '{$tanggal2}'");
    	return $query = $this->db->get();


        // return $this->db->query("SELECT *  
        //                          FROM inv_peminjaman 
        //                          WHERE tanggal_pinjam BETWEEN '$tanggal1' AND '$tanggal2' ");
    }   
    public function searchPengembalian($tanggal1, $tanggal2)
    {
        return $this->db->query("SELECT *  
                                 FROM inv_pengembalian
                                 WHERE tanggal_pengembalian 
                                 BETWEEN '$tanggal1' AND '$tanggal2' ");
    }   
	
}

