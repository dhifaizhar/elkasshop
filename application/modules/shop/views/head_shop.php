<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,intial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap3-wysihtml5.min.css');?>">

		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo base_url('assets/js/bootstrap3-wysihtml5.all.min.js');?>"></script>
	</head>
	<div>
		<nav class="nav navbar-default">
			<div class="container">
                <div class="pull-left">
                    <p>Selamat datang di ELKASHOP.COM</p>
                </div>
                <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-user"></span> Akun Saya </a></li>
                        <li><a href="<?php echo site_url(); ?>"> <span class="fa fa-question"></span> Bantuan </a></li>
                        <li><a href="<?php echo site_url(); ?>"> <span class="fa fa-sign-in"></span> Masuk </a></li>
					</ul>
				</div>
			</div>
		</nav>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3">
                    Jam Kerja
                </div>
                <div class="col-lg-3">
                    Pengiriman Gratis
                </div>
                <div class="col-lg-3">
                    Jaminan Uang Kembali
                </div>
                <div class="col-lg-3">
                    Nomor Telepon 02
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3">
                    <a href="<?php echo site_url();?>" >
                        <img src="<?php echo base_url('assets/images/logo.png');?>" title="ELKASSHOP" />
                    </a>
                </div>
                <div class="col-lg-6">
                    <form method="post" class="input-group form-inline align-right">
                        <input type="text" name="cari" class="form-control" placeholder="inputkan alamat"/>
                        <span class="input-group-btn">
                            <button type="input" class="btn btn-info btn-flat">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </form>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        </div>
        <nav class="nav navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-user"></span> Akun Saya </a></li>
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-question"></span> Bantuan </a></li>
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-sign-in"></span> Masuk </a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <span class="fa"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="box box-widget text-center">
                                    <div class="box-body"><p><?PHP echo $this->session->userdata("nama_pasien") ?></p></div>
                                    <div class="box-footer">
                                        <a type="button" class="btn btn-warning" href="<?php echo site_url('login/sign_out'); ?>"> <span class="fa fa-sign-out"></span>Keluar </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<style type="text/css">
    p{
        margin-top: 15px;
    }
</style>