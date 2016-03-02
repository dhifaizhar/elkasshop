<!DOCTYPE html>
<html lang="en" xmlns:form="http://www.w3.org/1999/html">
    <head>
        <title>ELKASSHOP | shop</title>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/product_thumbnail.css');?>"/>
    </head>
    <body id="body">
        <div class="container">
            <br/>
            <ol class="breadcrumb pull-right">
                <li><a href="<?PHP echo site_url();?>"><i class="fa fa-home"></i> Beranda</a></li>
                <li>Shop</li>
                <li class="active">Keranjang Belanja</li>
            </ol>
            <div class="clearfix"></div>
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title text-center"><h3>Keranjang Belanja Anda</h3></div>
                </div>
                <div class="panel-body">
                    <?php $query =  $this->cart_m->data_cart_count()->row();?>
                    <span>Jumlah Item : (<?php echo $query->qty;?>)</span>
                    <div id="list"><?php $this->load->view('cart_list');?></div>
                </div>
                <div class="panel-footer text-right">
                    <span>
                        <a href="javascript:history.go(-1)" class="btn btn-success">Lanjutkan berbelanja</a>
                        <a href="<?php echo site_url('shop/checkout');?>" type="button" class="btn btn-info">Proses Pembayaran</a>
                    </span>
                </div>
            </div>
            <br/>
        </div>
    </body>
</html>
<script type="text/javascript">
function hapus(param){
        var target="<?php echo site_url('shop/shop_cart/delete_cart');?>"+"/"+param+"/"+"true";
        var xdata={ ID : param }
        var konfirmasi=confirm("Anda yakin ingin menghapus data ini?");
        if(konfirmasi == true){
            $.ajax({
                type: "POST",
                url: target,
                data: xdata,
                success:function(data){
                    $("#body").html(data);
                }
            }).done(function(e) {
                $("form")[0].reset();
            });
        }
    }
</script>
