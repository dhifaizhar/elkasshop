<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Back_End extends MX_Controller{
    public function __construct(){
        parent::__construct();
		
		 $this->load->library('template');
    }

    public function index(){
	
		$this->load->view('head_back');    
		$this->load->view('dashboard');
        $this->load->view('foot_back');
    }
	
	public function admin_data(){
		$this->load->view('head_back');    
		$this->load->view('admin_data');
       
	}
	
	public function categories(){
		$this->load->view('head_back');    
		$this->load->view('category');
        $this->load->view('foot_back');
		
	}
	
	public function product(){
		$this->load->view('head_back');    
		$this->load->view('product');
        $this->load->view('foot_back');
		
	}
	
	public function manufactur(){
		$this->load->view('head_back');    
		$this->load->view('manufactur');
        $this->load->view('foot_back');
		
	}
	
	public function order(){
		$this->load->view('head_back');    
		$this->load->view('order');
        $this->load->view('foot_back');
		
	}
	
	public function return_product(){
		$this->load->view('head_back');    
		$this->load->view('return');
        $this->load->view('foot_back');
		
	}
}
?>