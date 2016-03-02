<?PHP
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin_M extends CI_Model {
	
	//Property
		private $admin_id;
		private $email;
		private $name;
		private $password;
		private $role;
	
	//Setter	
		public function set_admin_id($value) {
			$this->admin_id = $value;
		}
			
		public function set_email($value) {
			$this->email = $value;
		}
		
		public function set_name($value) {
			$this->name = $value;
		}
		
		public function set_password($value) {
			$this->password = $value;
		}
		
		public function set_role($value) {
			$this->role = $value;
		}
		
	//Getter
		public function get_admin_id() {
			return $this->admin_id;
		}
		
		public function get_email() {
			return $this->email;
		}
		
		public function get_name() {
			return $this->name;
		}
		
		public function get_password() {
			return $this->password;
		}
		
		public function get_role() {
			return $this->role;
		}
	
	//Method
		public function view() {
			$sql = "SELECT * FROM el_admin ";
			return $this->db->query($sql);
		}
		
		public function validation() {
				$sql = "SELECT * FROM el_admin 
					WHERE email='".$this->get_email()."' AND password='".md5($this->get_password())."'";
			return $this->db->query($sql);
		}	
	}
?>