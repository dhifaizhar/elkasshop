<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop_Cart extends MX_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->library('template');
        $this->load->helper('form');
        $this->load->library('cart');
        $this->load->model('cart_m');

    }

    public function index(){
        $this->cart();
    }
    private function cart(){
        $ajax = $this->uri->segment(5);
        //$action = $this->uri->segment(4);

        if(!isset($ajax)){$ajax = false;}

        //getdata
        $data['cart']=$this->cart_m->data_cart();

        //showdata
        if($ajax){
            $this->load->view('head_shop');
            $this->load->view('customer_cart',$data);
            $this->load->view('foot_shop');
        }else{
            $this->load->view('head_shop');
            $this->load->view('customer_cart',$data);
            $this->load->view('foot_shop');
        }
    }

    public function add_cart($product_id){
        $this->cart_m->data_cart_add($product_id);
        return false;
    }
    public function delete_cart($cart_id){
        $query = $this->cart_m->data_cart_delete($cart_id);
        if($query){
            $this->cart();
        }
    }
}
?>