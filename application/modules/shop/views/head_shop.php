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

        <script type="text/javascript" src="<?php echo assets_url('js/jquery-2.2.0.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/jquery-ui.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/owl.carousel.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/bootstrap3-wysihtml5.all.min.js');?>"></script>
	</head>
	<div>
		<nav class="nav navbar-default small">
			<div class="container">
                <div class="pull-left">
                    <p style="margin-top: 15px;">Selamat datang di ELKASSHOP.COM</p>
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
                        <div class="col-lg-4 text-right"><span class="fa fa-clock-o fa-3x"></div>
                        <div class="col-lg-8">
                            <p>JAM KERJA</p>
                            <p>Senin - Jumat (09:00 - 18:00)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-muted">
                    <div class="row">
                        <div class="col-lg-4 text-right"><span class="fa fa-truck fa-3x"></div>
                        <div class="col-lg-8">
                            <p>PENGIRIMAN GRATIS</p>
                            <p>Untuk Daerah Jabodetabek</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-muted">
                    <div class="row">
                        <div class="col-lg-4 text-right"><span class="fa fa-money fa-3x"></div>
                        <div class="col-lg-8">
                            <p>JAMINAN UANG KEMBALI</p>
                            <p>Syarat dan Ketentuan Berlaku</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-muted">
                    <div class="row">
                        <div class="col-lg-4 text-right"><span class="fa fa-phone-square fa-3x"></div>
                        <div class="col-lg-8">
                            <p>NOMER TELEPON</p>
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
                <div class="col-lg-8">
                    <form method="post" class="form-group form-inline" style="margin-top: 17px;">
                        <span class="input-group">
                            <select class="form-control" style="width: 150px;height: 50px;">
                                <option>Semua Kategori</option>
                                <option>Cash Drawer</option>
                                <option>Printer Thermal</option>
                                <option>Scaner Barcode</option>
                                <option>Smartphone</option>
                            </select>
                        </span>
                        <input type="text" name="cari" class="form-control input-group" placeholder="Cari Barang" style="width: 500px;height: 50px;"/>
                        <span class="input-group">
                            <button type="input" class="btn btn-info" style="width: 100px;height: 50px;">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </form>
                </div>
                <div class="col-lg-1" style="margin-top: 15px;">
                    <span class="fa fa-shopping-cart fa-3x text-info"></span><p class="small">Keranjang</p>
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
                        <li class="dropdown btn-info category-bar" style="">
                            <a class="dropdown-toggle text-center" data-toggle="dropdown" style="font-size: 18px">
                                <span class="fa fa-align-justify"></span> &nbsp;&nbsp; KATEGORI &nbsp;&nbsp; <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="width: 290px;">
                                <?php
                                    $query = $this->db->get('el_category');
                                    foreach($query->result() as $row){
                                ?>
                                <li><a href="<?php echo site_url('shop/shop_category_list/category_list/'.$row->category_id);?>"> <?php echo $row->category_name?> </a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url();?>"> Beranda </a></li>
                        <li><a href="<?php echo site_url();?>"> Produk Baru </a></li>
                    </ul>
                </div>
            </div>
        </nav>