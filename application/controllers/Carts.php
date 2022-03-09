<?php
class Products extends CI_Controller {

        // public function __construct()
        // {
        //     parent::__construct();
        //     $this->load->model("product");
        //     $this->load->model("review");
        // }

        public function index()
        {
            $this->load->view("products/cart");
        }

        
}