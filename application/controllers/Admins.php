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

        public function update_status()
        {
            $orders = $this->Admin->update_order_status();
        }

        public function view_order($id)
        {
            $orders = $this->Admin->view_order($id);
     
            if ($orders["status"] == 1)
            {
                $status = "Order in process";
            }
            else if ($orders["status"] == 2)
            {
                $status = "Shipped";
            }
            else
            {
                $status = "Cancelled";
            }
  
            
            $this->load->view("admins/order_view", array("orders" => $orders, "status" => $status));
        }

        public function product_list_partial($page = 1)
        {
            $data["products"] = $this->Admin->all_products(($page -1) * 10);
            $data["count"] = $this->Admin->count_all_products()[0]["count"] / 10;
            $this->load->view("partials/admin_product_list", $data);
        }

        public function product_list()
        {
            $categories = $this->Admin->get_all_categories();
            $this->load->view("admins/admin_products");
        }

        public function delete_product($id)
        {
            $this->Admin->delete_product($id);
            $this->product_list();
        }

        public function add_category()
        {
            if(!empty($this->input->post("category_add", true)))
            {
                $this->Admin->add_category();
            }

            $data["categories"] = $this->Admin->get_all_categories();
            $this->load->view("partials/category_list", $data);
        }

        public function edit_category()
        {
            if(!empty($this->input->post("category_name", true)))
            {
                $this->Admin->edit_category();
            }

            $data["categories"] = $this->Admin->get_all_categories();
            $this->load->view("partials/category_list", $data);
        }

        public function delete_category()
        {

            $this->Admin->delete_category();

            $data["categories"] = $this->Admin->get_all_categories();
            $this->load->view("partials/category_list", $data);
        }

        public function add_new_product()
        {
           $this->Admin->add_product();
           $this->product_list_partial();
        }

        public function edit_product()
        {
            $product = $this->Admin->get_product_by_id();

            echo json_encode($product);
        }

        public function update_product()
        {
            $this->Admin->update_product();
            $this->product_list_partial();
        }




}