<?php
class Admins extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Admin");
        }

        public function index()
        {
            $this->load->view("admins/admin_login");
        }

        public function account_login()
        {
            $user = array(
                "username" => $this->input->post("username", TRUE),
                "password" => md5($this->input->post("password", TRUE))
            );
               
            $user = $this->Admin->login($user);
    
            if(!empty($user))
            {
                $this->session->set_userdata("admin_id", $user["id"]);
                $this->session->set_userdata("admin_name", $user["first_name"] . " " . $user["last_name"]);
                redirect("/admins/orders");
            }
            else
            {
                $this->session->set_flashdata('error', "<p>Invalid email or password</p>");
                redirect("/admins");
            }
        }

        public function orders()
        {
            $count = $this->Admin->count_all_orders()[0]["count"] / 7;
            $this->load->view("admins/orders", array("count" => $count));
        }

        public function order_list($page = 1)
        {
            $orders = $this->Admin->get_all_orders(($page -1) * 7);

            if(!empty($orders))
            {
                foreach($orders as $order)
                {
                    $order["order_info"] = json_decode($order["order_info"],true);
                    $data["all_order"][] = $order;
                }
            }
     
            $data["status"] = array("Order in process" => 1, "Shipped" => 2, "Cancelled" => 3);

            $this->load->view("partials/order_item_list", $data);
        }

        public function product_list()
        {
            $this->load->view("admins/admin_products");
        }

        public function update_status()
        {
            $orders = $this->Admin->update_order_status();
        }

        public function view_order()
        {
            $this->load->view("admins/order_view");
        }
}