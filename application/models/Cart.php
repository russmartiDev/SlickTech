<?php
class Cart extends CI_Model {

    public function add_to_cart()
    {
        $query ="INSERT INTO `carts` (`user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES (?, ?, ?, NOW(), NOW())";
        $values = array($this->input->post("user_id", true), $this->input->post("product_id", true), $this->input->post("quantity", true));

        return $this->db->query($query, $values);
    }
}
?>