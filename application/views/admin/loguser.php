<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Log User Aktivitas </h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                <thead align="center">
            				<tr>
            					<th>No</th>
            					<th>User</th>
            					<th>Username</th>
            					<th>Ip Address</th>
            					<th>Waktu</th>
            					<th>Aktivitas</th>
            				</tr>
                </thead>
                <tbody>
                <?php
                    $n=1;
                    if( ! empty($dp)){ 
                        foreach($dp as $data){
                            echo "<tr>
                                            <td style='text-align: center;'>".$n."</td>
                                            <td style='text-align: center;'>".$data->user_id."</td>
                                            <td style='text-align: center;'>".$data->e_username."</td>
                                            <td style='text-align: center;'>".$data->ip_address."</td>
                                            <td style='text-align: center;'>".$data->waktu."</td>
                                            <td style='text-align: center;'>".$data->aktivitas."</td>
                            </tr>";$n++;
                        }
                    }else{ 
                        echo "<tr><td align='center' colspan='6' style='text-align:center;'><div class='alert alert-danger'>Data Tidak Ada, coba cek kembali Syntax anda</div></td></tr>";
                    }
                ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--/row-->
