<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ELKASSHOP | shop</title>
    </head>
    <body>
        <div class="container">
            <div id="banner" class="carousel" data-ride="carousel" data-interval="5000" style="margin: 35px 0px 20px 15px;">
                <ol class="carousel-indicators">
                    <li data-target="#banner" data-slide-to="0" class="active"></li>
                    <li data-target="#banner" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" >
                    <div class="item active">
                        <img class="first-slide center-block" src="<?php echo assets_url('images/banner_img/banner01.png');?>" alt="banner#1">
                        <div class="carousel-caption slide" ></div>
                    </div>
                    <div class="item">
                        <img class="second-slide center-block" src="<?php echo assets_url('images/banner_img/banner02.png');?>" alt="banner#2">
                        <div class="carousel-caption slide" >
                            <div class="text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row"><?php $this->load->view('product_bestselling');?></div>

            <div class="row">
                <div class="col-lg-4">
                    <img class="img-responsive" src="<?php echo assets_url('images/banner_img/home2_banner.jpg');?>" alt="banner#2">
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive" src="<?php echo assets_url('images/banner_img/home3_banner.jpg');?>" alt="banner#2">
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive" src="<?php echo assets_url('images/banner_img/home4_banner.jpg');?>" alt="banner#2">
                </div>
            </div>

            <div class="row"><?php $this->load->view('product_new');?></div>

            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive center-block" src="<?php echo assets_url('images/banner_img/banner-twitter.png');?>" alt="banner#2">
                </div>
            </div>

            <div class="row">
                <?php $this->load->view('manufacture');?>
            </div>
        </div>
    </body>
</html>
