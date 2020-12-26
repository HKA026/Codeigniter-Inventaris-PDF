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
    <pre style="float: left;">DATA LAPORAN PEMINJAMAN</pre>
    <pre style="float: right;"><?php echo $time1;?> s.d <?php echo $time2;?></pre><br><br>
    <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                <table>
                    <thead align="center">
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Kode Peminjaman</th>
                            <th style="text-align: center;">Tanggal Peminjaman</th>
                            <th style="text-align: center;">Kode Barang</th>
                            <th style="text-align: center;">Nama Barang</th>
                            <th style="text-align: center;">Nama Pegawai</th>
                            <th style="text-align: center; width: 150px">Nama Petugas</th>
                            <th style="text-align: center; width: 90px">Jumlah Pinjam</th>
                        </tr>
                    </thead>
                    <?php for($i=0; $i<sizeof($object->kode_pinjam); $i++):?>
                    <tr>
                        <td style="text-align: center;"><?php echo $i+1;?></td>
                        <td style="text-align: center;"><?php echo $object->kode_pinjam[$i];?></td>
                        <td style="text-align: center;"><?php echo $object->tanggal_pinjam[$i];?></td>
                        <td style="text-align: center;"><?php echo $object->kode_barang[$i]; ?></td>
                        <td style="text-align: center;"><?php echo $object->nama_barang[$i];?></td>
                        <td style="text-align: center;"><?php echo $object->nama_pegawai[$i];?></td>
                        <td style="text-align: center;"><?php echo $object->nama_petugas[$i]; ?></td>
                        <td style="text-align: center;"><?php echo $object->jumlah_pinjam[$i];?></td>
                    </tr>
                    <?php endfor;?>
                </table><br><br>
                <pre>
                    <p align="center">TERIMA KASIH TELAH MENGGUNAKAN FITUR REPORT PDF KAMI</p>
                </pre>
                </div>
              </div>
            </div>
  </body>