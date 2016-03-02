<?PHP
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends MX_Controller{
    public function __construct(){
        parent::__construct();
		
		 $this->load->library('template');
		 $this->load->model('category_m');
    }
	
	public function index(){
	   
	   if($this->session->userdata("role") == "Admin" || $this->session->userdata("role") == "Super_Admin"){
			$this->load->view('category/add_category');
		}
		 else{
			 redirect('back_end');
		 }		
	}
	
	public function insert(){
			$this->category_m->set_category_name($this->input->post("category_name"));
			$this->category_m->set_category_parent($this->input->post("category_parent"));
            $this->category_m->set_level($this->input->post("level"));
            $this->category_m->set_description($this->input->post("description"));
            $this->category_m->set_status($this->input->post("status"));
            $this->category_m->insert();
            return redirect('back_end/categories');
	}
	
	public function delete($category_id) {
			$this->category_m->set_category_id($category_id);
			$this->category_m->delete();
			return redirect('back_end/categories');
	}
	
	public function update() {
			$this->category_m->set_category_id($this->input->post("category_id"));
			$this->category_m->set_category_name($this->input->post("category_name"));
			$this->category_m->set_category_parent($this->input->post("category_parent"));
            $this->category_m->set_level($this->input->post("level"));
			$this->category_m->set_description($this->input->post("description"));
			$this->category_m->set_status($this->input->post("status"));			
			$this->category_m->update($this->input->post("category_id"));
			return redirect('back_end/categories');
		}
		
	public function view_edit($category_id){
		if(! empty($category_id)) {				
			$this->category_m->set_category_id($category_id);
			
			$row = $this->category_m->view_by_category_id()->row();
			
			$data["category_id"] = $row->category_id;
			$data["category_name"] = $row->category_name;
			$data["category_parent"] = $row->category_parent;
			$data["level"] = $row->level;
			$data["description"] = $row->description;
			$data["status"] = $row->status;
			}
			
			$this->load->view('category/add_category',$data);	
	}	
}
?>