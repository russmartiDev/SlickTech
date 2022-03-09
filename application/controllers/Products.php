<?php
class Products extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("product");
            $this->load->model("review");
        }

        public function index()
        {
            $this->load->view("products/home");
        }

        public function display_products($count, $page, $products)
        {
      
            $data["categories"] = $this->product->get_all_categories();
            $data["count"] = $count;
            $data["page"] = $page;
            $data["products"] = $products;
            $this->load->view("products/all_products", $data);
        }

        public function all_products($page = 1)
        {
            $count = $this->product->count_all_product()[0]["count"] / 18;
            $products = $this->product->get_all_product_limit(($page -1) * 18 );

            $this->display_products($count, $page, $products);
        }

        public function category($category_id, $page = 1)
        {
            $count = $this->product->count_all_product_by_category($category_id)[0]["count"] / 18;
            $products = $this->product->get_product_by_category_limit($category_id, ($page -1) * 18);

            $this->display_products($count, $page, $products);
        }

        public function search_product($page = 1)
        {
            $search_products = $this->product->search_product_limit(($page -1) * 18);
            $count = $this->product->count_search_product()[0]["count"] / 18;

            $this->display_products($count, $page, $search_products);
        }

        public function show($id)
        {
            $product = $this->product->get_product_by_id($id);
            $data["similar"] = $this->product->similar_products($product["category_id"]);
            $data["product"] = $product;
            $data["review"] = $this->review->get_all_review($id);
            $this->load->view("products/show_products", $data);
        }

        public function add_comment()
        {

            $validation =  $this->review->comment_validation();

            if($validation)
            {
                $this->review->add_comment($this->input->post(NULL, TRUE));
            }

            redirect("/products/show/" . $this->input->post("product_id", TRUE));
        }

        public function add_reply()
        {
          
            $validation =  $this->review->reply_validation();

            if($validation)
            {
                $this->review->add_reply($this->input->post(NULL, TRUE));
            }

            redirect("/products/show/" . $this->input->post("product_id", TRUE));
        }
        
}