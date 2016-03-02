<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Checkout extends MX_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('cart_m');
    }

    public function index(){
        $this->checkout_shipping();
    }

    public function checkout_shipping(){
        $data['jumlah']=$this->cart_m->data_cart_count()->row();
        $data['detail']=$this->cart_m->data_cart();
        $data['diskon']=$data['jumlah']->total*0.1;
        $data['total']=$data['jumlah']->total - $data['diskon'];


        $this->load->view('head_shop');
        $this->load->view('checkout_shop',$data);
        $this->load->view('foot_shop');
    }
}
?>