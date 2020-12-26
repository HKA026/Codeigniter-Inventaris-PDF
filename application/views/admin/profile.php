<div class="row">
<div class="box col-md-5">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Profile</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
            <form action="Profile/Save">
                <div class="card">
                  <div class="card-body">
                    <div class="list-group">
                        <div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Id Petugas</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $this->session->userdata('iduser'); ?>">
                        </div><br><div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Username</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $this->session->userdata('name'); ?>">
                        </div><br><div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Password </i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $this->session->userdata('pass'); ?>">
                        </div><br>
                        <div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Nama Petugas</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>" >
                        </div><br><div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Level</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" >
                        </div><br> </a></div> <a class='btn btn-success btn-sm'href='<?php echo base_url("DataPetugas/updatePetugas/").$detail->id_petugas?>'><i class='glyphicon glyphicon-edit'></i> UPDATE </a>
                    </div>
                  </div>
            </form>
        </div>
    </div>
    <!--/span-->
  </div>
</div><!--/row-->
