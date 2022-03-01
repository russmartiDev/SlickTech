<?php $this->load->view("partials/header.php")?>
<script src="<?= base_url("assets/script/login.js") ?>"></script>
<div class="error">
<?php
    if(!empty($this->session->flashdata('error')))
    {
        echo $this->session->flashdata('error');
        $this->session->unset_userdata('error');
    }
?>
</div>
<form action="/Users/add_account" method="post" class="register">
    <div>
        <i class="far fa-address-card"></i>
        <input type="text" placeholder="First Name" name="first_name" value="<?= isset($_SESSION["first_name"])?$_SESSION["first_name"]:FALSE; ?>">
    </div>
    <div>
        <i class="far fa-address-card"></i>
        <input type="text" placeholder="Last Name" name="last_name" value="<?= isset($_SESSION["last_name"])?$_SESSION["last_name"]:FALSE; ?>">>
    </div>
    <div>
        <i class="fas fa-at"></i>
        <input type="text" placeholder="Email" name="email" value="<?= isset($_SESSION["username"])?$_SESSION["username"]:FALSE; ?>">>
    </div>
    <div>
        <i class="fas fa-phone"></i>
        <input type="number" placeholder="Contact #" name="contact" value="<?= isset($_SESSION["contact"])?$_SESSION["contact"]:FALSE; ?>">>
    </div>
    <div>
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="password">
    </div>
    <div>
         <i class="fas fa-check"></i>
        <input type="password" placeholder="Confirm Password" name="confirm_password">
    </div>
    <input type="submit" value="Register">
    <p>Already have an account? <a href="/login">Login</a></p>
</form>
<?php $this->load->view("partials/footer.php")?>