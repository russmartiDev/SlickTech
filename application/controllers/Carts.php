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

        public function get_cart_items()
        {
            $data["carts"] = $this->cart->get_all_cart();
            
            $this->load->view("partials/cart_items", $data);
        }

        public function add_cart()
        {
            $this->cart->add_to_cart();
        }

        public function count_cart()
        {
            $carts = $this->cart->get_all_cart();
            echo count($carts);
        }

        public function stripe_payment($price)
        {
            \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
    
            \Stripe\Charge::create ([
                /* dollar convert to cents*/
                "amount" => $price * 100, 
                "currency" => "usd",
                "source" => $this->input->post('stripeToken', TRUE),
            ]);
           
        }

        public function add_order()
        {
            $order_infos;

            foreach($this->input->post(NULL) as $name => $input)
            {
                if(is_array($input) && isset($input["check"]))
                {
                    $get_items[] = $input["id"];
                    $item["id"] = $input["id"];
                    $item["quantity"] = $input["quantity"];
                    $order_items[] = $item;
                }
                else if(!is_array($input))
                {
                    $order_infos[$name] = $input;
                }
            }
            $total_price = 0;
            if(!empty($get_items))
            {

                foreach($this->cart->get_items($get_items) as $item)
                {

                    foreach($order_items as $order_qty)
                    {
                        if($order_qty["id"] == $item["id"])
                        {
                            $item["quantity"] = $order_qty["quantity"];
                            $items_result[] = $item;

                            $total_price += $item["quantity"] * $item["price"];
                        }
                    }

                    
                }
                require_once('application/libraries/stripe-php/init.php');

                $this->stripe_payment($total_price);
                $this->cart->delete_items($this->session->userdata("user_id"), $get_items);
                $this->cart->insert_order($this->session->userdata("user_id"), json_encode($order_infos), json_encode($items_result));
                redirect('/carts', 'refresh');
                
            
            }
            else
            {
                echo "Failed";
            }
    
        }
}