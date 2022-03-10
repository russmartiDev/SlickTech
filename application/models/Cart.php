<?php
class Cart extends CI_Model {

    public function add_to_cart()
    {
        $query ="INSERT INTO `carts` (`user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES (?, ?, ?, NOW(), NOW())";
        $values = array($this->input->post("user_id", true), $this->input->post("product_id", true), $this->input->post("quantity", true));

        return $this->db->query($query, $values);
    }

    public function get_all_cart()
    {
        $query = "SELECT carts.product_id as id, products.name, products.price, SUM(carts.quantity) as quantity FROM slick_tech_db.carts LEFT JOIN products ON carts.product_id = products.id WHERE user_id = 4 GROUP BY carts.product_id";
        return $this->db->query($query)->result_array();
    }

    public function insert_order($user_id, $order_infos, $order_items)
    {
        $query ="INSERT INTO `orders` ( `user_id`, `order_infos`, `order_items`, `created_at`, `updated_at`) VALUES ( ?, ?, ?, NOW(), NOW())";
        $values = array($user_id, $order_infos, $order_items);

        return $this->db->query($query, $values);
    }

    public function get_items($items)
    {
        $query = "SELECT id, name, price FROM products WHERE id IN ?";
        return $this->db->query($query, array($items))->result_array();
    }

    public function delete_items($user_id, $items)
    {
        $query = "DELETE FROM `carts` WHERE user_id = ? AND product_id IN ?";
        return $this->db->query($query, array($user_id, $items));
    }
}
?>