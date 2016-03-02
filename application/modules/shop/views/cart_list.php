<form id="cart_d">
    <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th class="text-center">Nama produk</th>
            <th>Deskripsi</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?PHP
        $i = 0;
        foreach($cart->result() as $row) {?>
            <tr>
                <td width="10px" class="text-center"><?php $i++; echo $i;?></td>
                <td width="100px"><img class="img-responsive center-block" src="<?php echo assets_url('images/product_img/'.$row->image);?>" alt="cd"/></td>
                <td width="300px" class="text-center"><?PHP echo $row->product_name;?></td>
                <td><?PHP echo $row->description;?></td>
                <td width="20px"><?PHP echo 'x'.$row->quantity;?></td>
                <td width="150px"><?PHP echo 'Rp '.$row->price;?></td>
                <td width="20px" class="text-center">
                    <a class="glyphicon glyphicon-remove-sign text-danger" onclick="hapus(<?php echo $row->cart_id?>)" title="hapus"></a>
                </td>
            </tr>
        <?PHP } if(! $cart->num_rows()) { ?>
            <tr> <td colspan="7" align="center">Keranjang anda kosong</td> </tr>
        <?PHP } ?>
        </tbody>
        <tfoot class="text-center">
        <tr>
            <td colspan="5"> Total Belanja</td>
            <?php $query =  $this->cart_m->data_cart_count()->row();?>
            <td colspan="2">Rp <?PHP echo $query->total;?></td>
        </tr>
        </tfoot>
    </table>
</form>