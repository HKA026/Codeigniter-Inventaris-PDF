
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="fas fa-users"></i></i> Data Pegawai </h2>

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
					<th style="text-align: center;">NIP</th>
					<th style="text-align: center;">Nama Pegawai</th>
					<th style="text-align: center;">Alamat</th>
					<th style="text-align: center;">Nomor Telp</th>
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
									<td>".$data->nip."</td>
									<td>".$data->nama_pegawai."</td>
									<td>".$data->alamat."</td>
									<td>".$data->nomor_telepon."</td>
									<td width='240' style='text-align:center;'>
									<a class='btn btn-info btn-xs' href='".base_url("DataPegawai/detailPegawai/".$data->nip)."'><i class='glyphicon glyphicon-zoom-in icon-white'></i> DETAIL </a>
									<a class='btn btn-success btn-xs'href='".base_url("DataPegawai/updatePegawai/".$data->nip)."'><i class='glyphicon glyphicon-edit'></i> UPDATE </a>
									<a class='btn btn-danger btn-xs' href='".base_url("DataPegawai/Delete/".$data->nip)."'><i class='glyphicon glyphicon-trash'></i> DELETE </a>
									
									</td>
					</tr>";$n++;
				}
			}else{ 
				echo "<tr><td align='center' colspan='7' style='text-align:center;'><div class='alert alert-danger'>Data Tidak Ada, coba cek kembali Syntax anda</div></td></tr>";
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
        <h5 class="modal-title">Add Data Pegawai</h5>
        <small class="form-text text-muted">Your information is safe with us.</small>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="DataPegawai/addDataPegawai" method="POST" onSubmit="return cekform();">
        <div class="modal-body">
          <div class="form-group">
            <label for="nip">NIP</label>
            <input type="input" class="form-control" id="nip" name="nip" placeholder="Enter NIP">
            
          </div>
          <div class="form-group">
            <label for="namap">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama" name="namap" placeholder="Enter Nama Pegawai">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat Pegawai">
          </div>
          <div class="form-group">
            <label for="telp">Nomor Telpon</label>
            <input type="text" class="form-control" id="telp" name="telp" placeholder="Enter Nomor Telpon Pegawai">
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
    if (!$("#nip").val())
    {
      alert('Maaf NIP tidak boleh kosong');
      $("#nip").focus();
      return false;
    }
    if (!$("#nama").val())
    {
      alert('Maaf Nama Pegawai tidak boleh kosong');
      $("#nama").focus();
      return false;
    }
    if (!$("#alamat").val())
    {
      alert('Maaf alamat Pegawai tidak boleh kosong');
      $("#alamat").focus();
      return false;
    }
    if (!$("#telp").val())
    {
      alert('Maaf telpon Pegawai tidak boleh kosong');
      $("#telp").focus();
      return false;
    }
  }
</script>
