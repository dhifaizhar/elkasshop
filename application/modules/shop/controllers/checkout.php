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
        $data['cart'] = $this->cart_m->data_cart();
        $data['get'] = $this->cart_m->data_cart_count()->row();

        $this->load->view('head_shop');
        $this->load->view('checkout_shop',$data);
        $this->load->view('foot_shop');
    }
}
?>