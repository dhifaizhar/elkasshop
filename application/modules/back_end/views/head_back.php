<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,intial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>"/>
		<link type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap3-wysihtml5.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/skins/_all-skins.min.css');?>">
			
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/app.min.js"></script>
		<script type="text/javascript" src="<?PHP echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
		<script type="text/javascript" src="<?PHP echo base_url('assets/js/dataTables.responsive.min.js');?>"></script>
		<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/bootstrap3-wysihtml5.all.min.js"></script>
		<script type="text/javascript" src="<?PHP echo base_url('assets/js/ckeditor.js');?>"></script>
		<script type="text/javascript" src="<?PHP echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
		<script type="text/javascript" src="<?PHP echo base_url('assets/js/fusioncharts.js');?>"></script>
		<script type="text/javascript" src="<?PHP echo base_url('assets/js/themes/fusioncharts.theme.carbon.js');?>"></script>
	</head>
</html>

<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
	<header class="main-header">
            <a href="#" class="logo">
               
                 <img src="<?php echo base_url('assets/images/logo.png');?>" title="ELKASSHOP"/>
            </a>
			<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="sidebar-toggle text-gray" data-toggle="offcanvas" role="button">
                <span class="sr-only">Navigation</span>
            </a> 
			<div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user text-gray"></span>
                            <span class="hidden-xs"><?PHP ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <span class="glyphicon glyphicon-user fa-5x text-gray"></span>
                                <p>
                                    <br/>
                                    <i></i><br/>
                                    <small></small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="text-center">
                                    <a href="<?PHP echo site_url(); ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
		</nav>
	</div>
	
<aside class="main-sidebar">
    <section class="sidebar">
		<form action="#" method="get" class="sidebar-form hide">
           <div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="search...">
				<span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
				</span>
           </div>
        </form>
		
		 <ul class="sidebar-menu">
                <li class="header">Control Menu</li>
				<li <?PHP if($this->uri->segment(2) == "") echo "class='active'";?>><a href="<?PHP echo site_url('admin'); ?>"><i class="fa fa-check"></i> <span>Overview</span></a></li>
                <li <?PHP if($this->uri->segment(2) == "patient_data" || $this->uri->segment(2) == "doctor_data") echo "class='treeview active'"; else echo "class='treeview'";?>>
                    <a><i class="fa fa-user-md"></i> <span>User Data</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li <?PHP if($this->uri->segment(2) == "patient_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/patient_data'); ?>">Patient</a></li>
                        <li <?PHP if($this->uri->segment(2) == "doctor_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/doctor_data'); ?>">Doctor</a></li>
                    </ul>
                </li>
                <li <?PHP if($this->uri->segment(2) == "article_compose" || $this->uri->segment(2) == "article_data") echo "class='treeview active'"; else echo "class='treeview'";?>>
                    <a href="#"><i class="fa fa-files-o"></i> <span>Article</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li <?PHP if($this->uri->segment(2) == "article_compose") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_compose'); ?>">New Posting</a></li>
                        <li <?PHP if($this->uri->segment(2) == "article_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/article_data'); ?>">Posted</a></li>
                    </ul>
                </li>
                <li <?PHP if($this->uri->segment(2) == "consultation_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/consultation_dat'); ?>a"><i class="fa fa-file-text-o"></i> <span>Consultation</span></a></li>
                <li <?PHP if($this->uri->segment(2) == "recipe_data") echo "class='active'";?>><a href="<?PHP echo site_url('admin/recipe_data'); ?>"><i class="fa fa-medkit"></i> <span>Medicine Recipe Request</span></a></li>
                <li><br/><br/><br/><br/><br/><br/><br/><br/></li>
               
		</ul>
	</section>	
</aside>
<style type="text/css">
    p{
        margin-top: 15px;
    }
</style>