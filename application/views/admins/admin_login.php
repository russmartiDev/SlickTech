<?php 
        $this->load->view("partials/admin_header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/admin_login.less")?>">
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <title>Admin Login</title>
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
        <!-----------------------------Login Form-------------------------------->
		<form action="/admins/account_login" method="post" class="login">
			<p class="slick">Slick<span class="tech glow">TECH</span></p>
			<div>
				<i class="fas fa-user"></i>
				<input type="email" placeholder="Email" name="username" required />
			</div>

			<div>
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Password" name="password" required />
			</div>
			<a><input type="submit" class="btn btn-outline-primary" value="Login" /></a>
		</form>
	</body>
</html>
