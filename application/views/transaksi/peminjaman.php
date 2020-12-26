
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="fas fa-share-square"></i> Data Peminjaman </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info"><i>Untuk Menambah Data Silahkan Klik Button Disamping</i> <a class='btn btn-primary btn-xs' data-toggle="modal" data-target="#modalRegisterForm"><i class='glyphicon glyphicon-plus icon-white'> </i> Tambah Data </a> <i>cetak data berskala besar</i> <a class='btn btn-primary btn-xs' target="_blank" href="Peminjaman/ReportAll" ><i class='glyphicon glyphicon-print'> </i> Cetak </a></div> 
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead align="center">
                <tr>
          <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Kode Peminjaman</th>
                    <th style="text-align: center;">Tanggal Peminjaman</th>
                    <th style="text-align: center;">Kode Barang</th>
                    <th style="text-align: center;">Nama Barang</th>
                    <th style="text-align: center;">Nama Pegawai</th>
                    <th style="text-align: center;">Nama Petugas</th>
                    <th style="text-align: center;">Jumlah Pinjam</th>
                    <th style="text-align: center;">Action</th>
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
                  <td style='text-align: center; width:70px;'><a target='_blank' href='".base_url("Peminjaman/Report/".$data->kode_pinjam)."'><img style='width:21px;' src='".base_url('assets/images/report_pdf.png')."'></a>
                                    </td>
                    </tr>";$n++;
                }
            }else{ 
                echo "<tr><td align='center' colspan='10' style='text-align:center;'><div class='alert alert-danger'>Data Tidak Ada, coba cek kembali Syntax anda</div></td></tr>";
            }
            ?><!-- <td style='text-align: center; width:70px;'><a href='".base_url("DataPeminjaman/Delete/".$data->kode_pinjam)."'><img style='width:21px;' src='".base_url('assets/images/delete.png')."'></a>
                   | <a href='".base_url("DataPeminjaman/Delete/".$data->kode_pinjam)."'><img style='width:25px;' src='".base_url('assets/images/report_pdf.png')."'></a>
                  </td> -->
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->



<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title">Add Data Peminjaman</h5>
        <small class="form-text text-muted">Your information is safe with us.</small>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="Peminjaman/addDataPeminjaman" method="POST" onSubmit="return cekform();">
        <div class="modal-body">
          <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="text" class="form-control" id="datepicker" name="tanggal_pinjam" placeholder="Enter Tanggal Pinjam">
            
          </div>
          <div class="form-group">
            <label for="kode_barang">Nama Barang</label>
            <select class="form-control" name="kode_barang" required="">
                          <option value="SELECT NIP" selected disabled>Select Barang</option>
                          <?php foreach($kobar as $row) { ?>
                  <option value="<?php echo $row->kode_barang;?>"><?php echo $row->nama_barang;?></option>
                  <?php } ?>
                        </select>
          </div>
          <div class="form-group">
            <label for="nip">Nama Peminjaman</label>
            <select class="form-control" name="nip" required="">
                          <option value="SELECT NIP" selected disabled>Select Pegawai</option>
                          <?php foreach($nips as $n) { ?>
                  <option value="<?php echo $n->nip;?>"><?php echo $n->nama_pegawai;?></option>
                  <?php } ?>
                        </select>
          </div>
          <div class="form-group">
            <label for="id_petugas">Nama Petugas</label>
            <input type="text" disabled class="form-control" value="<?php echo $this->session->userdata('nama'); ?>">
            <input type="hidden" name="id_petugas" value="<?php echo $this->session->userdata('iduser'); ?>">
          </div>
          <div class="form-group">
            <label for="jumlah_pinjam">Jumlah Pinjam</label>
            <input type="text" class="form-control" id="jumlah_pinjam" name="jumlah_pinjam" placeholder="Enter Jumlah Pinjam">
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      format:'yyyy-mm-dd'
    });
  } );
</script>