<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title> Sistem Informasi Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/')?>favicon.png" rel="icon">

    <link id="bs-css" href="<?php echo base_url('assets/charisma/css/bootstrap-cerulean.min.css')?>" rel="stylesheet">
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
    

    <script src="<?php echo base_url()?>assets/charisma/bower_components/jquery/jquery.min.js"></script>
    <!-- datepicker -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery-ui/jquery-ui.css">
    <script src="<?php echo base_url()?>assets/js/jquery-ui/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-ui/jquery-ui.js"></script>
    <!-- fontawesome -->
    <link href="<?php echo base_url()?>assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('Home')?>"><img alt="Charisma Logo" src="<?php echo base_url()?>assets/favicon.png" class="hidden-sm"/><span style="width: 100px;">Inventaris</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <input type="hidden" name="user" id="user" value="<?php echo $this->session->userdata('nama'); ?>">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo $this->session->userdata('username'); ?> | <?php echo $this->session->userdata('nama'); ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <!-- <li><a href="<?php echo base_url('Profile/')?>">Profile</a></li>
                    <li class="divider"></li> -->
                    <li><a href="<?php echo base_url()?>Login/end">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Default</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

        </div>
    </div>
    <!-- topbar ends -->
    <div class="ch-container">

    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
        
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>


                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url('Home')?>"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                            <?php 
                        if ($main_menu) {
                        foreach ($main_menu as $main ){?>
                         <li class="accordion">
                            <a href="<?php echo base_url().$main->f_menulink; ?>">
                            <?php echo $main->icon;?><span> <?php echo $main->menuname; ?></span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <?php 
                                $username = $this->session->userdata('username');
                                $imenu = $main->i_menu;
                                $sub_menu = $this->m->cek_submenu($username,$imenu);
                                if($sub_menu){
                                foreach ($sub_menu as $li ){
                                ?>
                                <li><a href="<?php echo base_url().$li->f_menulink;?>">
                                    <?php echo $li->icon;?><span> <?php echo $li->menuname; ?></span></a>
                                </li>
                            <?php }
                            } ?>
                            </ul>
                        </li>
                         <?php 
                            }
                        }
                        ?>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url('Home')?>">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url('Home')?>">Dashboard</a>
        </li>
    </ul>
</div>
<?= $this->session->flashdata('LoginSuccess');?>
<?= $this->session->flashdata('DeleteSuccess');?>
<?= $this->session->flashdata('AddSuccess');?>
<?= $this->session->flashdata('updateSuccess');?>
<?= $this->session->flashdata('Info');?>