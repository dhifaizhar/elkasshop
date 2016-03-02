<?PHP
defined('BASEPATH') OR exit('You are not on ELKASSHOP');
class Cart_M extends CI_Model {
    var $table = 'el_cart';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function data_cart(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('el_product', 'el_product.product_id = el_cart.product_id');
        $this->db->order_by('el_cart.time_added','DESC');

        $query = $this->db->get();
        return $query;
    }

    public function data_cart_count(){
        $this->db->select('SUM(quantity) as qty, SUM(price) as total');
        $this->db->from($this->table);
        $this->db->join('el_product', 'el_product.product_id = el_cart.product_id');

        $query = $this->db->get();
        return $query;
    }
    public function data_cart_add($product_id){
        $sql = "INSERT INTO el_cart(customer_id,product_id,quantity,time_added,date_added) VALUES (
                        '1',
                        '".$product_id."',
                        '1',
                        '".date('H:m:s')."',
                        '".date('Y-m-d')."')";
        return $this->db->query($sql);
    }
    function data_cart_delete($cart_id){
        $sql = "DELETE FROM el_cart WHERE cart_id='".$cart_id."'";
        return $this->db->query($sql);
    }

}
?>