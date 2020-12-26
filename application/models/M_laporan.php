<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model{

	public function searchPinjaman($tanggal1, $tanggal2)
    {
    	$this->db->select('kode_pinjam,tanggal_pinjam,inv_peminjaman.kode_barang,nama_barang,nama_petugas,nama_pegawai,jumlah_pinjam');
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
    	$this->db->select('kode_pengembalian,tanggal_pengembalian,inv_Pengembalian.kode_barang,nama_barang,nama_pegawai,nama_petugas,jumlah_pengembalian');
		$this->db->from('inv_pengembalian');
		$this->db->join('inv_petugas','inv_pengembalian.id_petugas = inv_petugas.id_petugas');
		$this->db->join('inv_pegawai','inv_pengembalian.nip = inv_pegawai.nip');
		$this->db->join('inv_barang','inv_pengembalian.kode_barang = inv_barang.kode_barang');
    	$this->db->where("tanggal_pengembalian BETWEEN'{$tanggal1}' AND '{$tanggal2}'");
    	return $query = $this->db->get();
    }   
}