<?php
class Carts extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("cart");
        }

        public function index()
        {
            $this->load->view("products/cart");
        }

        public function add_cart()
        {
            $this->cart->add_to_cart();
        }
}