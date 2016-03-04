<!DOCTYPE html>
<html lang="en">
<head>
    <title>ELKASSHOP | Checkout</title>
</head>
<body>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?PHP echo site_url();?>"><i class="fa fa-home"></i> Beranda</a></li>
            <li>Checkout</li>
            <li class="active">Pengiriman</li>
        </ol>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-7">
                <div class="panel">
                    <div class="panel-heading">
                        Detail Transaksi
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo site_url('shop');?>">
                            <div id="check1">
                                <div class="text-center">
                                    Lokasi Pengiriman<hr/>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4 text-left">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-8 text-left">
                                        <input type="text" name="nama" class="form-control" placeholder="nama Panjang" required/>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4 text-left">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-8 text-left">
                                        <textarea type="text" name="alamat" class="form-control" placeholder="Alamat Rumah" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4 text-left">
                                        <label>Provinsi</label>
                                    </div>
                                    <div class="col-md-8 text-left">
                                        <select name="provinsi" class="form-control form-group" required>
                                            <option>Pilih Provinsi</option>
                                            <option>DKI Jakarta</option>
                                            <option>Banten</option>
                                            <option>Jawa Barat</option>
                                            <option>Jawa Tengah</option>
                                            <option>Jawa Timur</option>
                                            <option>Bali</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4 text-left">
                                        <label>Kabupaten/Kota</label>
                                    </div>
                                    <div class="col-md-8 text-left">
                                        <select name="provinsi" class="form-control form-group" required>
                                            <option>Pilih Kabupaten/Kota</option>
                                            <option>Jakarta</option>
                                            <option>Kabupaten Bogor</option>
                                            <option>Kota Bogor</option>
                                            <option>Tangerang Selatan</option>
                                            <option>Kabupaten Bandung</option>
                                            <option>Kota Bandung</option>
                                            <option>Kabupaten Kuningan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4 text-left">
                                        <label>Kecamatan</label>
                                    </div>
                                    <div class="col-md-8 text-left">
                                        <input type="text" name="nama" class="form-control" placeholder="Kecamatan" required/>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4 text-left">
                                        <label>Phone Number</label>
                                    </div>
                                    <div class="col-md-8 text-left">
                                        <div class="input-group">
                                            <span class="input-group-addon">+62</span>
                                            <input type="text" name="phone" class="form-control" placeholder="Nomer Telepon" required>
                                        </div>
                                    </div>
                                </div>
                                <a type="button" class="btn btn-success pull-right" id="nextCheck">Lanjutkan &gt;</a>
                            </div>
                            <div id="check2">
                                <div class="text-center">
                                    Metode Pembayaran<hr/>
                                </div>
                                <div class="form-group">
                                    <div class="form-control text-center">
                                        <input type="radio" name="metode" id="m1"/> CoD (Cash on Delivery)
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="metode" id="m2"/> Transfer Tunai
                                    </div>
                                </div>
                                <div id="cod">
                                    Pembayaran di tempat.
                                    Pengiriman untuk waktu 3-4 hari kerja.<br/><br/>
                                </div>
                                <div id="tb">
                                    <div class="row form-group">
                                        <div class="col-md-4 text-left">
                                            <label>Nama Pengirim</label>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Pengirim"/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4 text-left">
                                            <label>Pilih Bank</label>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <select name="provinsi" class="form-control form-group">
                                                <option>Pilih</option>
                                                <option>BTN</option>
                                                <option>BNI</option>
                                                <option>BRI</option>
                                                <option>BCA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <a type="button" class="btn btn-success" id="prevCheck">Kembali &lt;</a>
                                <input class="btn btn-success form-group pull-right" type="submit" value="Lanjutkan"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="panel">
                    <div class="panel-heading">
                        Detail Pesanan (<?php echo $get->qty;?> Barang)
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-responsive no-border">
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
                            <?PHP $total = $total + $subtotal;} ?>
                            <tr style="font-weight: bold;color: #256D9E;">
                                <td colspan="2"> <b>Total Belanja</b><br><i class="small">(termasuk PPN)</i></td>
                                <td class="text-center" colspan="2">Rp <?PHP echo $total;?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#check2').hide();
        $('#tb').hide();
        $('#cod').hide();
    });
    $("#nextCheck").click(function(){
        $("#check1").slideToggle('normal');
        $('#check2').slideToggle('slow');
    });
    $("#prevCheck").click(function(){
        $("#check2").slideToggle('normal');
        $('#check1').slideToggle('slow');
    });
    $("#m1").focus(function(){
        $("#cod").show();
        $('#tb').hide();
    });
    $("#m2").focus(function(){
        $("#tb").show();
        $('#cod').hide();
    });
</script>