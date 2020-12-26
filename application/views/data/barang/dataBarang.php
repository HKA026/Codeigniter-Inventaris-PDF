
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="fas fa-tv"></i></i> Data Barang </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info"><i>Untuk Menambah Data Silahkan Klik Button Disamping</i> <a class='btn btn-primary btn-xs' data-toggle="modal" data-target="#modalRegisterForm"><i class='glyphicon glyphicon-plus icon-white'> </i> Tambah Data </a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead align="center">
				<tr>
					<th style="text-align: center;">No</th>
					<th style="text-align: center;">Kode Barang</th>
					<th style="text-align: center;">Nama Barang</th>
					<th style="text-align: center;">Kondisi</th>
					<th style="text-align: center;">Jenis</th>
					<th style="text-align: center;">Jumlah</th>
					<th style="text-align: center;">Kode Ruangan</th>
					<th style="text-align: center;">Action</th>
				</tr>
    </thead>
    <tbody>
    		<?php
    		$n=1;
			if( ! empty($dp)){ 
				foreach($dp as $data){
					echo "<tr>
									<td>".$n."</td>
									<td>".$data->kode_barang."</td>
									<td>".$data->nama_barang."</td>
									<td>".$data->kondisi_barang."</td>
									<td>".$data->id_jenis."</td>
									<td>".$data->jumlah."</td>
									<td>".$data->nama_ruangan."</td>
									<td width='220' style='text-align:center;'>
									<a class='btn btn-info btn-xs' href='".base_url("DataBarang/detailBarang/".$data->kode_barang)."'><i class='glyphicon glyphicon-zoom-in icon-white'></i> DETAIL </a>
									<a class='btn btn-success btn-xs'href='".base_url("DataBarang/updateBarang/".$data->kode_barang)."'><i class='glyphicon glyphicon-edit'></i> UPDATE </a>
									<a class='btn btn-danger btn-xs' href='".base_url("DataBarang/Delete/".$data->kode_barang)."'><i class='glyphicon glyphicon-trash'></i> DELETE </a>
									
									</td>
					</tr>";$n++;
				}
			}else{ 
				echo "<tr><td align='center' colspan='8' style='text-align:center;'><div class='alert alert-danger'>Data Tidak Ada, coba cek kembali Syntax anda</div></td></tr>";
			}
			?>
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
        <h5 class="modal-title">Add Data Barang</h5>
        <small class="form-text text-muted">Your information is safe with us.</small>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="DataBarang/addDataBarang" method="POST" onSubmit="return cekform();">
        <div class="modal-body">
          <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="input" class="form-control" id="kode_barang" name="kode_barang" placeholder="Enter Kode Barang">
            
          </div><div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="input" class="form-control" id="nama_barang" name="nama_barang" placeholder="Enter Nama Barang">
            
          </div>
          <div class="form-group">
            <label for="kondisi_barang">Kondisi Barang</label>
            <input type="text" class="form-control" id="kondisi_barang" name="kondisi_barang" placeholder="Enter Kondisi Barang">
          </div>
          <div class="form-group">
            <label for="id_jenis">Jenis Barang</label>
            <input type="text" class="form-control" id="id_jenis" name="id_jenis" placeholder="Enter Jenis Barang">
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Enter Jumlah Barang">
          </div>
          <div class="form-group">
          <label for="jumlah">Nama Ruangan</label>
            <select class="form-control" name="kode_ruangan" required="">
                          <option value="SELECT Ruangan" selected disabled>Select Ruangan</option>
                          <?php foreach($kore as $kode) { ?>
                  <option value="<?php echo $kode->kode_ruangan;?>"><?php echo $kode->nama_ruangan;?></option>
                  <?php } ?>
                        </select>
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
       function cekform()
  {
    if (!$("#kode_barang").val())
    {
      alert('Maaf kode barang tidak boleh kosong');
      $("#kode_barang").focus();
      return false;
    }
    if (!$("#nama_barang").val())
    {
      alert('Maaf nama barang Barang tidak boleh kosong');
      $("#nama_barang").focus();
      return false;
    }
    if (!$("#kondisi_barang").val())
    {
      alert('Maaf kondisi barang Barang tidak boleh kosong');
      $("#kondisi_barang").focus();
      return false;
    }
    if (!$("#id_jenis").val())
    {
      alert('Maaf Jenis Barang tidak boleh kosong');
      $("#id_jenis").focus();
      return false;
    }
    if (!$("#jumlah").val())
    {
      alert('Maaf Jumlah Barang tidak boleh kosong');
      $("#jumlah").focus();
      return false;
    }
  }
</script>
