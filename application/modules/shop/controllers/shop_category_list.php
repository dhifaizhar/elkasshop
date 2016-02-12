<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop_Category_List extends MX_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->library('template');

    }

    public function index(){
        $this->load->view('head_shop');
		$this->load->view('product_category');
        $this->load->view('foot_shop');
    }
}
?>