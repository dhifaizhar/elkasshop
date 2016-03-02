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
		private $quantity;
		private $status;
		private $image;
		private $data_added;
		private $data_available;
		
		//Setter
		//Getter
		//Method
		public function view(){
			$sql = "SELECT * FROM el_product ";
				return $this->db->query($sql);
		}
	}
?>