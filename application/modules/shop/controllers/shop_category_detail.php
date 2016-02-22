<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop_Category_Detail extends MX_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->library('template');
        $this->load->model('product_m');

    }

    public function category_detail($product_id) {
        $data['records'] = $this->product_m->data_product_detail($product_id);

        $this->load->view('head_shop');
        $this->load->view('product_detail',$data);
        $this->load->view('foot_shop');
    }
}
?>