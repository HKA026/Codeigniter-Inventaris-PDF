<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title> Sistem Informasi Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- The styles -->

    <link id="bs-css" href="<?php echo base_url('assets/charisma/css/bootstrap-cerulean.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css"> -->
    <link href="<?php echo base_url('assets/charisma/css/charisma-app.css')?>" rel="stylesheet">
    <link href='<?php echo base_url()?>assets/charisma/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url()?>assets/charisma/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>assets/charisma/css/animate.min.css' rel='stylesheet'>

    

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/charisma/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?php base_url()?>assets/charisma/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
<link href="<?php echo base_url('assets/')?>favicon.png" rel="icon">

</head>
<!-- <body background="<?php echo base_url()?>images/12sa.png">
 -->    
<body>


<div class="row">
<div class="box col-md-5">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fas fa-tv"></i></i> Detail Data Barang </h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="card">
                  <div class="card-body">
                    <div class="list-group">
                        <div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Kode Barang</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $detail->kode_barang ?>">
                        </div><br><div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Nama Barang</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $detail->nama_barang ?>">
                        </div><br><div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Kondisi Barang </i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $detail->kondisi_barang ?>">
                        </div><br>
                        <div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Jenis</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $detail->id_jenis ?>" >
                        </div><br><div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Jumlah</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $detail->jumlah ?>" >
                        </div><br><div class="input-group col-lg-12">
                        <span style="width: 120px; text-align: left;" class="input-group-addon">Ruangan</i></span>
                        <input disabled type="text" class="form-control" value="<?php echo $detail->kode_ruangan ?>" >
                        </div><br><a style="color: white;" href="<?php echo base_url('DataBarang')?>"><div class="btn btn-info btn-sm"><i class="glyphicon glyphicon-circle-arrow-left"></i> Kembali </a></div> <a class='btn btn-success btn-sm'href='<?php echo base_url("DataBarang/updateBarang/").$detail->kode_barang?>'><i class='glyphicon glyphicon-edit'></i> UPDATE </a>
                    </div>
                  </div>
                 
                </div>
        </div>
    </div>
    <!--/span-->
  </div>
</div><!--/row-->





<script src="<?php echo base_url()?>assets/charisma/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url()?>assets/charisma/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url()?>assets/charisma/bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo base_url()?>assets/charisma/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url()?>assets/charisma/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url()?>assets/charisma/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url()?>assets/charisma/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url()?>assets/charisma/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url()?>assets/charisma/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url()?>assets/charisma/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url()?>assets/charisma/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url()?>assets/charisma/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url()?>assets/charisma/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url()?>assets/charisma/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url()?>assets/charisma/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url()?>assets/charisma/js/charisma.js"></script><br><hr>
</body>
</html>