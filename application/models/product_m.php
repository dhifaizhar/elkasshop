<?PHP 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Product_M extends CI_Model {
		
		//Property
		private $product_id;
		private $category_id;
		private $manufactur_id;
		private $product_name;
		private $description;
		private $price;
		private $stock;
		private $status;
		private $image;
		private $discount;
		private $tags;
		private $time_added;
		private $date_added;
		
		//Setter
		public function set_product_id($value) {
			$this->product_id = $value;
		}
		
		public function set_category_id($value) {
			$this->category_id = $value;
		}
		
		public function set_manufactur_id($value) {
			$this->manufactur_id = $value;
		}
		
		public function set_product_name($value) {
			$this->product_name = $value;
		}
		
		public function set_description($value) {
			$this->description = $value;
		}
		
		public function set_price($value) {
			$this->price = $value;
		}
		
		public function set_stock($value) {
			$this->stock = $value;
		}
		
		public function set_status($value) {
			$this->status = $value;
		}
		
		public function set_image($value) {
			$this->image = $value;
		}
		
		public function set_discount($value) {
			$this->discount = $value;
		}
		
		public function set_tags($value) {
			$this->tags = $value;
		}
		
		public function set_time_added($value) {
			$this->time_added = $value;
		}
		
		public function set_date_added($value) {
			$this->date_added = $value;
		}
		
		//Getter
		public function get_product_id() {
			return $this->product_id;
		}
		
		public function get_category_id() {
			return $this->category_id;
		}
		
		public function get_manufactur_id() {
			return $this->manufactur_id;
		}
		
		public function get_product_name() {
			return $this->product_name;
		}
		
		public function get_description() {
			return $this->description;
		}
		
		public function get_price() {
			return $this->price;
		}
		
		public function get_stock() {
			return $this->stock;
		}
		
		public function get_status() {
			return $this->status;
		}
		
		public function get_image() {
			return $this->image;
		}
		
		public function get_discount() {
			return $this->discount;
		}
		
		public function get_tags() {
			return $this->tags;
		}
		
		public function get_time_added() {
			return $this->time_added;
		}
		
		public function get_date_added() {
			return $this->date_added;
		}
		//Method
		public function view(){
			$sql = "SELECT * FROM el_product ";
				return $this->db->query($sql);
		}
		
		public function inner_join(){
			$SQL ="Select * from el_manufactur, el_product Where el_product.manufactur_id = el_manufactur.manufactur_id";
			return $this->db->query($SQL);
		}
		
		public function insert(){
			$sql = "INSERT INTO el_product() 
				VALUES ('".$this->get_product_id()."',
				'".$this->get_category_id()."',
				'".$this->get_manufactur_id()."',
				'".$this->get_product_name()."',
				'".$this->get_description()."',
				'".$this->get_price()."',
				'".$this->get_stock()."',
				'".$this->get_status()."',
				'".$this->get_image()."',
				'".$this->get_discount()."',
				'".$this->get_tags()."',
				'".$this->get_time_added()."',
				'".$this->get_date_added()."')";
			$this->db->query($sql);
		}
	}
?>