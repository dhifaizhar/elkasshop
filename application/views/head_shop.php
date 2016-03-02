<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="<?php echo assets_url('images/elkasshop.bmp');?>"/>

        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/bootstrap.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/font-awesome.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/owl.carousel.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/bootstrap3-wysihtml5.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/head_style.css');?>"/>

        <script type="text/javascript" src="<?php echo assets_url('js/jquery-2.2.0.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/jquery-ui.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/shop.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/owl.carousel.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/bootstrap3-wysihtml5.all.min.js');?>"></script>
	</head>
	<div>
		<nav class="nav navbar-default small" id="nav_top_head">
			<div class="container">
                <div class="navbar-header">
                    <p class="pull-left hidden-xs">Selamat datang di ELKASSHOP.COM - color: #256D9E</p>
                    <p class="text-center hidden-lg hidden-md hidden-sm">Selamat datang di ELKASSHOP.COM - color: #256D9E</p>
                </div>
                <div class="text-center">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-user"></span> Akun Saya </a></li>
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-question"></span> Bantuan </a></li>
                        <li><a href="<?php echo site_url('customer/login');?>"> <span class="fa fa-sign-in"></span> Masuk </a></li>
					</ul>
				</div>
			</div>
		</nav>
        <div class="container hidden-xs" id="nav_middle_head">
            <div class="row small center-block">
                <div class="col-lg-3 col-md-3 col-sm-6 text-muted">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-4 text-right"><span class="fa fa-clock-o fa-3x"></div>
                        <div class="col-lg-8 col-md-9 col-sm-8">
                            <p>JAM KERJA</p>
                            <p class="small">Senin - Jumat (09:00 - 18:00)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-muted">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-4 text-right"><span class="fa fa-truck fa-3x"></div>
                        <div class="col-lg-8 col-md-9 col-sm-8">
                            <p>PENGIRIMAN GRATIS</p>
                            <p class="small">Untuk Daerah Jabodetabek</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-muted">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-4 text-right"><span class="fa fa-money fa-3x"></div>
                        <div class="col-lg-8 col-md-9 col-sm-8">
                            <p>JAMINAN UANG KEMBALI</p>
                            <p class="small">Syarat dan Ketentuan Berlaku</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-muted">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-4 text-right"><span class="fa fa-phone-square fa-3x"></div>
                        <div class="col-lg-8 col-md-9 col-sm-8">
                            <p>NOMER TELEPON</p>
                            <p class="small">(021) 7375096</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('head_main_nav');?>
