
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data Petugas </h2>

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
					<th style="text-align: center;">Id Petugas</th>
					<th style="text-align: center;">Username</th>
					<th style="text-align: center;">Password</th>
					<th style="text-align: center;">Nama Petugas</th>
					<th style="text-align: center;">level</th>
          <th style="text-align: center;">status</th>
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
									<td>".$data->id_petugas."</td>
									<td>".$data->username."</td>
									<td>".$data->password."</td>
									<td>".$data->nama_petugas."</td>
									<td>".$data->level."</td>
                  <td style='text-align:center;'>".$data->status."</td>
									<td width='240' style='text-align:center;'>
									<a class='btn btn-info btn-xs' href='".base_url("DataPetugas/detailPetugas/".$data->id_petugas)."'><i class='glyphicon glyphicon-zoom-in icon-white'></i> DETAIL </a>
									<a class='btn btn-success btn-xs'href='".base_url("DataPetugas/updatePetugas/".$data->id_petugas)."'><i class='glyphicon glyphicon-edit'></i> UPDATE </a>
									<a class='btn btn-danger btn-xs' href='".base_url("DataPetugas/Delete/".$data->id_petugas)."'><i class='glyphicon glyphicon-trash'></i> DELETE </a>
									
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
        <h5 class="modal-title">Add Data Petugas</h5>
        <small class="form-text text-muted">Your information is safe with us.</small>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="DataPetugas/addDataPetugas" method="POST" onSubmit="return cekform();">
        <div class="modal-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username Petugas">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter password Petugas">
          </div>
          <div class="form-group">
            <label for="nama_petugas">Nama petugas</label>
            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Enter Nama Petugasi">
          </div>
            <label for="level">Level Petugas</label>
            <select class="form-control" name="level" required="">
                <option selected disabled>Pilih Level User</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
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
    if (!$("#username").val())
    {
      alert('Maaf username tidak boleh kosong');
      $("#username").focus();
      return false;
    }
    if (!$("#password").val())
    {
      alert('Maaf password tidak boleh kosong');
      $("#password").focus();
      return false;
    }
  }
</script>
