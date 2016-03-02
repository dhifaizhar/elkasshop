<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ELKASSHOP | Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,intial-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/bootstrap.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/font-awesome.css');?>"/>

        <script type="text/javascript" src="<?php echo assets_url('js/jquery-2.2.0.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/jquery-ui.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/bootstrap.min.js');?>"></script>
	</head>
	<body>
		<div class="container" style="padding-top: 70px;">
			<div class="row">
                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 hidden-xs">
                    <div id="banner" class="carousel" data-ride="carousel" data-interval="5000">
                        <ol class="carousel-indicators">
                            <li data-target="#banner" data-slide-to="0" class="active"></li>
                            <li data-target="#banner" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" >
                            <div class="item active">
                                <img class="first-slide img-responsive" src="<?php echo assets_url('images/banner_img/pic1.png');?>" alt="pic#1">
                                <div class="carousel-caption slide" ></div>
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php echo assets_url('images/banner_img/pic1.jpg');?>" alt="pic#1">
                                <div class="carousel-caption slide" >
                                    <div class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 box">
                    <div id="log">
                        <h3 class="text-center" style="font-weight: bold;">LOGIN</h3>
                        <hr/>
                        <form method="post" action="<?php echo site_url('login/login_auth'); ?>">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-at"></span></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <input type="checkbox" class="form-group" value="remember"> Ingat saya !<br/><br/>
                            <input class="btn btn-primary center-block" type="submit" value="Masuk"/>
                            <br/>
                        </form>
                        <hr/>
                        <div class="text-center">
                            <a href="#">Lupa email atau kata sandi anda ?</a>
                        </div>
                        <br/><br/><br/><br/><br/>
                        <hr/>
                        <div class="text-center">
                            <p>Belum memiliki akun ?</p>
                            <a href="javascript:sign()">Buat akun anda</a>
                        </div>
                        <br/>
                    </div>
                    <div id="sign">
                        <h4 class="text-center" style="font-weight: bold;">DAFTAR</h4>
                        <hr/>
                        <form method="post" action="<?php echo site_url('login/login_auth'); ?>">
                            <div class="form-group">
                                <div class="text-center">
                                    <label>Alamat Email</label>
                                </div>
                                <div >
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <label>Nama Lengkap</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="fisrt_name" class="form-control" placeholder="Nama depan" required/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="last_name" class="form-control" placeholder="Nama belakang" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div>
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div>
                                    <input type="date" name="tanggal_lahir" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div>
                                    <label>Jenis Kelamin</label>
                                </div>
                                <div required>
                                    <input type="radio" name="jenis_kelamin" value="L"/> Pria
                                    &nbsp;
                                    <input type="radio" name="jenis_kelamin" value="P"/> Wanita
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <label>Kata Sandi</label>
                                </div>
                                <div>
                                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <label>Konfirmasi Ulang Kata Sandi</label>
                                </div>
                                <div>
                                    <input type="password" name="pass" class="form-control" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <span>
                                <a href="javascript:sign()">Masuk Disini</a>
                                <input class="btn btn-primary pull-right" type="submit" value="Daftar"/>
                            </span>
                        </form>
                    </div>
				</div>
			</div>
        </div>
	</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
       $('#sign').hide();
    });
    function sign(){
        $('#log').slideToggle('normal');
        $('#sign').slideToggle('normal');
    }
</script>