<!DOCTYPE html>

<html>
<head>
    <title>Elkasshop-Admin | Dashboard</title>
</head>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Dashboard | <small>Overview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?PHP echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">dashboard</li>
            </ol>
        </section>

        <section class="content">

            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
						<div class="title-body">
							
						</div>
						    <p>Total Orders</p>
                            <h3><i class="fa fa-shopping-cart"> </i></h3>
                           
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?PHP echo site_url('admin/patient_data'); ?>" class="small-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
							<p>Total Sales</p>
                            <h3><i class="fa fa-credit-card"></i></h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?PHP echo site_url('admin/doctor_data'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <p>Total Customers</p>
							 <h3><i class="fa fa-user"> </i></h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?PHP echo site_url('admin/article_data'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                             <p>Total Returns</p>
							 <h3><i class="fa fa-retweet"> </i></h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="<?PHP echo site_url('admin/recipe_data'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
				
            </div>
        </section>
    </div>
</html>


