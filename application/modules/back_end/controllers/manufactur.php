<?PHP
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manufactur extends MX_Controller{
	 public function __construct(){
        parent::__construct();
		
		 $this->load->library('template');
		 $this->load->model('manufactur_m');
		 $this->load->helper(array('form', 'url'));
    }
	
	
	
	public function index(){
		
		$this->load->view('manufactur/add_manufactur',array('error' => ' ' )); 
	}
	
	public function insert(){
		$config['upload_path']='./assets/images/manufactur_img';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
			
			
		//masukan konfigurasi
		$this->load->library('upload',$config);
		

		
		//proses upload
		if ( $this->upload->do_upload("image"))
		{
			$data=$this->upload->data();
			$this->manufactur_m->set_manufactur_name($this->input->post("manufactur_name"));
			$this->load->helper('inflector');
			$file_name = underscore($_FILES['file_var_name']['name']);
			$config['file_name'] = $file_name;
			$this->manufactur_m->set_image($data["file_name"]);
			$image= $data["file_name"];
			
			$this->thumbnail_manufactur($image);
			$this->manufactur_m->insert();
			
			 return redirect('back_end/manufactur_view');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('manufactur/add_manufactur', $error);	
		}
		
		
	}
	
	public function thumbnail_manufactur($image) {
		$config['source_image'] = './assets/images/manufactur_img/'.$image;
		$config['new_image'] = './assets/images/manufactur_img/thumbnail/'.$image;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 50;
		$config['height'] = 50;
		$this->load->library('image_lib', $config); 
			if (!$this->image_lib->resize()) {
				echo "tum" . $this->image_lib->display_errors();
		}
	}
	
	public function view_edit($manufactur_id){
		if(! empty($manufactur_id)) {				
			$this->manufactur_m->set_manufactur_id($manufactur_id);
			
			$row = $this->manufactur_m->view_by_manufactur_id()->row();
			
			$data["manufactur_id"] = $row->manufactur_id;
			$data["manufactur_name"] = $row->manufactur_name;
			$data["image"] = $row->image;
			}
			
			
			
			$this->load->view('manufactur/add_manufactur',$data);	
	}
	
	public function update() {
		$config['upload_path']='./assets/images/manufactur_img';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
			
			
		//masukan konfigurasi
		$this->load->library('upload',$config);
		

		
		//proses upload
		if ( $this->upload->do_upload("image"))
		{
			$data=$this->upload->data();
			$this->manufactur_m->set_manufactur_id($this->input->post("manufactur_id"));
			$this->manufactur_m->set_manufactur_name($this->input->post("manufactur_name"));
			$this->load->helper('inflector');
			$file_name = underscore($_FILES['file_var_name']['name']);
			$config['file_name'] = $file_name;
			$this->manufactur_m->set_image($data["file_name"]);
			$image= $data["file_name"];
			
			$this->thumbnail_manufactur($image);
			$this->manufactur_m->update($this->input->post("manufactur_id"));
			
			 return redirect('back_end/manufactur_view');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			$this->view_edit($this->input->post("manufactur_id"));
			
		}
	
		}
	
	public function delete($manufactur_id) {
			$this->manufactur_m->set_manufactur_id($manufactur_id);
			
			$row = $this->manufactur_m->view_by_manufactur_id()->row();
			$data["image"] = $row->image;
			$file = $row->image;
			unlink("./assets/images/manufactur_img/".$data["image"]);
			unlink("./assets/images/manufactur_img/thumbnail/".$data["image"]);
			$this->manufactur_m->delete();
			return redirect('back_end/manufactur_view');
	}
}
?>