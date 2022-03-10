<?php
class Reviews extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("review");
        }

        public function add_comment()
        {

            $validation =  $this->review->comment_validation();

            if($validation)
            {
                $this->review->add_comment($this->input->post(NULL, TRUE));
            }

            $data["product_id"] = $this->input->post("product_id", TRUE);
            $data["review"] = $this->review->get_all_review($this->input->post("product_id", TRUE));
            $this->load->view("partials/reviews", $data);
        }

        public function add_reply()
        {
          
            $validation =  $this->review->reply_validation();

            if($validation)
            {
                $this->review->add_reply($this->input->post(NULL, TRUE));
            }

            $data["replies"] = $this->review->get_reply($this->input->post("comment_id", TRUE));
            $this->load->view("partials/reply", $data);
        }
        
}