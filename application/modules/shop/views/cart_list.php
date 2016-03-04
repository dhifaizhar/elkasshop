<form id="cart_d">
    <table class="table table-responsive">
        <tbody>
        <?PHP
        foreach($cart->result() as $row) {
            $discount = $row->discount;
            $total = $row->price - ($discount/100*$row->price);?>
            <tr>
                <td width="125px" class="text-center">
                    <img class="img-responsive center-block" src="<?php echo assets_url('images/product_img/'.$row->image);?>" alt="cd"/>
                </td>
                <td width="250px">
                    <b><?PHP echo $row->product_name;?></b>
                    <br/><?PHP echo 'Deskripsi Produk : '.$row->description;?>
                    <br/><?PHP echo 'Kuantitas : '.$row->quantity;?>
                </td>
                <td width="200px">
                    <br/><?PHP echo 'Harga  : Rp '.$row->price;?>
                    <br/><?PHP echo 'Diskon : '.$discount.' %';?>
                    <br/><p style="font-weight: bold;color: #256D9E;"><?PHP echo 'Total  : Rp '.$total;?></p>
                </td>
                <td width="10px" class="text-center">
                    <span class="fa fa-remove text-primary" onclick="hapus(<?php echo $row->cart_id?>)" title="hapus item" data-toggle="tooltip"></span>
                </td>
            </tr>
        <?PHP } if(! $cart->num_rows()) { ?>
            <tr> <td colspan="4" align="center">Keranjang anda kosong</td> </tr>
        <?PHP } ?>
        </tbody>
    </table>
</form>