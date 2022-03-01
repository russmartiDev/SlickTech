<div class="container">
    <div class="row w-100 align-items-center p-2 top-nav navbar fixed-top">
        <div class="col">
            <a href="/" class="slick">Slick<span class="tech glow">TECH</span></a>
        </div>
        <div class="col-2 w-25 input-group">
            <button class="btn btn-light" type="button" id="button-addon1"><i class="fas fa-search"></i></button>
            <input type="text" class="form-control" placeholder="Search For Product" aria-label="" aria-describedby="button-addon1">
        </div>
        <div class="col-1 text-center">
            <a href="/" class="text-light w-100">HOME</a>
        </div>
        <div class="col-1 text-center">
            <a href="/products/all_products" class="text-light w-100">PRODUCTS</a>
        </div>
<?php
        if(empty($this->session->userdata("user_id")))
        {

?>
        <div class="col-1 text-center">
            <a href="/login" class="text-light w-100">LOGIN</a>
        </div>
        <div class="col-1 text-center">
            <a href="/register" class="text-light w-100">REGISTER</a>
        </div>
<?php
        }
        else
        {
?>
        <div class="col-1 text-center align-items-center dropdown">
            <a class="dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $this->session->userdata("user_name"); ?>
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
<?php
        if($this->session->userdata("user_type") == 1)
        {
?>
            <li><a class="dropdown-item" href="/products/admin"><i class="fas fa-tools"></i> Admin</a></li>
<?php
        }
?>
            <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit_profile"><i class="fas fa-user-alt"></i>Edit Profile</button></li>
            <li><a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="col-1 text-center">
            <a href="/dashboard" class="text-light w-100 cart"><i class="fas fa-shopping-cart"></i><div class="cart-count ">12</div></a>
        </div>
<?php
        }
?>
    </div>
</div>
<?php
        $this->load->view("users/profile");
?>