<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Back_End extends MX_Controller{

	
    public function __construct(){
        parent::__construct();
    }

    public function index(){
	
		$this->load->view('head_back'); 
		$this->load->view('dashboard');  
        $this->load->view('foot_back');
    }
	public function admin_data(){
		$this->load->view('head_back');    
		$this->load->view('admin_data');
        $this->load->view('foot_back');
	}
	
	public function category(){
		$this->load->view('head_back');    
		$this->load->view('category');
        $this->load->view('foot_back');
		
	}
}
?>