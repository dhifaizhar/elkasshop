<?PHP
    class Product_M extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function data_product($limit,$offset,$ordercol = 'product_id',$orderby = 'ASC'){
            $this->db->order_by($ordercol,$orderby);
            $query = $this->db->get('el_product',$limit,$offset);
            return $query->result();
        }

        function data_product_category($category_id, $limit,$offset){
            $query = $this->db->get_where('el_product',array('category_id' => $category_id), $limit,$offset);
            return $query->result();
        }

        function data_product_detail($product_id){
            $this->db->select('*');
            $this->db->from('el_product');
            $this->db->join('el_category', 'el_category.category_id = el_product.category_id');
            $this->db->where(array('product_id' => $product_id));

            $query = $this->db->get();
            return $query->result();
        }

    }
?>