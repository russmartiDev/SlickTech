<?php
class Product extends CI_Model {
    
    function get_product_by_id($product)
    {
        return $this->db->query("SELECT * FROM `products` WHERE id = ?", array($product))->row_array();
    }
    
    
    function count_all_product()
    {
        return $this->db->query("SELECT COUNT(*) as count FROM products")->result_array();
    }

    function get_all_product_limit($page)
    {
        $value = array();
        $query = "SELECT * FROM products";

        if(!empty($this->input->GET("search", true)))
        {
            $query .= " WHERE name LIKE ?";
            $value[] = "%".$this->input->GET("search", true)."%";
        }

        if($this->input->GET("sort", true) == "price")
        {
            $query .= " ORDER BY price DESC";
        }
        else if($this->input->GET("sort", true) == "sold")
        {
            $query .= " ORDER BY sold DESC";
        }

        $query .= " LIMIT ?, 18";
        $value[] = $page;

        return $this->db->query($query, $value)->result_array();
    }

    function get_all_categories()
    {
        return $this->db->query("SELECT CONCAT(categories.name,' (', count(products.id), ')') as name, categories.id as id FROM products LEFT JOIN categories ON categories.id = products.category_id GROUP BY products.category_id")->result_array();
    }

    function get_product_by_category_limit($category_id, $page)
    {
        $query = "SELECT * FROM products WHERE category_id = ?";
        $value = array($category_id);

        if(!empty($this->input->GET("search", true)))
        {
            $query .= " AND name LIKE ?";
            $value[] = "%".$this->input->GET("search", true)."%";
        }

        if($this->input->GET("sort", true) == "price")
        {
            $query .= " ORDER BY price DESC";
        }
        else if($this->input->GET("sort", true) == "sold")
        {
            $query .= " ORDER BY sold DESC";
        }
        
        $query .= " LIMIT ?, 18";
        $value[] = $page;
        return $this->db->query($query, $value)->result_array();
    }

    function count_all_product_by_category($category_id)
    {
        return $this->db->query("SELECT COUNT(*) as count FROM products WHERE category_id = ? ", array($category_id))->result_array();
    }
  
}
?>