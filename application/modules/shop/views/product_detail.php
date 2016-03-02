<!DOCTYPE html>
<html lang="en" xmlns:form="http://www.w3.org/1999/html">
    <head>
        <title>ELKASSHOP | shop</title>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/product_thumbnail.css');?>"/>
    </head>
    <body>
        <div class="container">
            <br/>
            <?php foreach($records as $row) {?>
            <ol class="breadcrumb pull-right">
                <li><a href="<?PHP echo site_url();?>"><i class="fa fa-home"></i> Beranda</a></li>
                <li><?php echo $row->category_name;?></li>
                <li class="active"><?php echo $row->product_name;?></li>
            </ol>
            <br/>
            <div class="panel" >
                <div class="panel-heading">
                    <div class="panel-title"><h4>Detail Barang</h4></div>
                    <p>Manufactured : <span class="text-muted small">PT Mozaik Bintang Persada</span></p>
                    <hr/>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3 col-xs-9">
                            <img class="img-responsive" src="<?php echo assets_url('images/product_img/'.$row->image);?>" alt="cd"/>
                        </div>
                        <div class="col-lg-1 col-xs-3">
                            <img class="img-responsive" src="<?php echo assets_url('images/product_img/'.$row->image);?>" alt="cd"/>
                            <img class="img-responsive" src="<?php echo assets_url('images/product_img/'.$row->image);?>" alt="cd"/>
                            <img class="img-responsive" src="<?php echo assets_url('images/product_img/'.$row->image);?>" alt="cd"/>
                            <img class="img-responsive" src="<?php echo assets_url('images/product_img/'.$row->image);?>" alt="cd"/>
                        </div>
                        <div class="col-lg-5 col-xs-12">
                            <div class="detail text-justify">
                                Deskripsi singkat dari barang.deskripsi singkat dari barang.deskripsi singkat dari barang.
                                deskripsi singkat dari barang.deskripsi singkat dari barang.deskripsi singkat dari barang.
                                deskripsi singkat dari barang.deskripsi singkat dari barang.deskripsi singkat dari barang.
                                deskripsi singkat dari barang.deskripsi singkat dari barang.deskripsi singkat dari barang.
                            </div>
                            <div class="cost">
                                <h4><?php echo 'Rp '.$row->price;?></h4>
                                <p>Sebelum : <strike>Rp 150.000</strike><br>Diskon : <strong>20%</strong></p>
                            </div>
                            <form>
                                <span>Jumlah : <input class="box"/></span>&nbsp;<input type="button" class="btn btn-info" value="Beli Produk"/>
                            </form>
                        </div>
                        <div class="col-lg-3 col-xs-12">
                            Fitur Pembelian Barang
                        </div>
                    </div>
                </div>
            </div>
            <?php };?>

            <br/><br/>
            <div class="row" id="page">
                <?php $this->load->view('manufacture');?>
            </div>
        </div>
        <br/><br/>
    </body>
</html>
