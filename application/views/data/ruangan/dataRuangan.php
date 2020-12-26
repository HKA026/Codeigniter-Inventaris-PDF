
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="fas fa-tv"></i></i> Data Ruangan </h2>

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
					<th style="text-align: center;">Kode Ruangan</th>
					<th style="text-align: center;">Nama Ruangan</th>
          <th style="text-align: center;">Action</th>
				</tr>
    </thead>
    <tbody>
    		<?php
    		$n=1;
			if( ! empty($dp)){ 
				foreach($dp as $data){
					echo "<tr>
									<td style='text-align:center;'>".$n."</td>
									<td style='text-align:center;'>".$data->kode_ruangan."</td>
									<td style='text-align:center;'>".$data->nama_ruangan."</td>
									<td width='250' style='text-align:center;'>
									<a class='btn btn-success btn-xs'href='".base_url("DataRuangan/updateRuangan/".$data->kode_ruangan)."'><i class='glyphicon glyphicon-edit'></i> UPDATE </a>
									<a class='btn btn-danger btn-xs' href='".base_url("DataRuangan/Delete/".$data->kode_ruangan)."'><i class='glyphicon glyphicon-trash'></i> DELETE </a>
									
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
        <h5 class="modal-title">Add Data Ruangan</h5>
        <small class="form-text text-muted">Your information is safe with us.</small>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="DataRuangan/addDataRuangan" method="POST" onSubmit="return cekform();">
        <div class="modal-body">
          <div class="form-group">
            <label for="kode_ruangan">Kode Ruangan</label>
            <input type="input" class="form-control" id="kode_ruangan" name="kode_ruangan" placeholder="Enter Kode Ruangan">
            
          </div><div class="form-group">
            <label for="nama_ruangan">Nama Ruangan</label>
            <input type="input" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Enter Nama Ruangan">
        </div><div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
       function cekform()
  {
    if (!$("#kode_ruangan").val())
    {
      alert('Maaf Kode Ruangan tidak boleh kosong');
      $("#kode_ruangan").focus();
      return false;
    }
    if (!$("#nama_ruangan").val())
    {
      alert('Maaf Nama Ruangan tidak boleh kosong');
      $("#nama_ruangan").focus();
      return false;
    }
  }
</script>
