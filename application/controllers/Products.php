<?php
class Products extends CI_Controller {

        public function index()
        {
            $this->load->view("products/home");
        }

        public function all_products()
        {
            $this->load->view("products/all_products");
        }
}