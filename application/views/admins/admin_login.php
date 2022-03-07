<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Admin Login</title>
        <!-- -----------Google Fonts------------>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;900&display=swap" rel="stylesheet" />
        <!-- -----------Fonts Awesome----------->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <!-- -----------Jquery------------------>
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!-- -----------Bootstrap--------------->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- -----------Stylesheet-------------->
		<link rel="stylesheet/less" type="text/css" href="../Assets/style/admin_login.less" />
        <!--------------LESS-------------------->
		<script src="https://cdn.jsdelivr.net/npm/less@4"></script>
	</head>
	<body>
        <!-- ------------------Error Indicator-------->
		<div class="error">
			<p>Invalid username, Invalid username, Invalid username, Invalid username, Invalid username, Invalid username,</p>
		</div>
        <!-----------------------------Login Form-------------------------------->
		<form action="/Users/login" method="post" class="login">
			<p class="slick">Slick<span class="tech glow">TECH</span></p>
			<div>
				<i class="fas fa-user"></i>
				<input type="email" placeholder="Email" name="username" required />
			</div>

			<div>
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Password" name="password" required />
			</div>
            <!--------------For Button Animation---------->
			<a>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<input type="submit" class="btn btn-outline-primary" value="Login" />
			</a>
		</form>
	</body>
</html>
