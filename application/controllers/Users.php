<?php
class Users extends CI_Controller
{
    public function index()
    {
        $this->load->view("users/login");
    }

    public function register()
    {
        $this->load->view("users/register");
    }


}
?>