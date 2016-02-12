<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ELKASSHOP | shop</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-responsive" src="<?php echo assets_url('images/home2_banner.jpg');?>" alt="banner#2">
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive" src="<?php echo assets_url('images/home3_banner.jpg');?>" alt="banner#2">
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive" src="<?php echo assets_url('images/home4_banner.jpg');?>" alt="banner#2">
                </div>
            </div>

            <?php $this->load->view('product_bestselling');?>

            <br/><br/>
            <div class="row">
                <img class="img-responsive center-block" src="<?php echo assets_url('images/banner-twitter.png');?>" alt="banner#2">
            </div>

            <?php $this->load->view('product_new');?>

            <br/><br/>
            <div class="row">
                <br/>
                <h2 class="text-center">BRAND POPULER</h2>
                <hr/><br/>
                <div id="carousel0" class="owl-carousel">
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/acer.jpg');?>" alt="Acer" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/lenovo.png');?>" alt="Lenovo" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/asus.png');?>" alt="Asus" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/evercoss.png');?>" alt="Evercoss" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/acer.jpg');?>" alt="Acer" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/lenovo.png');?>" alt="Lenovo" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/asus.png');?>" alt="Asus" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/evercoss.png');?>" alt="Evercoss" class="img-responsive" /></a>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#carousel0").owlCarousel({
                            items: 4,
                            autoPlay: 3000,
                            itemsDesktop : [500,5],
                            itemsDesktopSmall : [500,4],
                            itemsTablet: [400,3],
                            itemsMobile : [300,2]
                        });
                    });
                </script>
            </div>
        </div>
        <br/><br/>
    </body>
</html>
