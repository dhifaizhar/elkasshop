<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,intial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/bootstrap.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/font-awesome.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/bootstrap3-wysihtml5.min.css');?>">

        <script type="text/javascript" src="<?php echo assets_url('js/jquery-1.11.3.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/jquery-ui.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/bootstrap3-wysihtml5.all.min.js');?>"></script>
	</head>
	<div>
		<nav class="nav navbar-default small">
			<div class="container">
                <div class="pull-left">
                    <p style="margin-top: 15px;">Selamat datang di ELKASHOP.COM</p>
                </div>
                <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-user"></span> Akun Saya </a></li>
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-question"></span> Bantuan </a></li>
                        <li><a href="<?php echo site_url();?>"> <span class="fa fa-sign-in"></span> Masuk </a></li>
					</ul>
				</div>
			</div>
		</nav>
        <div class="container" style="padding: 20px 0 20px 0;">
            <div class="row small center-block">
                <div class="col-lg-3 text-muted">
                    <div class="row">
                        <div class="col-lg-2"><span class="fa fa-clock-o fa-3x"></div>
                        <div class="col-lg-10">
                            <p>JAM KERJA</p>
                            <p>Senin - Jumat (09:00 - 18:00)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-muted">
                    <div class="row">
                        <div class="col-lg-2"><span class="fa fa-truck fa-3x"></div>
                        <div class="col-lg-10">
                            <p>PENGIRIMAN GRATIS</p>
                            <p>Untuk Daerah Jabodetabek</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-muted">
                    <div class="row">
                        <div class="col-lg-2"><span class="fa fa-money fa-3x"></div>
                        <div class="col-lg-10">
                            <p>JAMINAN UANG KEMBALI</p>
                            <p>Syarat dan Ketentuan Berlaku</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-muted">
                    <div class="row">
                        <div class="col-lg-2"><span class="fa fa-phone-square fa-3x"></div>
                        <div class="col-lg-10">
                            <p>TELEPON</p>
                            <p>(021) 7375096</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3">
                    <a href="<?php echo site_url();?>" >
                        <img src="<?php echo base_url('assets/images/logo.png');?>" title="ELKASSHOP" />
                    </a>
                </div>
                <div class="col-lg-7">
                    <form method="post" class="input-group form-inline form-control" style="margin-top: 15px;">
                        <span class="input-group-btn">
                            <select>
                                <>
                            </select>
                        </span>
                        <input type="text" name="cari" class="form-control" placeholder="Cari Barang"/>
                        <span class="input-group-btn">
                            <button type="input" class="btn btn-info btn-flat">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </form>
                </div>
                <div class="col-lg-1" style="margin-top: 15px;">
                    <span class="fa fa-shopping-cart fa-2x text-info"></span><p>Keranjang</p>
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
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown btn-info" style="font-weight: bold;">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                KATEGORI <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url();?>"> Cash Drawer </a></li>
                                <li><a href="<?php echo site_url();?>"> Printer Thermal </a></li>
                                <li><a href="<?php echo site_url();?>"> Scaner Barcode </a></li>
                                <li><a href="<?php echo site_url();?>"> Komputer </a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url();?>"> Beranda </a></li>
                        <li><a href="<?php echo site_url();?>"> Produk Baru </a></li>
                    </ul>
                </div>
            </div>
        </nav>