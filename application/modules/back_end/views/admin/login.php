<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <link type="text/css" href="<?php echo assets_url('css/bootstrap.css');?>" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/font-awesome.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/AdminLTE.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/bootstrap3-wysihtml5.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/skins/_all-skins.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/admin.css');?>">
	<link rel="stylesheet" type="text/css" href="<?PHP echo assets_url( 'css/jquery.tagsinput.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?PHP echo assets_url( 'css/jquery.dataTables.min.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?PHP echo assets_url( 'css/dataTables.bootstrap.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?PHP echo assets_url( 'css/datepicker.css');?>" />
	
	<script type="text/javascript" src="<?php echo assets_url('js/jquery-2.1.4.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo assets_url('js/bootstrap.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo assets_url('js/jquery.tagsinput.js');?>"></script>
	<script type="text/javascript" src="<?php echo assets_url('js/app.min.js');?>"></script>
    <script type="text/javascript" src="<?PHP echo assets_url('js/jquery.dataTables.min.js');?>"></script>
    <script type="text/javascript" src="<?PHP echo assets_url('js/dataTables.responsive.min.js');?>"></script>
    <script type="text/javascript" src="<?PHP echo assets_url('js/bootstrap3-wysihtml5.all.min.js');?>"></script>
    <script type="text/javascript" src="<?PHP echo assets_url('js/ckeditor.js');?>"></script>
    <script type="text/javascript" src="<?PHP echo assets_url('js/bootstrap-datepicker.js');?>"></script>
    <script type="text/javascript" src="<?PHP echo assets_url('js/fusioncharts.js');?>"></script>
    <script type="text/javascript" src="<?PHP echo assets_url('js/themes/fusioncharts.theme.carbon.js');?>"></script>
</head>
<div class="container">
	<div class=" log row login-box">
		<div class="login-logo">
			<a href="#"><b>Admin</b>ELKASSHOP</a>
		</div><!-- /.login-logo -->
		<div class="login-box-body">
			<form method="post" action="<?PHP echo site_url('/back_end/admin/sign_in'); ?>" >
				<div class="form-group has-feedback">
					<input type="text" name="email" class="form-control" placeholder="Email" required>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				</br></br>
				<div class="row">
					<div class="col-xs-8">	
						<a href="#">I forgot my password</a><br>
					</div><!-- /.col -->
					<div class="col-xs-4">
						<input type="submit" value="Sign-In" class="btn btn-primary btn-block btn-flat" />
					  
					</div><!-- /.col -->
				</div>
			</form></br>
			<p><?php echo $this->session->flashdata('notification'); ?></p>
      </div>
    </div>
</div>  
<footer class="navbar navbar-bottom text-center foot">
	<address>
			&copy; 2016 All right reserved.
	</address>
</footer>

</html>

