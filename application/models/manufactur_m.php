<?PHP
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Manufactur_M extends CI_Model {
	
		//Property
		private $manufactur_id;
		private $manufactur_name;
		private $image;
		//Setter
		public function set_manufactur_id($value) {
				$this->manufactur_id = $value;
			}
			
		public function set_manufactur_name($value) {
				$this->manufactur_name = $value;
			}
			
		public function set_image($value) {
				$this->image = $value;
			}
		//Getter
		public function get_manufactur_id() {
				return $this->manufactur_id;
			}
			
		public function get_manufactur_name() {
				return $this->manufactur_name;
			}
			
		public function get_image() {
				return $this->image;
			}
		
		//Method
		public function view(){
				$sql = "SELECT * FROM el_manufactur ";
				return $this->db->query($sql);
			}
							
		public function view_by_manufactur_id() {
				$sql = "SELECT * FROM el_manufactur WHERE manufactur_id='".$this->get_manufactur_id()."'";
				return $this->db->query($sql);
			}
			
		public function insert(){
			$sql = "INSERT INTO el_manufactur() 
				VALUES ('".$this->get_manufactur_id()."',
				'".$this->get_manufactur_name()."',				
				'".$this->get_image()."')";
			$this->db->query($sql);
		}
		
		public function update($manufactur_id) {
			$sql = "UPDATE el_manufactur
					SET 
					manufactur_name='".$this->get_manufactur_name()."',
					image='".$this->get_image()."'		
					WHERE manufactur_id='".$manufactur_id."'";					
			$this->db->query($sql);
		}
		
		public function update_1($manufactur_id) {
			$sql = "UPDATE el_manufactur
					SET 
					manufactur_name='".$this->get_manufactur_name()."'
					WHERE manufactur_id='".$manufactur_id."'";					
			$this->db->query($sql);
		}
		
		public function delete() {
			$sql = "DELETE FROM el_manufactur 
					WHERE manufactur_id='".$this->get_manufactur_id()."'";
			$this->db->query($sql);
		}
	}
?>