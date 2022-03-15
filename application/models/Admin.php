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

    public function view_order($id)
    {
        return $this->db->query("SELECT * FROM orders WHERE id = ?", array($id))->row_array();
    }

    public function all_products($page)
    {
        $query = "SELECT * FROM products";

        if(!empty($this->input->post("search",true)))
        {
            $query .= " WHERE name LIKE ?";
            $values[] = "%" . $this->input->post("search",true) . "%";
        }
        $query .=" ORDER BY created_at DESC";
        $query .= " LIMIT ?, 10";
        $values[] = $page;

       

        return $this->db->query($query, $values)->result_array();
    }

    public function count_all_products()
    {
        $query = "SELECT COUNT(*) as count FROM products";
        
        if(!empty($this->input->post("search",true)))
        {
            $query .= " WHERE name LIKE ?";
            $values[] = "%" . $this->input->post("search",true) . "%";

            return $this->db->query($query, $values)->result_array();
        }


        return $this->db->query($query)->result_array();
    }

    public function delete_product($id)
    {
        return $this->db->query("DELETE FROM `products` WHERE id = ?", array($id));
    }

    public function get_all_categories()
    {
        return $this->db->query("SELECT * FROM categories")->result_array();
    }

    public function add_category()
    {
        $query= "INSERT INTO `categories` (`name`, `created_at`, `updated_at`) VALUES (?, NOW(), NOW())";
        return $this->db->query($query, array($this->input->post("category_add", true)));
    }

    public function edit_category()
    {
        $query = "UPDATE `slick_tech_db`.`categories` SET `name` = ? WHERE id =?";
        $values = array($this->input->post("category_name", true), $this->input->post("category_id", true));

        return $this->db->query($query, $values);
    }

    public function delete_category()
    {
        $query = "DELETE FROM `categories` WHERE id = ?";
        $values = array($this->input->post("category_id_del", true));

        return $this->db->query($query, $values);
    }

    public function add_product()
    {
        $query = "INSERT INTO `products` (`category_id`, `name`, `description`, `inventory`, `price`, `img_url`,  `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?,?, NOW(), NOW() )";
        $values = array(
            $this->input->post("category", true),
            $this->input->post("name", true),
            $this->input->post("description", true),
            $this->input->post("stocks", true),
            $this->input->post("price", true),
            '
            {
                "img_1":"https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
                "img_2":"https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
                "img_3":"https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
                "img_4":"https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
                "img_5":"https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
                "img_6":"https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80"
             }'
        );
        return $this->db->query($query, $values);
    }

    public function get_product_by_id()
    {
        $query = "SELECT id, name, description, inventory, price FROM products WHERE id = ?";
        return $this->db->query($query, array($this->input->post("id", true)))->row_array();
    }

    public function update_product()
    {
        $query = "UPDATE `products` SET `name` = ?, `description` = ?, `inventory` = ?, `price` = ?, `updated_at` = NOW()  WHERE `id` = ?";
        $values = array(

            $this->input->post("name", true),
            $this->input->post("description", true),
            $this->input->post("stocks", true),
            $this->input->post("price", true),
            $this->input->post("edit_id", true),

        );
        return $this->db->query($query, $values);
    }
}
?>