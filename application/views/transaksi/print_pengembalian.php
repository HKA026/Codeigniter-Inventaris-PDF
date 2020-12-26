<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengembalian Use DOMPDF</title>
<style>
body{
	margin: 10px;
}
h3{
	margin: 0px;
}
h1{
	text-align: center;
	margin: 0px;
}
p{
	margin: 0px;
	text-align: center;
}
pre{
	margin-top: 0px;
}

table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
    background:#00BFFF;
    color:#DCDCDC;
    font-weight:bold;
    font-size:24px;
}
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    vertical-align:top;
    padding:5px 10px;
}
/* Mengatur warna baris */
table tr {
    background:#F5FFFA;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:#F0F8FF;
}
</style>
</head>

<body>
	<h1>PT.Kasih Sayang</h1>
	<p>Jl. Bojong Tengah No.2 D, Cipedes, Kec. Cipedes, Tasikmalaya, Jawa Barat 46133</p>
	<p>Website : www.sisko.com Email : hafidstail026@gmail.com</p><hr>
<pre><p style="text-align: right;">Kode Pengembalian : <?php echo $kp->kode_pengembalian;?> | <?php echo $kp->tanggal_pengembalian;?></p>
</pre>
<pre>
	Detail Peminjam
</pre>
<table>
	<tr>
		<td colspan="3" style="text-align: center; font: bold;">DATA PEGAWAI</td>
	</tr>
	<tr>
		<td style="width: 120px;">NIP </td>
		<td> : </td>
		<td><?php echo $kp->nip;?></td>
	</tr>
	<tr>
		<td style="width: 120px;">Nama Pegawai </td>
		<td> : </td>
		<td><?php echo $kp->nama_pegawai;?></td>
	</tr>
	<tr>
		<td style="width: 120px;">Alamat </td>
		<td> : </td>
		<td><?php echo $kp->alamat;?></td>
	</tr>
	<tr>
		<td style="width: 120px;">Nomor Telpon </td>
		<td> : </td>
		<td><?php echo $kp->nomor_telepon;?></td>
	</tr>
</table><br><hr>
<pre>
	Detail Barang Yang Dikembalikan
</pre>
<table>
	<tr>
		<td colspan="3" style="text-align: center; font: bold;">DATA BARANG</td>
	</tr>
	<tr>
		<td style="width: 120px;">Kode Barang </td>
		<td> : </td>
		<td><?php echo $kp->kode_barang;?></td>
	</tr>
	<tr>
		<td style="width: 120px;">Nama Barang </td>
		<td> : </td>
		<td><?php echo $kp->nama_barang;?></td>
	</tr>
	<tr>
		<td style="width: 120px;">Kondisi Barang </td>
		<td> : </td>
		<td><?php echo $kp->kondisi_barang;?></td>
	</tr>
	<tr>
		<td style="width: 120px;">Jenis </td>
		<td> : </td>
		<td><?php echo $kp->id_jenis;?></td>
	</tr>
	<tr>
		<td style="width: 120px;">Jumlah Pengembalian</td>
		<td> : </td>
		<td><?php echo $kp->jumlah_pengembalian;?></td>
	</tr>
</table><hr>
<pre>
	Detail Petugas
</pre>
<table>
	<tr>
		<td colspan="3" style="text-align: center; font: bold;">DATA PETUGAS</td>
	</tr>
	<tr>
		<td style="width: 120px;">ID Petugas </td>
		<td> : </td>
		<td><?php echo $kp->id_petugas;?></td>
	</tr>
	<tr>
		<td style="width: 120px;">Nama Petugas </td>
		<td> : </td>
		<td><?php echo $kp->nama_petugas;?></td>
	</tr>
</table><hr>
<pre>
	<p align="center">TERIMA KASIH TELAH MENGGUNAKAN FITUR REPORT PDF KAMI</p>
</pre>
</body>
</html>

