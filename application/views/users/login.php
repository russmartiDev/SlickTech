<?php 
        $this->load->view("partials/header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/login.less")?>">
        <script src="<?= base_url("/Assets/script/register.js")?>"></script>
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <title>Login</title>
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
        <!-- ---------------------------Login Form-------------------------------->
		<form action="/Users/account_login" method="post" class="login">
            <ul>
                <li><i class="fas fa-user"></i><input type="email" placeholder="Email" name="username" required /></li>
                <li><i class="fas fa-lock"></i><input type="password" placeholder="Password" name="password" required /></li>
            </ul>
            <!--------------For Button Animation---------->
			<a><span></span><span></span><span></span><span></span>
            <input type="submit" value="Login" /></a>
			<p>Don't have account yet? <a href="/users/register">Register</a></p>
		</form>
        <!------------------------------------------------------------------------->
	</body>
</html>
