<?PHP if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Category_M extends CI_Model {
		
		//Property
		private $category_id;
		private $category_name;
		private $category_parent;
		private $level;
		private $description;
		private $status;
		
		//Setter
		public function set_category_id($value) {
			$this->category_id = $value;
		}
		
		public function set_category_name($value) {
			$this->category_name = $value;
		}
		
		public function set_category_parent($value) {
			$this->category_parent = $value;
		}
		
		public function set_level($value) {
			$this->level = $value;
		}
		
		public function set_description($value) {
			$this->description = $value;
		}
		
		public function set_status($value) {
			$this->status = $value;
		}
		
		//Getter
		public function get_category_id() {
			return $this->category_id;
		}
		
		public function get_category_name() {
			return $this->category_name;
		}
		
		public function get_category_parent() {
			return $this->category_parent;
		}
		
		public function get_level() {
			return $this->level;
		}
		
		public function get_description() {
			return $this->description;
		}
		
		public function get_status() {
			return $this->status;
		}
		
		//Method
		
		public function view(){
			$sql = "SELECT * FROM el_category ";
				return $this->db->query($sql);
		}
		
				
		public function view_by_category_id() {
			$sql = "SELECT * FROM el_category WHERE category_id='".$this->get_category_id()."'";
			return $this->db->query($sql);
		}
		
		public function insert(){
			$sql = "INSERT INTO el_category() 
				VALUES ('".$this->get_category_id()."',
				'".$this->get_category_name()."',
				'".$this->get_category_parent()."',
				'".$this->get_level()."',
				'".$this->get_description()."',
				'".$this->get_status()."')";
			$this->db->query($sql);
		}
		
		public function update($category_id) {
			$sql = "UPDATE el_category 
					SET 
					category_name='".$this->get_category_name()."',
					description='".$this->get_description()."',
					category_parent='".$this->get_category_parent()."',
					level='".$this->get_level()."',
					status='".$this->get_status()."'		
					WHERE category_id='".$category_id."'";					
			$this->db->query($sql);
		}
		
		public function delete() {
			$sql = "DELETE FROM el_category 
					WHERE category_id='".$this->get_category_id()."'";
			$this->db->query($sql);
		}
	}
?>