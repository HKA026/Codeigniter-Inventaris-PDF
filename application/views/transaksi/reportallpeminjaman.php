<!DOCTYPE html>
<html>
<head>
    <title>Laporan Peminjaman Use DOMPDF</title>
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
    width: 100%;
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
    background:#00BFFF;
    color:white;
    font-weight:bold;
    font-size:12px;
}
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    vertical-align:top;
    padding:5px 10px;
}
/* Mengatur warna baris */
table tr {
    background:#ebe7e0;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:#bdb8ad;
}
</style>
</head>

<body>
    <h1>PT.Kasih Sayang</h1>
    <p>Jl. Bojong Tengah No.2 D, Cipedes, Kec. Cipedes, Tasikmalaya, Jawa Barat 46133</p>
    <p>Website : www.sisko.com Email : hafidstail026@gmail.com</p><hr>
    <pre style="float: left;">DATA LAPORAN PEMINJAMAN</pre><br><br>
<table>
    <thead align="center">
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Kode Peminjaman</th>
                    <th style="text-align: center;">Tanggal Peminjaman</th>
                    <th style="text-align: center;">Kode Barang</th>
                    <th style="text-align: center;">Nama Barang</th>
                    <th style="text-align: center;">Nama Pegawai</th>
                    <th style="text-align: center;">Nama Petugas</th>
                    <th style="text-align: center; width: 100px">Jumlah Pinjam</th>
                </tr>
    </thead>
    <tbody>
            <?php
            $n=1;
            if( ! empty($dp)){ 
                foreach($dp as $data){
                    echo "<tr>
                                    <td style='text-align: center;'>".$n."</td>
                                    <td style='text-align: center;'>".$data->kode_pinjam."</td>
                                    <td style='text-align: center;'>".$data->tanggal_pinjam."</td>
                                    <td style='text-align: center;'>".$data->kode_barang."</td>
                                    <td style='text-align: center;'>".$data->nama_barang."</td>
                                    <td style='text-align: center;'>".$data->nama_pegawai."</td>
                                    <td style='text-align: center;'>".$data->nama_petugas."</td>
                                    <td style='text-align: center;'>".$data->jumlah_pinjam."</td>
                    </tr>";$n++;
                }
            }else{ 
                echo "<tr><td align='center' colspan='10' style='text-align:center;'><div class='alert alert-danger'>Data Tidak Ada, coba cek kembali Syntax anda</div></td></tr>";
            }
            ?>
    </tbody>
    </table>
    <hr>
<pre>
    <p align="center">TERIMA KASIH TELAH MENGGUNAKAN FITUR REPORT PDF KAMI</p>
</pre>