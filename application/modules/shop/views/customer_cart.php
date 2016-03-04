<!DOCTYPE html>
<html lang="en" xmlns:form="http://www.w3.org/1999/html">
    <head>
        <title>ELKASSHOP | shop</title>
        <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/product_thumbnail.css');?>"/>
    </head>
    <body id="body">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?PHP echo site_url();?>"><i class="fa fa-home"></i> Beranda</a></li>
                <li>Shop</li>
                <li class="active">Keranjang Belanja</li>
            </ol>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title text-center"><h4>Keranjang Belanja Anda</h4></div>
                        </div>
                        <div class="panel-body">
                            <?php $query =  $this->cart_m->data_cart_count()->row();?>
                            <div id="list"><?php $this->load->view('cart_list');?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4>Detail Pesanan <span class="small pull-right">Item : (<?php echo $query->qty;?>)</span></h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-responsive">
                                <tr>
                                    <th>PRODUK</th>
                                    <th>KUANTITAS</th>
                                    <th>HARGA</th>
                                </tr>
                                <?PHP
                                $total = 0;
                                foreach($cart->result() as $row) {
                                    $discount = $row->discount;
                                    $subtotal = $row->price - ($discount/100*$row->price); ?>
                                    <tr>
                                        <td><?PHP echo $row->product_name;?></td>
                                        <td class="text-center"><?PHP echo $row->quantity;?></td>
                                        <td class="text-center"><?PHP echo 'Rp '.$subtotal;?></td>
                                    </tr>
                                <?PHP $total = $total + $subtotal;}?>
                                <tr><td colspan="3"><td></tr>
                                <tr style="font-weight: bold;color: #256D9E;">
                                    <td colspan="2"> Total Belanja</td>
                                    <td class="text-center" colspan="2">Rp <?PHP echo $total;?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="javascript:history.back()" class="btn btn-primary">Lanjutkan berbelanja</a>
                            <a href="<?php echo site_url('shop/checkout');?>" type="button" class="btn btn-warning">Proses Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"><?php $this->load->view('product_bestselling');?></div>
        </div>
    </body>
</html>
<script type="text/javascript">
function hapus(param){
        var target="<?php echo site_url('shop/shop_cart/delete_cart');?>"+"/"+param+"/"+"true";
        var xdata={ ID : param };
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
