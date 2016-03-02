<?PHP
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MX_Controller{
    public function __construct(){
        parent::__construct();
		
		 $this->load->library('template');
		 $this->load->model('admin_m');
    }
	
	public function index(){
	   
		$this->load->view('admin/login');
      
	}
	
	public function sign_in() {
			$this->admin_m->set_email($this->input->post("email"));
			$this->admin_m->set_password($this->input->post("password"));
			$query=$this->admin_m->validation();	
			if($query->num_rows()){
				$row = $query->row();
				switch($row->role) {
					case 0 :
						 $role = "Super_Admin";
						 break;
					case 1 :
						$role = "Admin";
				 }
				 $this->session->set_userdata("role", $role);
				 $this->session->set_userdata("admin_id",$row->admin_id);
				 $this->session->set_userdata("name",$row->name);
				 $this->session->set_userdata("email",$row->email);
				 redirect("back_end/dashboard");
			}
		
			else{
				$this->session->set_flashdata('notification', '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>  <h4><i class="icon fa fa-ban"></i> Maaf!</h4> Alamat Email dan kata sandi tidak sesuai </div>');
				redirect("back_end");
			}
					
	}
	
	public function sign_out() {
		$this->session->sess_destroy();
		redirect("back_end");
	}
}

?>