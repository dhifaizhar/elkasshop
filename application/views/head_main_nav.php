<!DOCTYPE html>
<html lang="en">
<nav class="navbar navbar-inverse" id="nav_bottom_head">
    <div class="container">
        <div class="navbar-header">
            <div class="hidden-xs hidden-sm hidden-md visible-lg">
                <a class="navbar-brand" href="<?php echo site_url();?>" >
                    <img class="center-block" src="<?php echo base_url('assets/images/logo.png');?>" title="ELKASSHOP"/>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <form id="search_head" method="post" role="search" class="navbar-form pull-right" action="<?php echo site_url('shop/shop_category_list')?>">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="cari barang, merek, atau kategori">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden-lg visible-xs visible-sm visible-md">
                <a class="navbar-brand" href="<?php echo site_url();?>" >
                    <img src="<?php echo base_url('assets/images/logo.png');?>" title="ELKASSHOP" height="65px"/>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="clearfix"></div>
                <form method="post" role="search" action="<?php echo site_url('shop/shop_category_list')?>">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="cari barang, merek, atau kategori">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="collapse navbar-collapse text-center" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle category-bar" data-toggle="dropdown" >
                        <span class="fa fa-align-justify"></span> &nbsp;&nbsp; KATEGORI &nbsp;&nbsp; <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" id="ctg_menu">
                        <?php $query = $this->db->get('el_category'); foreach($query->result() as $row){?>
                            <li ><a href="<?php echo site_url('shop/shop_category_list/category_list/'.$row->category_id);?>"> <?php echo $row->category_name?> </a></li>
                        <?php }?>
                    </ul>
                </li>
                <li><a href="<?php echo site_url();?>"> Beranda </a></li>
                <li><a href="<?php echo site_url();?>"> Produk Baru </a></li>
                <li><?php $this->load->model('cart_m'); $query =  $this->cart_m->data_cart();?>
                    <a href="<?php echo site_url('shop/shop_cart');?>" data-toggle="tooltip" data-placement="top" title="keranjang">
                        <div class="fa fa-shopping-cart fa-1x"></div>
                        <span class="badge"><?php echo $query->num_rows();?></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</nav>
</html>
