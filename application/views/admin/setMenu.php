<div class="row"> 
  <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-tasks"></i> Data Main Manu </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <?= $this->session->flashdata('DeleteSuccess');?>
    <?= $this->session->flashdata('AddSuccess');?>
    <?= $this->session->flashdata('updateSuccess');?>
    <div class="alert alert-info"><i>Untuk Menambah Data Silahkan Klik Button Disamping</i> <a class='btn btn-primary btn-xs' data-toggle="modal" data-target="#modalRegisterForm"><i class='glyphicon glyphicon-plus icon-white'> </i> Tambah Data </a></div>
      <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
      <thead align="center">
          <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">id usermenu</th>
            <th style="text-align: center;">user</th>
            <th style="text-align: center;">Menu</th>
            <th style="text-align: center;">Nama Menu</th>
            <th style="text-align: center;">Menu Link</th>
            <th style="text-align: center;">Status</th>
            <th style="text-align: center;">nav</th>
            <th style="text-align: center;">icon</th>
            <th style="text-align: center;">Action</th>
          </tr>
      </thead>
      <tbody>
            <?php
            $n=1;
            if( ! empty($menu)){ 
                foreach($menu as $data){
                    echo "<tr>
                                    <td style='text-align: center;'>".$n."</td>
                                    <td style='text-align: center;'>".$data->id_usermenu."</td>
                                    <td style='text-align: center;'>".$data->i_user."</td>
                                    <td style='text-align: center;'>".$data->i_menu."</td>
                                    <td style='text-align: center;'>".$data->menuname."</td>
                                    <td style='text-align: center;'>".$data->f_menulink."</td>
                                    <td style='text-align: center;'>".$data->f_status."</td>
                                    <td style='text-align: center;'>".$data->f_nav."</td>
                                    <td style='text-align: center;'>".$data->icon."</td>
                                    <td style='text-align: center; width:70px;'><a href='".base_url("setMenu/editMenu/".$data->id_usermenu)."'><img style='width:21px;' src='".base_url('assets/images/file.png')."'></a> | <a href='".base_url("setMenu/Delete/".$data->id_usermenu)."'><img style='width:21px;' src='".base_url('assets/images/delete.png')."'></a>
                                    </td>
                    </tr>";$n++;
                }
            }else{ 
                echo "<tr><td align='center' colspan='10' style='text-align:center;'><div class='alert alert-danger'>Data Tidak Ada, coba cek kembali Syntax anda</div></td></tr>";
            }
            ?>
      </tbody>
      </table>
    </div>
  </div>
</div>


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
      <form action="setMenu/addMenu" method="POST" onSubmit="return cekform();">
        <div class="modal-body">
          <div class="form-group">
            <label for="id_usermenu">Id Usermenu</label>
            <input type="input" class="form-control" id="id_usermenu" name="id_usermenu" placeholder="Enter Id Username">
          </div>
          <div class="form-group">
            <label for="i_user">User</label>
            <input type="input" class="form-control" id="i_user" name="i_user" placeholder="Enter User">
        </div>
        <div class="form-group">
            <label for="i_menu">Menu</label>
            <input type="input" class="form-control" id="i_menu" name="i_menu" placeholder="Enter Urutan Menu">
        </div>
        <div class="form-group">
            <label for="menuname">Nama Menu</label>
            <input type="input" class="form-control" id="menuname" name="menuname" placeholder="Enter Nama Menu">
        </div>
        <div class="form-group">
            <label for="f_menulink">Menu Link</label>
            <input type="input" class="form-control" id="f_menulink" name="f_menulink" placeholder="Enter Link Menu">
        </div>
        <div class="form-group">
            <label for="f_status">Status</label>
            <select class="form-control" name="f_status" required="">
                <option selected disabled>Pilih Status Menu</option>
                <option value="1">Aktif</option>
                <option value="0">Non-Aktif</option>
            </select>
        </div>
        <div class="form-group">
            <label for="f_nav">Nav</label>
            <select class="form-control" name="f_nav" required="">
                <option selected disabled>Pilih Nav Menu</option>
                <option value="1">Aktif</option>
                <option value="0">Non-Aktif</option>
            </select>
        </div>

        <div class="form-group">
            <label for="f_icon">Icon</label>
            <input type="input" class="form-control" id="f_icon" name="f_icon" placeholder="example : <i class='icon'></i>">
        </div>

        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
      </form>
    </div>
  </div>
</div>


<script>
    $(window).load(function(){
         $('#infoModal').modal('show');
      });
</script>