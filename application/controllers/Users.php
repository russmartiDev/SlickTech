<?php
class Users extends CI_Controller {

        public function index()
        {
            $this->load->view("users/profile");
        }

        public function login()
        {
            $this->load->view("users/login");
        }

        public function register()
        {
            $this->load->view("users/register");
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect("/products");
        }

        public function account_login()
        {
            $this->load->model("User");
            $user = array(
                "username" => $this->input->post("username", TRUE),
                "password" => md5($this->input->post("password", TRUE))
            );
               
            $user = $this->User->login($user);
    
            if(!empty($user))
            {
                $this->session->set_userdata("user_id", $user["id"]);
                $this->session->set_userdata("user_name", $user["first_name"] . " " . $user["last_name"]);
                redirect("products/all_products");
            }
            else
            {
                $this->session->set_flashdata('error', "<p>Invalid email or password</p>");
                redirect("users/login");
            }
        }
        
        public function add_account()
        {
    
            $this->load->model("User");
    
            $validate = $this->User->register_validation();
    
            if(!$validate)
            {
                $this->session->set_flashdata('error', validation_errors());
                redirect("/Users/register");
            }
            else
            {
                $values= array(
                    "first_name"=> $this->input->post("first_name", TRUE),
                    "last_name"=> $this->input->post("last_name", TRUE),
                    "contact"=> $this->input->post("contact", TRUE),
                    "email"=> $this->input->post("email", TRUE),
                    "password"=> md5($this->input->post("password", TRUE)),
                );
    
                $contacts = $this->User->add_user($values);
                redirect("users/login");
            }
        }
}