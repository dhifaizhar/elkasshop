<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/product_thumbnail.css');?>"/>
</head>
<body>
    <div class="container">
        <br/>
        <div class="panel">
            <div class="panel-heading">
                <h2 class="text-center">BRAND POPULER</h2>
            </div>
            <div class="panel-body">
                <div id="carousel0" class="owl-carousel">
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/manufactur_img/acer.jpg');?>" alt="Acer" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/manufactur_img/lenovo.png');?>" alt="Lenovo" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/manufactur_img/asus.png');?>" alt="Asus" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/manufactur_img/evercoss.png');?>" alt="Evercoss" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/manufactur_img/acer.jpg');?>" alt="Acer" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/manufactur_img/lenovo.png');?>" alt="Lenovo" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/manufactur_img/asus.png');?>" alt="Asus" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="<?php echo assets_url('images/manufactur_img/evercoss.png');?>" alt="Evercoss" class="img-responsive" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
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
