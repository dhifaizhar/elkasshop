<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Back_End extends MX_Controller{
    public function __construct(){
        parent::__construct();
		
		 $this->load->library('template');
		 $this->load->model("category_m");
		 $this->load->model("manufactur_m");
		 $this->load->model("admin_m");
    }

    public function index(){	   
		$this->load->view('admin/login');
    }
	
	 public function dashboard(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('dashboard');
		}
		 else{
			 redirect('back_end');
		 }	
		 
		
    }
	
	public function admin_data(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('admin_data');
		
			}
		 else{
			 redirect('back_end');
		 }
	}
	
	public function categories(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('category');
			
			}
		 else{
			 redirect('back_end');
		 }
	}
	
	public function product(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('product');
			}
		 else{
			 redirect('back_end');
		 }
	}
	
	public function manufactur_view(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('manufactur');
	
			}
		 else{
			 redirect('back_end');
		 }
	}
	
	public function order(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('order');
		
			}
		 else{
			 redirect('back_end');
		 }
	}
	
	public function return_product(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('return');
		
			}
		 else{
			 redirect('back_end');
		 }
	}
	
	public function sales_report(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('order_report');
	
			}
		 else{
			 redirect('back_end');
		 }
	}
	
	public function product_report(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('product_report');
		
			}
		 else{
			 redirect('back_end');
		 }		
	}
	
	public function return_report(){
		if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('return_report');
		
			}
		 else{
			 redirect('back_end');
		 }
	}
}
?>