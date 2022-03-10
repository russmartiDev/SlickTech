<?php
class User extends CI_Model {

    function add_user($user)
    {
        $type = empty($this->db->query("SELECT * FROM users")->row_array()) ? 1 : 0;
        
        $query ="INSERT INTO `users` (`first_name`, `last_name`, `contact`, `email`, `type`, `password`, `created_at`, `updated_at`)
                 VALUES (?, ?, ?, ?, ?, ?, SYSDATE(), SYSDATE())";
        $values = array($user['first_name'], $user['last_name'], $user['contact'], $user['email'], $type, $user['password']);
        
        return $this->db->query($query, $values);
    }

    function get_default_shipping($id)
    {
        $query = "SELECT shipping_info FROM users WHERE id = ?";
        return $this->db->query($query, array($id))->row_array();
    }

    function login($user)
    {
        return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ?", array($user['username'], $user['password']))->row_array();
    }

    function register_validation()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("first_name", "first name", "trim|required|min_length[2]|alpha");
        $this->form_validation->set_rules("last_name", "last name", "trim|required|min_length[2]|alpha");
        $this->form_validation->set_rules("contact", "contact", "trim|required|exact_length[11]|numeric|regex_match['^09.{9}$']|is_unique[users.contact]");
        $this->form_validation->set_rules("email", "email", "trim|required|valid_email|is_unique[users.email]");
        $this->form_validation->set_rules("password", "password", "trim|required|min_length[8]");
        $this->form_validation->set_rules("confirm_password", "confirm password", "trim|required|matches[password]");

        if($this->form_validation->run() === FALSE)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
?>