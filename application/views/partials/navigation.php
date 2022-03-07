<!---------------------Navigation-------------------->
<nav class="container">
    <div class="row w-100 align-items-center p-2 top-nav navbar fixed-top">
        <div class="col col-12 col-md-3 col-lg-2 col-xl-5">
            <a href="" class="slick">Slick<span class="tech glow">TECH</span></a>
        </div>

        <div class="col-12 col-md-9 col-lg-10 col-xl-3">
            <input type="search" class="form-control w-100" placeholder="Search For Product" aria-label="" aria-describedby="button-addon1">
        </div>

        <div class="col-auto col-lg-1 text-center">
            <a href="/products" class="text-light w-100">HOME</a>
        </div>

        <div class="col-auto col-lg-1 text-center">
            <a href="/products/all_products" class="text-light w-100">PRODUCTS</a>
        </div>
<?php
        if(empty($this->session->userdata("user_id")))
        {
?>
        <div class="col-auto col-lg-1 text-center">
            <a href="/Users/login" class="text-light w-100">LOGIN</a>
        </div>

        <div class="col-auto col-lg-1 text-center">
            <a href="/Users/register" class="text-light w-100">REGISTER</a>
        </div>
<?php
        }
        else
        {
?>
        <div class="col-auto col-lg-1 text-center align-items-center dropdown">
            <a class="dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $this->session->userdata("user_name"); ?>
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../Users/Profile.html"><i class="fas fa-user-alt"></i>Edit Profile</button></a></li>
            <li><a class="dropdown-item" href="/users/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        
        <div class="col-auto col-lg-1 mt-1 text-center">
            <a href="cart.html" class="text-light w-100 cart"><i class="fas fa-shopping-cart"></i><div class="cart-count ">12</div></a>
        </div>
<?php 
        }
?>



    </div>
</nav>