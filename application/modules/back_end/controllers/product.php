<?PHP
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends MX_Controller{
    public function __construct(){
        parent::__construct();
		
		 $this->load->library('template');
		 $this->load->model('product_m');
		 $this->load->model("category_m");
    }
	
	public function index(){
		 if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('head_back');    
			$this->load->view('product');
			
		}
		 else{
			 redirect('back_end');
		 }	
	}
	
	public function add_product(){
		 if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('add_product');
		}
		 else{
			 redirect('back_end');
		 }		
	}
	
	public function delete($product_id) {
			$this->product_m->set_product_id($product_id);
			$this->product_m->delete();
			return redirect('back_end/product');
	}
}
?>