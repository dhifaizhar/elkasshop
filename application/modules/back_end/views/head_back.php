<!DOCTYPE html>
<html lang="en">
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

		<!-- JS -->
		<script type="text/javascript" src="<?php echo assets_url('js/jquery-2.2.0.min.js');?>"></script>
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
		<script type="text/javascript" src="<?PHP echo assets_url('js/themes/fusioncharts.theme.carbon.js');?>"></script>
		<script type="text/javascript" src="<?PHP echo assets_url('js/jquery.form.js');?>"></script>
	</head>
	<body class="hold-transition skin-blue fixed sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<a href="#" class="logo">
					<span class="logo-mini"><b>E</b>L</span>
					<img src="<?php echo base_url('assets/images/logo1.png');?>" />	
				</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle text-gray" data-toggle="offcanvas" role="button">
						<span class="sr-only">Navigation</span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav ">
							<li class="header">
								<a href="<?PHP echo base_url('back_end/admin/sign_out'); ?>" class="dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="Logout">
									<span class="hidden-xs">Sign Out</span>
									<span class="fa fa-sign-out"></span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
		</div>
		<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu">
					<div class="user-panel">
						<div class="pull-left image">
							<img src="<?php echo assets_url()?>images/customer_profile_img/user2-160x160.jpg" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
							<p><?PHP echo $this->session->userdata("name"); ?> </p>
							<a href="#"><i class="fa fa-circle text-success"></i><?PHP echo $this->session->userdata("role"); ?></a>
						</div>
					</div>
					<li class="header">Control Menu</li>
					<li <?PHP if($this->uri->segment(2) == "dashboard") echo "class='active'";?>><a href="<?php echo site_url(); ?>back_end/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
					<li <?PHP if($this->uri->segment(2) == "categories" || $this->uri->segment(2) == "product" ||$this->uri->segment(2) == "manufactur" ||$this->uri->segment(2) == "manufactur_view" ||$this->uri->segment(2) == "category" ) echo "class='treeview active'"; else echo "class='treeview'";?>>
						<a><i class="fa fa-tags"></i> <span>Catalogue</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li <?PHP if($this->uri->segment(2) == "categories" || $this->uri->segment(2) == "category" ) echo "class='active'";?>><a href="<?PHP echo site_url('back_end/categories'); ?>"> Categories</a></li>
							<li <?PHP if($this->uri->segment(2) == "product") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/product'); ?>">Product</a></li>
							<li <?PHP if($this->uri->segment(2) == "manufactur_view" || $this->uri->segment(2) == "manufactur") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/manufactur_view'); ?>">Manufactur</a></li>
						</ul>
					</li>
					<li <?PHP if($this->uri->segment(2) == "order" || $this->uri->segment(2) == "return_product") echo "class='treeview active'"; else echo "class='treeview'";?>>
						<a href="#"><i class="fa fa-shopping-cart"></i> <span>Sales</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li <?PHP if($this->uri->segment(2) == "order") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/order'); ?>">Order</a></li>
							<li <?PHP if($this->uri->segment(2) == "return_product") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/return_product'); ?>">Return</a></li>
						</ul>
					</li>
					<li <?PHP if($this->uri->segment(2) == "sales_report" || $this->uri->segment(2) == "product_report" ||$this->uri->segment(2) == "return_report") echo "class='treeview active'"; else echo "class='treeview'";?>>
						<a href="#"><i class="fa fa-files-o"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li <?PHP if($this->uri->segment(2) == "sales_report") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/sales_report'); ?>">Sales</a></li>
							<li <?PHP if($this->uri->segment(2) == "product_report") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/product_report'); ?>">Product</a></li>
							<li <?PHP if($this->uri->segment(2) == "article_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Wishlist</a></li>
							<li <?PHP if($this->uri->segment(2) == "return_report") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/return_report'); ?>">Returns</a></li>
							<li <?PHP if($this->uri->segment(2) == "article_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Customer</a></li>
						</ul>
					</li>
					
					<li <?PHP if($this->uri->segment(2) == "shipping" || $this->uri->segment(2) == "payment" ||$this->uri->segment(2) == "advertisement" || $this->uri->segment(2) == "layout") echo "class='treeview active'"; else echo "class='treeview'";?>>
						<a href="#"><i class="fa fa-cog"></i> <span>System</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li <?PHP if($this->uri->segment(2) == "advertisement") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Advertisement</a></li>
							<li <?PHP if($this->uri->segment(2) == "layout") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/return_report'); ?>">Layout</a></li>
							<li <?PHP if($this->uri->segment(2) == "newsletter") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/return_report'); ?>">Newsletter</a></li>
						<?PHP if( $this->session->userdata("role") == "Super_Admin"){ ?>
							<li <?PHP if($this->uri->segment(2) == "payment") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/product_report'); ?>">Payment</a></li>
							<li <?PHP if($this->uri->segment(2) == "shipping") echo "class='active'";?>><a href="<?PHP echo site_url('back_end/sales_report'); ?>">Shipping</a></li>
						</ul>
					</li>
					<li <?PHP if($this->uri->segment(2) == "admin_data") echo "class='treeview active'"; else echo "class='treeview'"; ?>><a href="<?PHP echo site_url('back_end/admin_data'); ?>">
						<i class="fa fa-user"></i> <span>Admin Management</span></a>
					</li>
					<?PHP } ?>
					<li class="header">
						<div id="clock"></div>								
					</li>
				</ul>
			</section>
		</aside>
	</body>
</html>
										
<script type="text/javascript">
	function startTime() {
		var today=new Date(),
			curr_hour=today.getHours(),
			curr_min=today.getMinutes(),
			curr_sec=today.getSeconds();
	 curr_hour=checkTime(curr_hour);
		curr_min=checkTime(curr_min);
		curr_sec=checkTime(curr_sec);
		document.getElementById('clock').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
	}
	function checkTime(i) {
		if (i<10) {
			i="0" + i;
		}
		return i;
	}
	setInterval(startTime, 500);
</script>



					