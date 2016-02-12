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

                
        <script type="text/javascript" src="<?php echo assets_url('js/jquery-1.11.3.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo assets_url('js/app.min.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/jquery.dataTables.min.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/dataTables.responsive.min.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/bootstrap3-wysihtml5.all.min.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/ckeditor.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/bootstrap-datepicker.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/fusioncharts.js');?>"></script>
        <script type="text/javascript" src="<?PHP echo assets_url('js/themes/fusioncharts.theme.carbon.js');?>"></script>
    </head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
    <header class="main-header">
            <a href="#" class="logo">
                 <span class="logo-mini"><b>E</b>L</span>
                 <img src="<?php echo base_url('assets/images/logo1.png');?>" title="ELKASSHOP"/>              
                 <img src="<?php echo base_url('assets/images/logo_black.png');?>" title="ELKASSHOP"/>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle text-gray" data-toggle="offcanvas" role="button">
                <span class="sr-only">Navigation</span>
            </a> 
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav ">

                    <li class="header">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
				  <img src="<?php echo assets_url()?>images/user2-160x160.jpg" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
				  <p>Mustofa Yuli Rachmad</p>
				  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
            </div>
            <li class="header">Control Menu</li>
            <li <?PHP if($this->uri->segment(2) == "") echo "class='active'";?>><a href="<?php echo site_url(); ?>index.php/back_end/back_end"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li <?PHP if($this->uri->segment(2) == "patient_data" || $this->uri->segment(2) == "doctor_data") echo "class='treeview active'"; else echo "class='treeview'";?>>
					<a><i class="fa fa-tags"></i> <span>Catalogue</span> <i class="fa fa-angle-left pull-right"></i></a>
                     <ul class="treeview-menu">
                        <li <?PHP if($this->uri->segment(2) == "patient_data") echo "class='active'";?>><a href="<?PHP echo site_url('index.php/back_end/category'); ?>"> Category</a></li>
                        <li <?PHP if($this->uri->segment(2) == "doctor_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/doctor_data'); ?>">Product</a></li>
                        <li <?PHP if($this->uri->segment(2) == "doctor_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/doctor_data'); ?>">Manufactur</a></li>
                    </ul>
                </li>
                <li <?PHP if($this->uri->segment(2) == "article_compose" || $this->uri->segment(2) == "article_data") echo "class='treeview active'"; else echo "class='treeview'";?>>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span>Sales</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li <?PHP if($this->uri->segment(2) == "article_compose") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_compose'); ?>">Order</a></li>
                        <li <?PHP if($this->uri->segment(2) == "article_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Return</a></li>
                    </ul>
                </li>
                 <li <?PHP if($this->uri->segment(2) == "article_compose" || $this->uri->segment(2) == "article_data") echo "class='treeview active'"; else echo "class='treeview'";?>>
                    <a href="#"><i class="fa fa-files-o"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li <?PHP if($this->uri->segment(2) == "article_compose") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_compose'); ?>">Sales</a></li>
                        <li <?PHP if($this->uri->segment(2) == "article_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Product</a></li>
                        <li <?PHP if($this->uri->segment(2) == "article_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Wishlist</a></li>
                        <li <?PHP if($this->uri->segment(2) == "article_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Returns</a></li>
                        <li <?PHP if($this->uri->segment(2) == "article_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Customer</a></li>
                    </ul>
                </li>
                <li <?PHP if($this->uri->segment(2) == "recipe_data") echo "class='active'";?>><a href="<?PHP echo site_url('index.php/back_end/admin_data'); ?>"><i class="fa fa-cog"></i> <span>Admin Management</span>
                </li>
        </ul>
    </section>  
</aside>
</html>