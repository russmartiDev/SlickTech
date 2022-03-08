<?php
class Products extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("product");
        }
        public function index()
        {
            $this->load->view("products/home");
        }

        public function all_products($page = 1)
        {
            $count = $this->product->count_all_product()[0]["count"] / 18;
            $data["count"] = floor($count) < 1 ? 1 : $count;
            $data["categories"] = $this->product->get_all_categories();
            $data["products"] = $this->product->get_all_product_limit(($page -1) * 18 );
            
            $data["page"] = $page;
            
            $this->load->view("products/all_products", $data);
        }

        public function category($category_id, $page = 1)
        {
            $count = $this->product->count_all_product_by_category($category_id)[0]["count"] / 18;
            $data["count"] = floor($count) < 1 ? 1 : $count;
            $data["categories"] = $this->product->get_all_categories();
            $data["products"] = $this->product->get_product_by_category_limit($category_id, ($page -1) * 18);
            $data["page"] = $page;

            $this->load->view("products/all_products", $data);
        }

        public function show($id)
        {
            
        }
}