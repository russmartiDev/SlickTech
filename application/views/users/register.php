<?php 
        $this->load->view("partials/header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/login.less")?>">
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <script src="<?= base_url("/Assets/script/register.js")?>"></script>
        <title>Register</title>
    </head>
    <body>
		<!-- ------------------Error Indicator-------->
		<div class="error">
<?php
        if(!empty($this->session->flashdata('error')))
        {
            echo $this->session->flashdata('error');
        }
?>
		</div>
        <!-------------------------------------------->
        <!-- ---------------------------Register Form-------------------------------->
		<form action="/Users/add_account" method="post" class="register">
            <ul>
                <li><i class="far fa-address-card"></i><input type="text" placeholder="First Name" name="first_name" required/></li>
                <li><i class="far fa-address-card"></i><input type="text" placeholder="Last Name" name="last_name" required/></li>
                <li><i class="fas fa-at"></i><input type="email" placeholder="Email" name="email" required/></li>
                <li><i class="fas fa-phone"></i><input type="number" placeholder="Contact #" name="contact" required/></li>
                <li><i class="fas fa-lock"></i><input type="password" placeholder="Password" name="password" required/></li>
                <li><i class="fas fa-check"></i><input type="password" placeholder="Confirm Password" name="confirm_password" required/></li>
            </ul>
            <!--------------For Button Animation---------->
			<a>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<input type="submit" value="Register" />
			</a>
            <!-------------------------------------------->
			<p>Already have an account? <a href="/users/login">Login</a></p>
		</form>
        <!------------------------------------------------------------------------->
	</body>
</html>
