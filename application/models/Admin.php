<?php
class Admin extends CI_Model {

    function login($user)
    {
        return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ? AND type = 1", array($user['username'], $user['password']))->row_array();
    }

    public function count_all_orders()
    {
        return $this->db->query("SELECT COUNT(*) as count FROM orders")->result_array();
    }

    function get_all_orders($page)
    {
        $query = "SELECT id, status, order_info, DATE_FORMAT(created_at, '%m/%d/%Y') as date FROM orders";
        $values;
        if(!empty($this->input->post("search",true)) || !empty($this->input->post("filter",true)))
        {
            $query .= " WHERE 1=1";

            if(!empty($this->input->post("search",true)))
            {
                $query .= " AND order_info LIKE ?";
                $values[] = "%" . $this->input->post("search",true) . "%";
            }

            if(!empty($this->input->post("filter",true)))
            {
                $query .= " AND status = ?";
                $values[] = $this->input->post("filter",true);
            }
            
        }

        $query .= " LIMIT ?, 7";
        $values[] = $page;
    
        return $this->db->query($query, $values)->result_array();
    }

    public function update_order_status()
    {
        $value = array(
            $this->input->post("status_update", true),
            $this->input->post("order_id", true)
        );
        return $this->db->query("UPDATE `orders` SET `status` = ? WHERE id = ?", $value);
    }


    
}
?>