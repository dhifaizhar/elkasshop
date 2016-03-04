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
			$this->load->view('product/add_product');
		}
		 else{
			 redirect('back_end');
		 }		
	}
	
	public function insert(){
		$this->product_m->set_category_id($this->input->post("category_id"));
		$this->product_m->set_manufactur_id($this->input->post("manufactur_id"));
		$this->product_m->set_product_name($this->input->post("product_name"));
		$this->product_m->set_description($this->input->post("description"));
		$this->product_m->set_price($this->input->post("price"));
		$this->product_m->set_stock($this->input->post("stock"));
		$this->product_m->set_status($this->input->post("status"));
		$this->product_m->set_discount($this->input->post("discount"));
		$this->product_m->set_tags($this->input->post("tags"));
		$this->product_m->set_time_added($this->input->post("time_added"));
		$this->product_m->set_date_added($this->input->post("date_added"));
		
		$config['upload_path']='./assets/images/product_img';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '3000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		//masukan konfigurasi
		$this->load->library('upload',$config);
				
		//proses upload
		if ($this->upload->do_upload("image")){
			$data=$this->upload->data();
			$this->load->helper('inflector');
			$file_name = underscore($_FILES['file_var_name']['name']);
			$config['file_name'] = $file_name;
			$this->product_m->set_image($data["file_name"]);
			$image= $data["file_name"];
			
			$this->thumbnail_product($image);
			$this->product_m->insert();
			
			return redirect('back_end/product');
		}
	}
	
	public function delete($product_id) {
			$this->product_m->set_product_id($product_id);
			$this->product_m->delete();
			return redirect('back_end/product');
	}
}
?>