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
		$this->load->view('head_back');    
		$this->load->view('product');
        $this->load->view('foot_back');
	}
	
	public function add_product(){
		$this->load->view('add_product');
	}
	
	public function delete($product_id) {
			$this->product_m->set_product_id($product_id);
			$this->product_m->delete();
			return redirect('back_end/product');
	}
}
?>