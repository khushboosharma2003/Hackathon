<?php
include "navbar.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="login_css.css">
	<meta name="viewport"
		content="width=device-width,
						initial-scale=1.0">
	<title>TechPro</title>
	
</head>

<body>
	<header>
		<h1 class="heading">TechPro</h1>
		
	</header>

	<div class="container">

		
		<div class="slider"></div>
		<div class="btn">
			<button class="login">Login</button>
			<button class="signup">Signup</button>
		</div>
		<div class="form-section">
			<!-- login form -->
			<div class="login-box">
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com">
				<input type="password"
					class="password ele"
					placeholder="password">
				<button class="clkbtn">Login</button>
			</div>
			<!-- signup form -->
			<form class="signup-box" action="signup.php" method="POST">
				<input type="text"
					class="name ele"
					placeholder="Enter your name" name="name">
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com" name="email">
				<input type="password"
					class="password ele"
					placeholder="password" name="password">
				<input type="password"
					class="password ele"
					placeholder="Confirm password" name="password">
				<input class="clkbtn" type="submit" value="signup">
			</form>
		</div>
	</div>
	<script src="script_login.js"></script>
</body>
</html>
