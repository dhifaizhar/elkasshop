<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ELKASSHOP | shop</title>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/product_thumbnail.css');?>"/>
    </head>
    <body id="body">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?PHP echo site_url();?>"><i class="fa fa-home"></i> Beranda</a></li>
                <li class="active">Cash Drawer</li>
            </ol>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 panel">
                    <div class="panel-heading">
                        <div class="panel-title text-center"><h4>FILTER</h4></div>
                    </div>
                    <div class="panel-body">
                        <form method="post" class="form-group">
                            <hr/><p class="text-center">Rentang Harga</p><hr/>
                            <input type="text" name="min" class="form-control form-group" placeholder="Min"/>
                            <input type="text" name="max" class="form-control form-group" placeholder="Maks"/>
                            <br/>
                            <div class="form-group text-center">
                                <button name="min" class="btn btn-danger" title="bersihkan" data-toggle="tooltip">
                                    <span class="fa fa-trash-o"></span>
                                </button>
                                <button name="max" class="btn btn-success" title="telusuri" data-toggle="tooltip">
                                    <span class="fa fa-filter"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 panel" >
                    <div class="panel-heading" style="height: 60px;">
                        <span class="pull-left">
                            <button href="#" class="btn btn-primary" title="tampilan daftar" data-toggle="tooltip">
                                <span class="fa fa-th-list"></span>
                            </button>
                            &nbsp;
                            <button href="#" class="btn btn-primary"title="tampilan kotak" data-toggle="tooltip">
                                <span class="fa fa-th-large"></span>
                            </button>
                        </span>
                        <span class="pull-right">
                            <form method="post" class="form-group form-inline">
                                <span><span class="hidden-xs">Urut Berdasarkan &nbsp;</span>
                                    <select class="form-control" style="width: 160px;height: 35px;">
                                        <option>Standar</option>
                                        <option>Terbaru</option>
                                        <option>Terlama</option>
                                        <option>Termurah</option>
                                        <option>Termahal</option>
                                        <option>A - Z</option>
                                        <option>Z - A</option>
                                    </select>
                                </span>
                            </form>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="show">
                            <div id="content">
                                <ul class="gallery">
                                    <?php $offset = $this->uri->segment(3,0)+1;foreach($records as $row) {?>
                                        <li>
                                            <div class="etalase_in">
                                                <div class="etalase-img">
                                                    <img class="img-responsive" src="<?php echo assets_url('images/product_img/'.$row->image.'');?>" alt="cd"/>
                                                </div>
                                                <div class="etalase-content">
                                                    <?PHP echo $row->product_name;?><br/>
                                                    <?PHP echo $row->price;?><br/><br/>
                                                </div>
                                                <div class="etalase-foot">
                                                    <a href="<?php echo site_url('shop/shop_category_detail/category_detail/'.$row->product_id);?>" data-toggle="tooltip" data-placement="top" title="detail">
                                                        <div class="btn btn-primary"><span class="fa fa-eye" ></span></div>
                                                    </a>
                                                    <a type="button" onclick="add_cart(<?php echo $row->product_id?>)" title="add to cart" data-toggle="tooltip" data-placement="top">
                                                        <div class="btn btn-success"><span class="fa fa-cart-plus" ></span></div>
                                                    </a>
                                                    <a href="<?php echo site_url();?>" title="wish list" data-toggle="tooltip" data-placement="top">
                                                        <div class="btn btn-warning"><span class="fa fa-heart-o"></span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } $offset++;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div align="center"><?php echo $this->pagination->create_links();?></div>
                    </div>
                </div>
            </div>
            <br/>
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
            <div class="row" id="page">
                <?php $this->load->view('manufacture');?>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        $(function(){
            $('body').on('click','ul#search_page_pagination>li>a',function(e){
                e.preventDefault();
                var Pagination_url = $(this).attr('href');
                $.ajax({
                    url:Pagination_url,
                    data: "ajax=0",
                    type:'POST',
                    success:function(data){
                        var $page_data = $(data);
                        $('#show').html($page_data.find('div#content'));
                        $('.pagination li').removeClass('active');
                    }
                });
            });
            return false;
        });

        function add_cart(id){
            var target="<?php echo site_url('shop/shop_cart/add_cart')?>"+"/"+ id;
            var xdata={ ID : id }
            $.ajax({
                type: "POST",
                url: target,
                data: xdata,
                success:function(data){
                    alert('Keranjang berhasil di tambah');
                    $("#body").html(data);
                }
            }).done(function(e) {
                $("#show")[0].reset();
            });
        }
    </script>
</html>
