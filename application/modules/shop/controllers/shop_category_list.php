<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop_Category_List extends MX_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->library('template');
        $this->load->model('product_m');

    }

    public function index($offset=NULL) {
        $config['base_url'] = base_url().'shop/shop_category_list/index/';
        $config['total_rows'] = $this->db->get('el_product')->num_rows();
        $config['per_page'] = 8;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="pagination" id="search_page_pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_close'] = '</a></li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = FALSE;
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = TRUE;
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['page_query_string'] = FALSE;

        $data['records'] = $this->product_m->data_product($config['per_page'],$offset);
        $this->load->library('pagination',$config);
        $this->pagination->initialize($config);


        $this->load->view('head_shop');
        $this->load->view('product_category',$data);
        $this->load->view('foot_shop');
    }

    public function category_list($category_id,$offset = NULL){
        $config['base_url'] = base_url().'shop/shop_category_list/category_list/'.$category_id.'index/';
        $config['total_rows'] = $this->db->get_where('el_product',array('category_id' => $category_id))->num_rows();
        $config['per_page'] = 4;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="pagination" id="search_page_pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_close'] = '</a></li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = FALSE;
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = TRUE;
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['page_query_string'] = FALSE;

        $data['records'] = $this->product_m->data_product_category($category_id, $config['per_page'],$offset);
        $this->load->library('pagination',$config);
        $this->pagination->initialize($config);


        $this->load->view('head_shop');
        $this->load->view('product_category',$data);
        $this->load->view('foot_shop');
    }
}
?>